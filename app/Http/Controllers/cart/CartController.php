<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use Session;
class CartController extends Controller
{

    public function getCart()
    {
        $token = session('auth_token');
        $district_id = session('district_id');

        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;


        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/cart');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($crl, CURLOPT_HEADER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);
		
        $xproducts = json_decode($rest);

        $ch4 = curl_init();

        curl_setopt($ch4, CURLOPT_URL, 'http://163.172.33.245/goomla/api/shipping');
        curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, true);
//        curl_setopt($crl, CURLOPT_HEADER, true);
        //curl_setopt($ch4, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);

        $rest4 = curl_exec($ch4);

        $res4 = json_decode($rest4);
        $shipping = $res4;



        if (isset($xproducts->Status)) {
            if ($xproducts->Status == "Error") {
                return redirect('/login');
            }
        }
        


        return view('cart.cart', compact('xproducts','shipping'));

    }

    public function addCart(Request $request)
    {

        $token = session('auth_token');
        $district_id = session('district_id');

        $postdata = $request->all();

        $array_data = array(

            $postdata
        );
//        print_r($array_data);
        $str = http_build_query($array_data);

        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;


        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/cart');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $str);
        curl_setopt($crl, CURLOPT_FOLLOWLOCATION, true);
//        curl_setopt($crl, CURLOPT_HEADER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);
		
        $rest = curl_exec($crl);

        $cart = json_decode($rest);
		
//        print_r($rest);
       $httpcode = curl_getinfo($crl, CURLINFO_HTTP_CODE);
       //return $httpcode;
       if($httpcode == 400 || $httpcode == 412)
       {
        return $cart->message;
        if(isset($cart->message))
            return $cart->message;
       }

        if (isset($cart->Status)) {
            if ($cart->Status == 'Error') {
//                print_r($rest);
                return 1;
            }
        }
            $request->session()->forget('cart');
            session(['cart' => $cart]);

            $cart_session = session('cart');
//            print_r($cart_session);

        $count = 0;
        $price = 0;
        $html = '<li>
                    <div class="top-cart-inner your-cart">
                        <h5 class="text-capitalize"><a href='. url("/cart") .'>سله المشتريات  </a></h5>
                    </div>
                </li>
                <li>
                    <div class="total-cart-pro">';
        foreach($cart as $item)
        {
            $count += $item->qty;
            $price += $item->standard_rate * $item->qty;
            $html .='
        <div class="single-cart clearfix licart'.$item->id.'">
            <div class="cart-img f-left">
                <a>
                    <img src="http://163.172.33.245/goomla/storage/app/erpnext/'. $item->image .'" alt="Cart Product" />
                </a>

                        <input type="hidden" value="0"
                               name="headerqty'.$item->id.'"
                               id="headerqty'.$item->id.'">


                        <input type="hidden" value="'.$item->id.'"
                               name="headerid'.$item->id.'"
                               id="headerid'.$item->id.'">

                        <button id="deletecartheader'.$item->id.'"
                                class="buttoncart" title="حذف"
                                type="submit">
                                <i class="zmdi zmdi-close"></i>


                        </button>


            </div>
            <div class="cart-info f-left">
                <h6 class="text-capitalize">
                    <a>'. $item->name .'</a>
                </h6>
                <p>
                    </strong>'. $item->brand .' </strong>
                </p>
                <p>
                    </strong><span>الكمية : </span>'. $item->qty .' </strong>
                </p>
                <p>
                    <span>السعر <strong>:</strong></span>'. number_format($item->standard_rate , 2, ".", ",") .'
                </p>

            </div>
        </div>
        <script>
        $(document).ready(function () {
            $("#cart").on("click","#deletecartheader'.$item->id.'", function () {
              

                $.ajax({
                    url: "' . url("deletecart/1") .'",
                    crossDomain: true,
                    contentType: "application/json",
                    type: "POST",
                    data: JSON.stringify({
                        "id": $("input[name=headerid'.$item->id.']").val(),
                        "qty": $("input[name=headerqty'.$item->id.']").val(),
                        "_token": $("input[name=_token]").val()
                    }),
                    success: function (response) {
                        $(".cart-quantity").html(response.count);
                        $("#cart").html(response.cart);
            
                    },
                

                });
            });
          
        });
    </script>
        ';
        }
        $html .= '</div>
                    </li> 
                <li>
                    <div class="top-cart-inner subtotal">
                        <h4 class="text-uppercase g-font-2">
                            الاجمالي  =
                            <span>جنيه : '. $price .'</span>
                        </h4>
                    </div>
                </li>
                <li>
                    <div class="top-cart-inner view-cart">
                        <h4 class="text-uppercase">
                            <a href="'.url('/cart').'">سلة المشتريات</a>
                        </h4>
                    </div>
                </li>
                <li>
                    <div class="top-cart-inner check-out">
                        <h4 class="text-uppercase">
                            <a href="'. url('/checkout') .'">اتمام الطلب</a>
                        </h4>
                    </div>
                </li>';
        $data['count'] = $count;


        $total = 0;
        foreach($cart as $item)
        {
            $total +=  $item->standard_rate * $item->qty;
        }
        return response(['count'=> $count,'cart'=>$html,'total' => $total ],200,[]);

    }

     public function promocodevalidation(Request $request)
    {
        $token = session('auth_token');
        $district_id = session('district_id');
        $promocode = $request->all();
        $str = http_build_query($promocode);
        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;

        $crl = curl_init();
        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/promocode/validate');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $str);
        curl_setopt($crl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($crl);
        $validation = json_decode($rest);
        if(isset($validation->discount_rate))
        {
            $return = array('status'=>'success','message'=>"تمت أضافة الرمز بنجاح",'rate'=>$validation->discount_rate);
            return $return ;
        }
        else
        {
            $return = array('status'=>'error','message'=>"$validation->message");
            return $return;
        }
        
    }


    public function checkout(Request $request)
    {
	    $headr = array();
	    $token = session('auth_token');
        $district_id = session('district_id');

        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;


       $ch1 = curl_init();

        curl_setopt($ch1, CURLOPT_URL, 'http://163.172.33.245/goomla/api/payment_methods');
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch1, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($ch1);

        $res = json_decode($rest);

        $payment_methods = $res;


         $ch2 = curl_init();
         
        curl_setopt($ch2, CURLOPT_URL, 'http://163.172.33.245/goomla/api/address');
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch2, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);

        $rest2 = curl_exec($ch2);
		
        $res2 = json_decode($rest2);
        $addresses = $res2;

        $ch3 = curl_init();
         
        curl_setopt($ch3, CURLOPT_URL, 'http://163.172.33.245/goomla/api/time/sections');
        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch3, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch3, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);

        $rest3 = curl_exec($ch3);

        $res3 = json_decode($rest3);
        $timesections = $res3;
       
        
          $ch4 = curl_init();
         
        curl_setopt($ch4, CURLOPT_URL, 'http://163.172.33.245/goomla/api/shipping');
        curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, true);
