<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;

//use Session;

class LoginController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');

    }

    public function register(Request $request)
    {
        $postdata = $request->all();
        $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => 'http://163.172.33.245/goomla/api/register',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postdata,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HEADER => false,

        ));

        $output = curl_exec($ch);
        $result = json_decode($output);

        if (isset($result->auth_token)) {
            session(['auth_token' => $result->auth_token]);

            if ($this->isAddressesInTheSameWarehouse($result)) {
                session(['district_id' => $result->address[0]->region]);
                session(['warehouse_count' => 1]);
            } else {
                session(['warehouse_count' => 2]);
            }
            return 1;
        }
        if (isset($result->phone)) {
            return $result->phone[0];
        } else if (isset($result->email)) {
            return $result->email[0];
        } else if (isset($result->name)) {
            return $result->name[0];
        } else if (isset($result->password)) {
            return $result->password[0];
        } else if (isset($result->region)) {
            return $result->region[0];
        } else if (isset($result->city)) {
            return $result->city[0];
        } else if (isset($result->floor_number)) {
            return $result->floor_number[0];
        } else if (isset($result->apartment_number)) {
            return $result->apartment_number[0];
        } else if (isset($result->building_number)) {
            return $result->building_number[0];
        } else if (isset($result->street)) {
            return $result->street[0];
        } else if (isset($result->nearest_landmark)) {
            return $result->nearest_landmark[0];
        } else if (isset($result->lat)) {
            return $result->lat[0];
        } else if (isset($result->lng)) {
            return $result->lng[0];
        } else if (isset($result->Status) && $result->Status == "Error") {
            if (isset($result->message)) {
                return $result->message;
            }

        } else if ($result->Error) {
            return "الايميل مسجل بالفعل";
        } else {
            return $result;
        }
    }

    /**
     * @param $result
     * @return bool
     */
    public function isAddressesInTheSameWarehouse($result)
    {
        if (is_array($result)) {
            foreach ($result['address'] as $address) {
                if ($result['address'] [0]['region'] != $address['region']) {
                    return false;
                }
            }
            return true;
        }
        foreach ($result->address as $address) {
            if ($result->address[0]->region != $address->region) {
                return false;
            }

        }
        return true;
    }

    public function showLoginForm()
    {
        return view('login');

    }

    public function login(Request $request)
    {
        $password = $request->input('password');
        $email = $request->input('email');

        $postData = array(
            'password' => $password,
            'email' => $email
        );

        $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => 'http://163.172.33.245/goomla/api/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HEADER => false,

        ));

        $output = curl_exec($ch);
        $result = json_decode($output);

        if (isset($result->Status)) {

            if ($result->Status === 'Error') {

                return redirect()->back()->with('message', 'كلمه المرور او ابريد الإلكتروني غير صحيحه');
            }
        } else {

            session(['auth_token' => $result->auth_token]);

            if ($this->isAddressesInTheSameWarehouse($result)) {
                session(['district_id' => $result->address[0]->region]);
                session(['warehouse_count' => 1]);
            } else {
                session(['warehouse_count' => 2]);
            }

            $token = session('auth_token');
            $district_id = session('district_id');

            $headr = array();
            $headr[] = 'Authorization:' . $token;
            $headr[] = 'district_id:' . $district_id;

            $crl = curl_init();

            curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/cart');
            curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
            curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

            $rest = curl_exec($crl);
            $xproducts = json_decode($rest);


            if (isset($xproducts->Status)) {
                if ($xproducts->Status == "Error") {
                    return redirect('/');
                }
            }

            $cart = session(['cart' => $xproducts]);
            $cart = session('cart');

            return redirect('/');

        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/login');

    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $socialUser = Socialite::driver('facebook')->user();
            $postData = array('access_token' => $socialUser->token);

            $ch3 = curl_init();
            curl_setopt_array($ch3, array(
                CURLOPT_URL => 'http://163.172.33.245/goomla/api/login/facebook',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HEADER => false,

            ));

            $output50 = curl_exec($ch3);
            $resultReturned = json_decode($output50, true);

            if ($resultReturned == null) {
                return redirect('/login')->with('message', 'لا تستطيع تسجيل الدخول الان .. قم بإعاده المحاوله لاحقاً');

            }
            if (isset($resultReturned['address'])) {
                if ($this->isAddressesInTheSameWarehouse($resultReturned)) {
                    session(['district_id' => $resultReturned['address'][0]['region']]);
                    session(['warehouse_count' => 1]);
                } else {
                    session(['warehouse_count' => 2]);
                }
            }


            $session = session(['auth_token' => $resultReturned['auth_token']]);

            $token = session('auth_token');

//
            $headr = array();
            $headr[] = 'Authorization:' . $token;

            $crl = curl_init();

            curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/cart');
            curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
            curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

            $rest = curl_exec($crl);
            $xproducts = json_decode($rest);


            if (isset($xproducts->Status)) {
                if ($xproducts->Status == "Error") {
                    return redirect('/');
                }
            }

            $cart = session(['cart' => $xproducts]);
            $cart = session('cart');

            return redirect('/');


        } catch (Exception $e) {
            return redirect('/login');
        }

    }


}
