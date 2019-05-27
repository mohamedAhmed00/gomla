<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;

class UserController extends Controller
{

    public function showResetPasswrod()
    {
        return view('user.reset-password');
    }

    public function resetPasswrod(Request $request)
    {

        $postdata = $request->all();
//        dd($postdata['email']);
        $headr = array();

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/reset/password');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($crl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($crl, CURLOPT_HEADER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);
//        dd($rest);
        $result = json_decode($rest);

        return redirect('/login')->with('message', 'تم ارسال رابط تغيير كلمه المرور الي بريك الالكتروني بنجاح');
//        dd($result);
    }


    public function addaddressform()
    {
        return view('user.newaddress');
    }

    public function addaddress(Request $request)
    {
        $token = session('auth_token');
        $district_id = session('district_id');

        $this->validate($request,[
            'address_phone' => 'required',
            'floor_number' => 'required',
            'apartment_number' => 'required',
            'building_number' => 'required',
            'street' => 'required',
            'nearest_landmark' => 'required',
            'region' => 'required',
            'city' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'address_title' => 'required',
        ],[

        ]);
        $postdata = $request->all();

        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;


        $crl2 = curl_init();

        curl_setopt($crl2, CURLOPT_URL, 'http://163.172.33.245/goomla/api/address');
        curl_setopt($crl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl2, CURLOPT_POST, true);
        curl_setopt($crl2, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($crl2, CURLOPT_FOLLOWLOCATION, true);
//        curl_setopt($crl2, CURLOPT_HEADER, true);
        curl_setopt($crl2, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl2, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl2, CURLOPT_SSL_VERIFYPEER, false);

        $rest2 = curl_exec($crl2);

        $result = json_decode($rest2);
        if (isset($result->Status) && $result->Status == "Erorr") {
            if (isset($result->message)) {
                return $result->message;
            }

        }
        return 1;

    }

    public function getUserOrders(Request $request)
    {
//        $token = session('auth_token');

        $headr = array();
//        $headr[] = 'Authorization:' . $token;
        $token = session('auth_token');
        $district_id = session('district_id');
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/delivery/user/orders');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($crl, CURLOPT_HEADER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);

        $user_orders_history = json_decode($rest);
        $json_errors = array(
            JSON_ERROR_NONE => 'No error has occurred',
            JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded',
            JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded',
            JSON_ERROR_SYNTAX => 'Syntax error',
        );


        if (isset($user_orders_history->Status)) {
            if ($user_orders_history->Status == "Error") {
                return redirect('/login');
            }
        }

        return view('user.orders-history', compact('user_orders_history'))->with('message', 'تمت عمليه الشراء بنجاح');


    }


    public function getUserOrdersHistory(Request $request, $id)
    {

        $headr = array();
        $token = session('auth_token');
        $district_id = session('district_id');
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;


        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/delivery/user/orders/' . $id);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($crl, CURLOPT_HEADER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);

        $user_orders_history = json_decode($rest);

        $json_errors = array(
            JSON_ERROR_NONE => 'No error has occurred',
            JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded',
            JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded',
            JSON_ERROR_SYNTAX => 'Syntax error',
        );

//        dd($user_orders_history);

        if (isset($user_orders_history->Status)) {
            if ($user_orders_history->Status == "Error") {
                return redirect('/login');
            }
        }


        return view('user.order-history-details', compact('user_orders_history'));


    }


    public function getUserData(Request $request)
    {

        $token = session('auth_token');
        $district_id = session('district_id');

        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;


//        dd($token);
        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/user/data');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
//        curl_setopt($crl, CURLOPT_HEADER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);

        $userData = json_decode($rest);
        $json_errors = array(
            JSON_ERROR_NONE => 'No error has occurred',
            JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded',
            JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded',
            JSON_ERROR_SYNTAX => 'Syntax error',
        );

        if (isset($userData->Status)) {
            if ($userData->Status == "Error") {
                return redirect('/login');
            }
        }
        return view('user.profile', compact('userData'));


    }


}