//        curl_setopt($crl, CURLOPT_HEADER, true);
        //curl_setopt($ch4, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);

        $rest4 = curl_exec($ch4);

        $res4 = json_decode($rest4);
        $shipping = $res4;

        $cartsArray = $request->input('cart');
        $carts = json_decode($cartsArray);
//        $carts= preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $cartsArray);
//        dd($carts);

	    $returnedcart = array();
	    $counter = 0;
	    foreach($carts as $cart )
	    {
		    $returnedcart[$counter]['name']=$cart->name;
		    $returnedcart[$counter]['item_code']=$cart->item_code;
		    $returnedcart[$counter]['qty']=$cart->qty;
		    $counter++;
	    }
	    return view('cart.checkout',compact('carts','payment_methods','addresses','timesections','shipping'));
    }
    
    public function docheckout(Request $request)
    {

	    $payment = $request->input('Paymentmethod');
	    $address = $request->input('address');
	    $timesection =  $request->input('timesection');
	    $shipping = $request->input('shipping');
	    $promocode = $request->input('promocode');
        if( !is_null($promocode) )
        {
            $promocode = $request->input('promocode');
            $array = array('payment_method'=>$payment,'address_id'=>$address,'shipping'=>$shipping,'time_section_id'=>$timesection ,'date'=>date("Y/m/d"),'promocode'=>$promocode);
        }
        else
        {
            $array = array('payment_method'=>$payment,'address_id'=>$address,'shipping'=>$shipping,'time_section_id'=>$timesection ,'date'=>date("Y/m/d"));

        }
	    
	    
//	    dd($array);

	    $token = session('auth_token');
        $district_id = session('district_id');

        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;
        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/checkout');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $array);
        curl_setopt($crl, CURLOPT_FOLLOWLOCATION, true);
//      curl_setopt($crl, CURLOPT_HEADER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);

        if ($rest == null){
            return view('user.orders-history', compact('user_orders_history'))->with('message', 'يوجد مشكله ... حاول في وقت اخر');
        }

        $cart = json_decode($rest);

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/delivery/user/orders');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

        $rest = curl_exec($crl);




        $user_orders_history = json_decode($rest);


        if (isset($user_orders_history->Status)) {
            if ($user_orders_history->Status == "Error") {
                return redirect('/login');
            }
        }
        $request->session()->forget('cart');

        return redirect('/')->with('message', 'تمت عمليه الشراء بنجاح');



    }




    public function deleteCart(Request $request,$id)
    {
        $token = session('auth_token');

        $district_id = session('district_id');
        $postdata = $request->all();


        $array_data = array(
            $postdata
        );
        $str = http_build_query($array_data);

        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/cart');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $str);
        curl_setopt($crl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($crl);

        $cart = json_decode($rest);

        if (isset($cart->Status)) {
            if ($cart->Status == 'Error') {
                return redirect('/login');
            }
        }
        $request->session()->forget('cart');
//        $request->session()->flush();
        session(['cart' => $cart]);

        if ($id == 1) {
            $count = 0;
            $price = 0;
            $html = '<li>
                        <div class="top-cart-inner your-cart">
                            <h5 class="text-capitalize"><a href='. url("/cart") .'>سله المشتريات  </a></h5>
                        </div>
                    </li>
                    <li>
                        <div class="total-cart-pro">';
            foreach($cart as $item)
            {
                $count += $item->qty;
                $price += $item->standard_rate;
                $html .='
            <div class="single-cart clearfix licart'.$item->id.'">
                <div class="cart-img f-left">
                    <a>
                        <img src="http://163.172.33.245/goomla/storage/app/erpnext/'. $item->image .'" alt="Cart Product" />
                    </a>  
                            <input type="hidden" value="0"
                                   name="headerqty'.$item->id.'"
                                   id="headerqty'.$item->id.'">
    
    
                            <input type="hidden" value="'.$item->id.'"
                                   name="headerid'.$item->id.'"
                                   id="headerid'.$item->id.'">
    
                            <button id="deletecartheader'.$item->id.'"
                                    class="buttoncart" title="حذف"
                                    type="submit">
                                    <i class="zmdi zmdi-close"></i>
    
    
                            </button>
    
    
    
                </div>
                <div class="cart-info f-left">
                    <h6 class="text-capitalize">
                        <a'. $item->name .'</a>
                    </h6>
                    <p>
                        </strong>'. $item->brand .' </strong>
                    </p>
                    <p>
                        </strong><span>الكمية : </span>'. $item->qty .' </strong>
                    </p>
                    <p>
                        <span>السعر <strong>:</strong></span>'. number_format($item->standard_rate , 2, ".", ",") .'
                    </p>
    
                </div>
            </div>
            <script>
            $(document).ready(function () {
                $("#cart").on("click","#deletecartheader'.$item->id.'", function () {
                  
    
                    $.ajax({
                        url: "' . url("deletecart/1") .'",
                        crossDomain: true,
                        contentType: "application/json",
                        type: "POST",
                        data: JSON.stringify({
                            "id": $("input[name=headerid'.$item->id.']").val(),
                            "qty": $("input[name=headerqty'.$item->id.']").val(),
                            "_token": $("input[name=_token]").val()
                        }),
                        success: function (response) {
                            $(".cart-quantity").html(response.count);
                            $("#cart").html(response.cart);
                
                        },
                    

                    });
                });
              
            });
        </script>
            ';
            }
            $html .= '</div>
                        </li> 
                    <li>
                        <div class="top-cart-inner subtotal">
                            <h4 class="text-uppercase g-font-2">
                                الاجمالي  =
                                <span>جنيه : '. $price .'</span>
                            </h4>
                        </div>
                    </li>
                    <li>
                        <div class="top-cart-inner view-cart">
                            <h4 class="text-uppercase">
                                <a href="'.url('/cart').'">سلة المشتريات</a>
                            </h4>
                        </div>
                    </li>
                    <li>
                        <div class="top-cart-inner check-out">
                            <h4 class="text-uppercase">
                                <a href="'. url('/checkout') .'">اتمام الطلب</a>
                            </h4>
                        </div>
                    </li>';
            $data['count'] = $count;

            $total = 0;
            foreach($cart as $item)
            {
                $total +=  $item->standard_rate * $item->qty;
            }

            return response(['count'=> $data['count'],'cart'=>$html,'total' => $price ],200,[]);
        }



    }
    
    public function deleteCartItem(Request $request,$id)
    {
        $token = session('auth_token');

        $district_id = session('district_id');
        $postdata = $request->all();


        $array_data = array(
            $postdata
        );
        $str = http_build_query($array_data);

        $headr = array();
        $headr[] = 'Authorization:' . $token;
        $headr[] = 'district_id:' . $district_id;

        $crl = curl_init();

        curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/cart');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $str);
        curl_setopt($crl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);
        $rest = curl_exec($crl);

        $cart = json_decode($rest);

        if (isset($cart->Status)) {
            if ($cart->Status == 'Error') {
                return redirect('/login');
            }
        }
        $request->session()->forget('cart');
//        $request->session()->flush();
        session(['cart' => $cart]);

        if ($id == 1) {

            return $cart;
        }

        return redirect()->back()->with('message', 'تم حذف المنتج بنجاح');
    }
}
