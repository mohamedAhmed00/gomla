<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CategoryController extends Controller
{
    public function getCategories()
    {

         $categories = json_decode(file_get_contents('http://163.172.33.245/goomla/api/categories'), true);

        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($categories);

        //Define how many items we want to be visible in each page
        $perPage = 9;

        //Slice the collection to get the items to display in current page
        $currentPageResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        //Create our paginator and pass it to the view
        $paginatedResults= new LengthAwarePaginator($currentPageResults, count($collection), $perPage);

        //Get Products
        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/getproducts');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);
        $products = json_decode($rest);
        return view('category.category-grid', ['categories' => $paginatedResults,'products'=>$products]);

    }


    public function getSubCategories($id)
    {
        $catsCurl = curl_init();

        curl_setopt($catsCurl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categorynames/' . $id);
        curl_setopt($catsCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($catsCurl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($catsCurl, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($catsCurl);

        $sub_cats = json_decode($rest);
        $arr = json_decode(file_get_contents('http://163.172.33.245/goomla/api/categories'), true);
        foreach ($arr as $key => $val) {
            if($val['id'] == $id)
            {
                $catimg = $val;

            }
        }
        $sub_cats = json_decode(file_get_contents('http://163.172.33.245/goomla/api/categories/' .$id ), true);

        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($sub_cats);

        //Define how many items we want to be visible in each page
        $perPage = 9;


        //Slice the collection to get the items to display in current page
        //Slice the collection to get the items to display in current page
        $currentPageResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        //Create our paginator and pass it to the view
        $sub_cats= new LengthAwarePaginator($currentPageResults, count($collection), $perPage);



        return view('category.sub-category-grid', compact(['sub_cats','id','catimg']));

    }


}
