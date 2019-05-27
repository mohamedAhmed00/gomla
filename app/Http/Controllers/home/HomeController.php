<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    // for welcome page

    public function getAll()
    {
        $wishlist_products = $this->wishlist();

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/products?id=846' );
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);

        $specialProduct = json_decode($rest);
        $data = [];
        for($i=0;$i<8;$i++ )
        {
            if(isset($specialProduct[$i]))
            {
                $data[$i] = $specialProduct[$i];
            }
        }
        $specialProduct = $data;
        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/products?id=890' );
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);

        $schoolProduct = json_decode($rest);

        //Get Products
        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/getproducts');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);
        $products = json_decode($rest);

        //Get Products sorting Number 2
        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/getProductsAnotherCat');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);
        $products2 = json_decode($rest);

        $headr = array();

        $crl2 = curl_init();

        curl_setopt($crl2, CURLOPT_URL, 'http://163.172.33.245/goomla/api/districts');
        curl_setopt($crl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($crl2, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl2, CURLOPT_SSL_VERIFYPEER, false);

        $rest2 = curl_exec($crl2);
        $districts = json_decode($rest2);
        $date = \Carbon\Carbon::now();
        $newProduct = [];
        foreach($products as $product)
        {

            if($product->created_at < $date->subMonth()->toDateString())
            {
                $newProduct[] = $product;
            }
        }



        return view('welcome', ['wishlist_products' => $wishlist_products,
            'products' => $products,
            'products2' => $products2,
            'districts' => $districts,
            'newProduct' => $newProduct,
            'schoolProduct'=> $schoolProduct,
            'specialProduct'=>$specialProduct
        ]);
    }

    public function wishlist()
    {
        $token = session('auth_token');
        $district_id = session('auth_token');

        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/user/wishlist');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($crl, CURLOPT_HEADER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);
        $xproducts = json_decode($rest);
        $wishlist_products = array();
        if ($xproducts != null) {
            foreach ($xproducts as $product) {
                if (isset($product->id)) {
                    $wishlist_products[] = $product->id;
                }
            }
        } else {
            $wishlist_products = [];
        }
        return $wishlist_products;
    }

    public function gtDistrictId(){
        session(['district_id' => request('district_id')]);
    }


}
