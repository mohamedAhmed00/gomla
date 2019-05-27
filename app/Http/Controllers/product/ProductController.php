<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{

    public function getProducts($item_group)
    {
        $wishlist_products = $this->wishlist();
        $result = Input::get("result");

        $item_group = str_replace(' ', '%20', $item_group);
        $headr = array();
        if(session('district_id'))
        {
            $district_id = session('district_id');
            $headr[] = 'district_id:' . $district_id;
        }

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/products?id=' . $item_group . '');
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);

        $products = json_decode($rest);
        //dd($products);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $collection = new Collection($products);

        $perPage = 20;
        $currentPageResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedResults = new LengthAwarePaginator($currentPageResults, count($collection), $perPage);
        $count = ceil(count($products)/20);
        if ($products != null) {
            if(isset($products->Status))
            {
                return view('error404');
            }

            else
            {
                foreach ($products as $product)
                {
                    if (isset($product->main_cat))
                    {
                        if ($product->main_cat != null) {
                            $cat_name = $product->main_cat->name;
                            $cat_id = $product->main_cat->id;
                        } else {
                            $cat_name = "";
                        }
                    }
                    if (isset($product->sub_cat))
                    {
                        if ($product->sub_cat != null)
                        {
                            $sub_name = $product->sub_cat->name;
                        }
                    } else
                    {
                        $sub_name = "";
                    }
                }
            }


        } else {
            $cat_name = "";
            $cat_id = "";
            $sub_name = "";


        }
        $cr = curl_init();

        curl_setopt($cr, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categoryimg/' . $item_group);
        curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cr, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($cr, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($cr);
        $img = json_decode($rest);
        if (is_string($img)) {

            $imglink = 'http://163.172.33.245/goomla/storage/app/erpnext/' . $img;
        } else {
            $imglink = "";
        }



        $catsCurl = curl_init();

        curl_setopt($catsCurl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categorynames/' . $item_group);
        curl_setopt($catsCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($catsCurl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($catsCurl, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($catsCurl);
        $catNames = json_decode($rest);
        // dd($catNames);
        $pageNumber = 1;
        $brands = json_decode(file_get_contents('http://163.172.33.245/goomla/api/brands'), true);
        return view('product.products-grid', ['wishlist_products' => $wishlist_products, 'result' => $result,
            'pageproducts' => $paginatedResults, 'cat_id' => $cat_id,'catNames'=>$catNames, 'cat_name' => $cat_name, 'sub_name' => $sub_name,
            'item_group' => $item_group, 'imglink' => $imglink,'count' => $count,'pageNumber'=>$pageNumber,'item_group'=>$item_group,'brands' => $brands]);
    }

    public function wishlist()
    {

        $token = session('auth_token');
        $district_id = session('district_id');


        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/user/wishlist');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
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

    public function getProduct($id)
    {
        $wishlist_products = $this->wishlist();

        $id = str_replace(' ', '%20', $id);

        $crl = curl_init();
        $headr = array();
        if(session('district_id'))
        {
            $district_id = session('district_id');
            $headr[] = 'district_id:' . $district_id;
        }
        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/product?id=' . $id . '');
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);
        $productCollection = json_decode($rest);
        if (isset($productCollection->Status)) {
            if ($productCollection->Status == "Error") {
                return view('error404');
            }
        }
        $productColl = collect($productCollection);

        $product =    $productColl->toArray();
        if ($product['main_cat'] != null) {

          $min_catId =   $product['main_cat']->id ;
            $catId = str_replace(' ', '%20', $min_catId);
            $ch4 = curl_init();
            $headr = array();

            curl_setopt($ch4, CURLOPT_URL, 'http://163.172.33.245/goomla/api/products?id=' . $catId);
            curl_setopt($ch4, CURLOPT_HTTPHEADER, $headr);
            curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);

            $rest4 = curl_exec($ch4);

            $res4 = json_decode($rest4);
            $item_group = $catId;

            $products = $res4;

        }
        return view('product.products-details', compact('product', 'products', 'item_group', 'wishlist_products'));
    }

    public function searcProducts()
    {

//        dd(6);
        $wishlist_products = $this->wishlist();

        $item = $_GET['product'];
        $item = str_replace(' ', '%20', $item);
        $headr = array();
        if(session('district_id'))
        {
            $district_id = session('district_id');
            $headr[] = 'district_id:' . $district_id;
        }
        $url = 'http://163.172.33.245/goomla/api/search/products?name=' . $item . '';
        $crl = curl_init();
        curl_setopt($crl, CURLOPT_URL, $url);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);

        $xproducts = json_decode($rest);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $collection = new Collection($xproducts);

        $perPage = 9;
        $currentPageResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedResults = new LengthAwarePaginator($currentPageResults, count($collection), $perPage);


        $count = ceil(count($xproducts)/20);
        if ($xproducts != null) {
            if(isset($xproducts->Status))
            {
                return view('error404');
            }

            else
            {
                foreach ($xproducts as $product)
                {
                    if (isset($product->main_cat))
                    {
                        if ($product->main_cat != null) {
                            $cat_name = $product->main_cat->name;
                            $cat_id = $product->main_cat->id;
                        } else {
                            $cat_name = "";
                        }
                    }
                    if (isset($product->sub_cat))
                    {
                        if ($product->sub_cat != null)
                        {
                            $sub_name = $product->sub_cat->name;
                        }
                    } else
                    {
                        $sub_name = "";
                    }
                }
            }


        } else {
            $cat_name = "";
            $cat_id = "";
            $sub_name = "";


        }



        $name = "نتائج البحث";
        $cat_id = "";
        $item_group = "search?product=" . $item;
        $cat_name = "نتائج البحث";
        $sub_name = "";


        $wishlist_products = $this->wishlist();
        $result = Input::get("result");

        $headr = array();
        if(session('district_id'))
        {
            $district_id = session('district_id');
            $headr[] = 'district_id:' . $district_id;
        }

        $cr = curl_init();

        curl_setopt($cr, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categoryimg/' . $item_group);
        curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cr, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($cr, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($cr);
        $img = json_decode($rest);
        if (is_string($img)) {

            $imglink = 'http://163.172.33.245/goomla/storage/app/erpnext/' . $img;
        } else {
            $imglink = "";
        }



        $catsCurl = curl_init();

        curl_setopt($catsCurl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categorynames/' . $item_group);
        curl_setopt($catsCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($catsCurl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($catsCurl, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($catsCurl);
        $catNames = json_decode($rest);
        // dd($catNames);
        $pageNumber = 1;

        $brands = json_decode(file_get_contents('http://163.172.33.245/goomla/api/brands'), true);





        return view('product.products-grid', ['wishlist_products' => $wishlist_products, 'result' => $result, 'pageproducts' => $paginatedResults, 'name' => $name, 'item_group' => $item_group, 'cat_name' => $cat_name, 'sub_name' => $sub_name, 'cat_id' => $cat_id,'catNames'=>$catNames,'imglink' => $imglink,'count' => $count,'pageNumber'=>$pageNumber,'item_group'=>$item_group,'brands' => $brands]);
    }

    public function getBrandProducts($brand)
    {
        $wishlist_products = $this->wishlist();
        $brand = trim($brand);
        $crl = curl_init();
        if(session('district_id'))
        {
            $district_id = session('district_id');
            $headr[] = 'district_id:' . $district_id;
        }
        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/products/brand/' . $brand . '');
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($crl);
        $products = json_decode($rest);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $collection = new Collection($products);
        $perPage = 9;
        $currentPageResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedResults = new LengthAwarePaginator($currentPageResults, count($collection), $perPage);
        if ($products != null) {
            foreach ($products as $product) {
                if (isset($product->main_cat)) {
                    if ($product->main_cat != null) {
                        $cat_name = $product->main_cat->name;
                        $cat_id = $product->main_cat->id;
                    } else {
                        $cat_name = "";
                    }
                }
                if (isset($product->sub_cat)) {
                    if ($product->sub_cat != null) {
                        $sub_name = $product->sub_cat->name;
                    }
                } else {
                    $sub_name = "";
                }
            }
        }
        return view('product.brand', ['wishlist_products' => $wishlist_products, 'products' => $paginatedResults]);
    }

    public function searcByPrice(Request $request)
    {
        $data = $request->all();
        $price = explode('-',$data['value']);
        $cate = explode('/',$data['cate'])[4];
        $wishlist_products = $this->wishlist();
        $ch4 = curl_init();
        $headr = array();
        curl_setopt($ch4, CURLOPT_URL, 'http://163.172.33.245/goomla/api/products?id=' . $cate);
        curl_setopt($ch4, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);

        $rest4 = curl_exec($ch4);

        $res4 = json_decode($rest4);
        $dataProduct = "";
        foreach($res4 as $product)
        {
            if($data['brand'] == '')
            {
                if(($price[0] < $product->standard_rate AND $price[1] > $product->standard_rate ))
                {
                    if(isset($product->image))
                    {
                        $img = '<img src="http://163.172.33.245/goomla/storage/app/erpnext/' . $product->image.'" style="height: 300px" alt="'.$product->name.'">';
                    }
                    else
                    {
                        $img = '<img src="'.asset('gomla/images/blog-banner.png') .'" alt="'.$product->name.'" style="height: 300px">';
                    }
                    if(in_array($product->id, $wishlist_products))
                    {
                        $cart = '<button class="link-wishlist" title="إضافة ألى قائمة المفضله" type="submit" style="color: red" id="addtofav1'.$product->id .'">
                    <span><a title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></span></button>';
                    }
                    else
                    {
                        $cart = '<button class="link-wishlist" title="Add to Wishlist" type="submit" id="addtofav1'.$product->id.'">
                    <span><a title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></span>
                    </button>';
                    }

                    $dataProduct .= '<div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item product-item-2">
                                                    <div class="product-img">
                                                        <a href="'.url("product/". $product->id).'" title="'.$product->name.'">'. $img . '</a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="'.url('product/'.$product->id) .'"
                                                               title="'.$product->name.'">'. $product->name .'</a>
                                                        </h6>
                                                        <h6 class="brand-name">'. $product->brand .'</h6>
                                                        <h3 class="pro-price">'.number_format ($product->standard_rate , 2, ".", ",") .'
                                                            جنيه</h3>
                                                    </div>
                                                    <ul class="action-button">
                                                        <li>
                                                            
                                                            ' . $cart .'
                                                            
                                                            
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                               title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart"><i
                                                                        class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>';
                }

            }
            else
            {
                if(($price[0] < $product->standard_rate AND $price[1] > $product->standard_rate AND  $res4[0]->brand == $data['brand'] ))
                {
                    if(isset($product->image))
                    {
                        $img = '<img src="http://163.172.33.245/goomla/storage/app/erpnext/' . $product->image.'" style="height: 300px" alt="'.$product->name.'">';
                    }
                    else
                    {
                        $img = '<img src="'.asset('gomla/images/blog-banner.png') .'" alt="'.$product->name.'" style="height: 300px">';
                    }
                    if(in_array($product->id, $wishlist_products))
                    {
                        $cart = '<button class="link-wishlist" title="إضافة ألى قائمة المفضله" type="submit" style="color: red" id="addtofav'.$product->id .'">
                    <span><a title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></span></button>';
                    }
                    else
                    {
                        $cart = '<button class="link-wishlist" title="Add to Wishlist" type="submit" id="addtofav'.$product->id.'">
                    <span><a title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></span>
                    </button>';
                    }

                    $dataProduct .= '<div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item product-item-2">
                                                    <div class="product-img">
                                                        <a href="'.url("product/". $product->id).'" title="'.$product->name.'">'. $img . '</a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="'.url('product/'.$product->id) .'"
                                                               title="'.$product->name.'">'. $product->name .'</a>
                                                        </h6>
                                                        <h6 class="brand-name">'. $product->brand .'</h6>
                                                        <h3 class="pro-price">'.number_format ($product->standard_rate , 2, ".", ",") .'
                                                            جنيه</h3>
                                                    </div>
                                                    <ul class="action-button">
                                                        <li>
                                                            
                                                            ' . $cart .'
                                                            
                                                            
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                               title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart"><i
                                                                        class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>';
                }

            }        }
        return response()->json(['data' => $dataProduct],200,[]);
    }
    public function searcByBrand(Request $request)
    {
        $data = $request->all();
        $price = explode('-',$data['value']);
        $cate = explode('/',$data['cate'])[4];
        $brand = $data['brand'];
        $wishlist_products = $this->wishlist();
        $ch4 = curl_init();
        $headr = array();
        curl_setopt($ch4, CURLOPT_URL, 'http://163.172.33.245/goomla/api/products?id=' . $cate);
        curl_setopt($ch4, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);

        $rest4 = curl_exec($ch4);
        $res4 = json_decode($rest4);
        $dataProduct = "";
        foreach($res4 as $product)
        {
            if($data['brand'] == '')
            {
                if(($price[0] < $product->standard_rate AND $price[1] > $product->standard_rate ))
                {
                    if(isset($product->image))
                    {
                        $img = '<img src="http://163.172.33.245/goomla/storage/app/erpnext/' . $product->image.'" style="height: 300px" alt="'.$product->name.'">';
                    }
                    else
                    {
                        $img = '<img src="'.asset('gomla/images/blog-banner.png') .'" alt="'.$product->name.'" style="height: 300px">';
                    }
                    if(in_array($product->id, $wishlist_products))
                    {
                        $cart = '<button class="link-wishlist" title="إضافة ألى قائمة المفضله" type="submit" style="color: red" id="addtofav1'.$product->id .'">
                    <span><a title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></span></button>';
                    }
                    else
                    {
                        $cart = '<button class="link-wishlist" title="Add to Wishlist" type="submit" id="addtofav1'.$product->id.'">
                    <span><a title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></span>
                    </button>';
                    }

                    $dataProduct .= '<div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item product-item-2">
                                                    <div class="product-img">
                                                        <a href="'.url("product/". $product->id).'" title="'.$product->name.'">'. $img . '</a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="'.url('product/'.$product->id) .'"
                                                               title="'.$product->name.'">'. $product->name .'</a>
                                                        </h6>
                                                        <h6 class="brand-name">'. $product->brand .'</h6>
                                                        <h3 class="pro-price">'.number_format ($product->standard_rate , 2, ".", ",") .'
                                                            جنيه</h3>
                                                    </div>
                                                    <ul class="action-button">
                                                        <li>
                                                            
                                                            ' . $cart .'
                                                            
                                                            
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                               title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart"><i
                                                                        class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>';
                }

            }
            else
            {
                if(($price[0] < $product->standard_rate AND $price[1] > $product->standard_rate AND  $res4[0]->brand == $data['brand'] ))
                {
                    if(isset($product->image))
                    {
                        $img = '<img src="http://163.172.33.245/goomla/storage/app/erpnext/' . $product->image.'" style="height: 300px" alt="'.$product->name.'">';
                    }
                    else
                    {
                        $img = '<img src="'.asset('gomla/images/blog-banner.png') .'" alt="'.$product->name.'" style="height: 300px">';
                    }
                    if(in_array($product->id, $wishlist_products))
                    {
                        $cart = '<button class="link-wishlist" title="إضافة ألى قائمة المفضله" type="submit" style="color: red" id="addtofav1'.$product->id .'">
                    <span><a title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></span></button>';
                    }
                    else
                    {
                        $cart = '<button class="link-wishlist" title="Add to Wishlist" type="submit" id="addtofav1'.$product->id.'">
                    <span><a title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></span>
                    </button>';
                    }

                    $dataProduct .= '<div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item product-item-2">
                                                    <div class="product-img">
                                                        <a href="'.url("product/". $product->id).'" title="'.$product->name.'">'. $img . '</a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="'.url('product/'.$product->id) .'"
                                                               title="'.$product->name.'">'. $product->name .'</a>
                                                        </h6>
                                                        <h6 class="brand-name">'. $product->brand .'</h6>
                                                        <h3 class="pro-price">'.number_format ($product->standard_rate , 2, ".", ",") .'
                                                            جنيه</h3>
                                                    </div>
                                                    <ul class="action-button">
                                                        <li>
                                                            
                                                            ' . $cart .'
                                                            
                                                            
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                               title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart"><i
                                                                        class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>';
                }

            }
        }
        return response()->json(['data' => $dataProduct],200,[]);
    }
    public function pagenation(Request $request){
        $data = $request->all();
        $price = explode('-',$data['amount']);
        $cate = explode('/',$data['cate'])[4];
        $item_group = $data['itemGroup'];
        $pageNumber = $data['pageNumber'];
        $wishlist_products = $this->wishlist();
        $ch4 = curl_init();
        $headr = array();
        curl_setopt($ch4, CURLOPT_URL, 'http://163.172.33.245/goomla/api/products?id=' . $cate);
        curl_setopt($ch4, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);

        $rest4 = curl_exec($ch4);
        $products = json_decode($rest4);
        $arr = [];
        $i=0;
        foreach($products as $product)
        {
            if(empty($data['brand']) AND isset($price))
            {
                
                if((int)$price[0] < (int)$product->standard_rate AND (int)$price[1] > (int)$product->standard_rate)
                {
                
                    $arr [] = $product;
                }
            }
            elseif (empty($price) AND isset($data['brand']))
            {
                if(trim($data['brand']) == trim($product->brand))
                {
                    $arr [] = $product;
                }
            }
            else
            {
                if(trim($data['brand']) == trim($product->brand) AND (int)$price[0] < (int)$product->standard_rate AND (int)$price[1] > (int)$product->standard_rate)
                {
                    $arr [] = $product;
                }
            }
        }

        $count = ceil(count($arr)/20);
        if ($count > 0)
        {
            $pagnate='<li class="page-item">

                   <a class="page-link" onclick="prev()" rel="prev" aria-label="prev &amp;raquo;"><</a>
                 </li>';
            for($i =1 ;$i <= $count; $i++)
            {
                if($i == $pageNumber)
                {
                    $pagnate .='<li class="page-item active" aria-current="page">
                             <span class="page-link">'. $i .'</span>
                           </li>';
                }
                else
                {
                    $pagnate .= '<li class="page-item"><a class="page-link" onclick="pagnation('. $i .','. $item_group .')">'. $i .'</a></li>';
                }
            }
            $pagnate .='<li class="page-item">
                     <a class="page-link" onclick="next()" rel="next" aria-label="Next &amp;raquo;">></a>
                    </li>';
        }
        else
        {
            $pagnate = "";
        }
        $productCollection='';
        $collect = ($pageNumber-1)*20;
        for ($j = 0;$j < 20 ;$j++)
        {
            if(isset($arr[$collect + $j]))
            {
                $pr[] = $arr[$collect + $j];
            }
        }
        $dataProduct = "";
        $wishlist_products = $this->wishlist();
        if(!empty($pr))
        {
            foreach($pr as $product)
            {
                if(isset($product->image))
                {
                    $img = '<img src="http://163.172.33.245/goomla/storage/app/erpnext/' . $product->image.'" style="height: 300px" alt="'.$product->name.'">';
                }
                else
                {
                    $img = '<img src="'.asset('gomla/images/blog-banner.png') .'" alt="'.$product->name.'" style="height: 300px">';
                }
                if(in_array($product->id, $wishlist_products))
                {
                    $cart = '<button title="Wishlist" onclick="wishlist('. $products .')" style="color: red" id="addtofav1'.$product->id .'"><i class="zmdi zmdi-favorite"></i></button>';
                }
                else
                {
                    $products = "'".$product->id . "', 'h'";
                    $cart = '<button title="Wishlist" onclick="wishlist('. $products .')" style="color: black" id="addtofav1'.$product->id .'"><i class="zmdi zmdi-favorite"></i></button>';
                }
                $data =$product->id;
                $filter1 = preg_replace("/[\s]/", "" , $product->name);
                $filter2 = preg_replace("/[\s]/", "" , $product->description);
                $btn = 'view(\''. $filter1 .'\',\''.number_format ($product->standard_rate , 2, ".",",").'\',\'http://163.172.33.245/goomla/storage/app/erpnext/'.$product->image.'\',\''. $filter2 .'\',\'' . $product->id . '\')';
                $addToCard = "addToCart('".$product->id."','1')";


                $onclick = '<a  title="Quickview"><i class="zmdi zmdi-zoom-in" onclick=' . $btn . '></i></a>';
                    $dataProduct .= '<div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item product-item-2">
                                                    <div class="product-img">
                                                        <a onclick=' . $btn . ' title="'.$product->name.'">'. $img . '</a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a onclick=' . $btn . '  title="'.$product->name.'">'. $product->name .'</a>
                                                        </h6>
                                                        <h6 class="brand-name">'. $product->brand .'</h6>
                                                        <h3 class="pro-price">'.number_format ($product->standard_rate , 2, ".", ",") .'
                                                            جنيه</h3>
                                                    </div>
                                                    <ul class="action-button">
                                                        <li>
                                                            
                                                            ' . $cart .'
                                                            
                                                            
                                                        </li>
                                                        
                                                        <li>
                                                        ' . $onclick . '
                                                        </li>
                                                    

                                                        <li>
                                                        <button title="Add to cart" onclick="addToCart(\''.$product->id .'\',\'1\')" id="hpaddtocart1'.$product->id.'"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
                                                        </li>
                                                        <li>
                                                            <button title="Add to cart" id="plus'.$product->id.'"><i class="zmdi zmdi-plus"></i></button>
                                                        </li>
                                                        <li>
                                                            <input id="qty'.$product->id.'" type="text" style="width:30px;height: 30px;padding: 0;text-align: center" value="1">
                                                        </li>
                                                        <li>
                                                            <button title="Add to cart" id="minus'.$product->id.'"><i class="zmdi zmdi-minus"></i></button>
                                                        </li>
                                                    </ul>
            
                                                    <script>
                                                        $("#minus'.$product->id.'").click(function(){
                                                            let x = $("#qty'. $product->id .'").val();
                                                            --x;
                                                            if(x > 0)
                                                            {
                                                            $("#qty'. $product->id .'").val(x);
                                                            }
                                                          
                                                        });
                                                        $("#plus'.$product->id.'").click(function(){
                                                            let x = $("#qty'. $product->id .'").val();
                                                            ++x;
                                                            $("#qty'. $product->id .'").val(x)
                
                                                        });
                                                    </script>
                                                </div>
                                            </div>';
            }

        }
        $category = json_decode(file_get_contents('http://163.172.33.245/goomla/api/categorynames/' .$cate ), true);
        $name = $category['mainCat']['name'];
        $id = $category['mainCat']['id'];
        $arr = json_decode(file_get_contents('http://163.172.33.245/goomla/api/categories'), true);
        foreach ($arr as $key => $val) {
            if($val['id'] == $id)
            {
                $catimg = $val;

            }
        }
        $catimg = $catimg['images'][0];
        return response()->json(['cateId' => $id,'img' => $catimg,'name'=>$name,'products' => $dataProduct,'data' => $pagnate],200,[]);

    }
}











