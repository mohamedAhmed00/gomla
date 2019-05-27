<?php

namespace App\Http\Controllers\wishlist;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;

class WishlistController extends Controller
{

    public function getAllWishlist()
    {
        $token = session('auth_token');

        $headr = array();
        $headr[] = 'Authorization:' . $token;

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/user/wishlist');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);
        $xproducts = json_decode($rest);

        if (isset($xproducts->Status)) {
            if ($xproducts->Status == "Error") {

                return redirect('/login')->with('message', 'يجب عليك تسجيل الدخول اولا');
            }
        }

        return view('wishlist.wishlist', compact('xproducts'));

    }

    public function addWishlist(Request $request)
    {

        dd(9);

        $token = session('auth_token');

        $postdata = $request->all();
        dd($postdata);


        $headr = array();
        $headr[] = 'Authorization:' . $token;

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/user/wishlist');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($crl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $res = curl_exec($crl);
        $result = json_decode($res);

//print_r($res);

        if (isset($result->message)) {
            if ($result->message == "تم الاضافه بنجاح.") {
                return 1;

            }else if ($result->message == "Missing Headers") {
                return 2;

            }
            else if ($result->message == "المنتج مسجل بالفعل ") {

                $cr = curl_init();
                curl_setopt($cr, CURLOPT_URL, 'http://163.172.33.245/goomla/api/user/wishlist?id='.$postdata['id']);
                curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($cr, CURLOPT_POST, true);
                curl_setopt($cr, CURLOPT_CUSTOMREQUEST, "DELETE");
                curl_setopt($cr, CURLOPT_HTTPHEADER, $headr);
                curl_setopt($cr, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($cr, CURLOPT_SSL_VERIFYPEER, false);

                $rest = curl_exec($cr);
                $result = json_decode($rest);


                return 0;
            }
        }

    }


    public function deleteWishlist(Request $request)
    {

        $token = session('auth_token');

        $postdata = $request->all();

        $data = array(
            'id' => $postdata['id'],
        );
        $headr = array();
        $headr[] = 'Authorization:' . $token;

        $crl = curl_init();

        $crl = curl_init();
        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/user/wishlist?id=' . $data['id']);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        curl_exec($crl);
        $rest = curl_exec($crl);

        $xproducts =  json_decode($rest);


        return redirect()->back()->with('xproducts', $xproducts,'message','تم حذف المنتج بنجاح .');


    }


}
