@include('layouts.head')
<style>
    body{
        color:#000 !important;
    }
    #checkOutForm .btn-danger,.btn-proceed-checkout
    {
        background: #ff7f00 !important;
    }
    .btn-proceed-checkout
    {
        color:#FFF;
        padding: 10px 20px;
        font-family: 'Amiri', serif;
    }
    .modal-backdrop
    {
        position: static;
    }
     .btn-proceed-checkout
    {
        font-family: 'Amiri', serif;
        color:#FFF;
        padding: 10px
    }
    .table-content table tr td
    {
        padding: 0 !important;
    }
    #promocodeDiv
    {
        margin-bottom: 20px
    }
    #promocodeButton , .btn-default
    {
        padding: 20px;
        height: 0;
        line-height: 0
    }
    .btn-danger
    {
        font-family: 'Amiri', serif;
    }
</style>
<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
@include('layouts.header')

@include('layouts.nav')
        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg" style="background: #f6f6f6 url('{{ asset('gomla/images/coverphoto.jpg') }}') no-repeat scroll center center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">سلة التسوق</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                                    <li>سلة التسوق</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
                .breadcrumbs-inner .breadcrumbs-title,.breadcrumb-list li a,.breadcrumb-list li
            {
                color:#fff !important
            }
            .overlay-bg:before {
                background: none
            }
            .breadcrumb-list > li::before {
            color: #FFF
            }
            .product-remove .add
            {
                color:#000
            }
            .btn-danger
            {
                color: #fff !important;
                background-color: #ff7f00 !important;
                border-color: #ff7f00 !important;
            }
    </style>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <ul class="cart-tab">
                                <li>
                                    <a class="active" href="#shopping-cart" data-toggle="tab">
                                        <span>01</span>
                                        سلة التسوق
                                    </a>
                                </li>
                                <li>
                                    <a href="#wishlist" data-toggle="tab">
                                        <span>02</span>
                                        المفضلة
                                    </a>
                                </li>
                                <li>
                                    <a href="#checkout" data-toggle="tab">
                                        <span>03</span>
                                        انهاء الطاب
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- shopping-cart start -->
                                <div class="tab-pane active" id="shopping-cart">
                                    <div class="shopping-cart-content">
                                            <div class="table-content table-responsive mb-50">
                                                <table class="text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">المنتج</th>
                                                            <th class="product-price">السعر</th>
                                                            <th class="product-quantity">الكمية</th>
                                                            <th class="product-subtotal">السعر النهائي</th>
                                                            <th class="product-remove">حذف</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $cart = session('cart'); ?>

                                                    <!-- tr -->
                                                        @if(isset($cart))
                                                            <?php $total = 0;?>

                                                            @foreach($cart as $item)
                                                            <?php  $total = number_format((float)$total, 2, '.', '');?>
                                                            <?php  $standard_rate = number_format((float)$item->standard_rate, 2, '.', '');?>
                                                            <?php $qty = number_format((float)$item->qty, 2, '.', '');?>
                                                            <?php  $total = ($standard_rate * $qty) + $total?>
                                                            <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{ $item->image }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="{{ url("product/".$item->id) }}">{{ $item->name }}</a>
                                                                    </h6>
                                                                    <p>الشركة المصنعة: {{ $item->brand }}</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">{{ number_format($item->standard_rate , 2, ".", ",") }} جنية</td>
                                                            <td class="product-quantity">
                                                                    <button title="Add to cart" style="color:#fff;background:#ff7f00" id="plus{{$item->id}}"><i class="zmdi zmdi-plus"></i></button>
                                                                    <input id="qty{{$item->id}}" type="text" style="border: solid 1px #ccc;width:30px;height: 30px;padding: 0;text-align: center" value="{{ $item->qty }}">
                                                                    <button title="Add to cart" style="color:#fff;background:#ff7f00" id="minus{{$item->id}}"><i class="zmdi zmdi-minus"></i></button>
                                                                    <script>

                                                                        $("#minus{{$item->id}}").click(function(){
                                                                            let x = $("#qty{{ $item->id }}").val();
                                                                            --x;
                                                                            $("#qty{{ $item->id }}").val(x);
                                                                            addToCart('{{$item->id}}',x);
                                                                        });
                                                                        $("#plus{{$item->id}}").click(function(){
                                                                            let x = $("#qty{{ $item->id }}").val();
                                                                            ++x;
                                                                            $("#qty{{ $item->id }}").val(x);
                                                                            addToCart('{{$item->id}}',x);
                                
                                                                        });
                                                                    </script>
                                                            </td>
                                                            <td class="product-subtotal">{{ $item->qty * number_format($item->standard_rate , 2, ".", ",") }} جنية</td>
                                                            <form action="{{url('deletecartItem/0')}}" method="post">
                                                                <input type="hidden" value="{{$item->id}}" name="id"
                                                                       id="{{$item->item_code}}">
                                                                <input type="hidden" value="0" name="qty"
                                                                       id="{{$item->item_code}}">
                                                                <td class="product-remove">
                                                                    <button type="submit" title="حذف المنتج"
                                                                            class="button remove-item">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </button>
                                                                </td>
                                                            </form>
                                                        </tr>
                                                        @endforeach
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                    @php
                                                    $total = 0;
                                                    foreach($cart as $item)
                                                    {
                                                        $total += $item->qty * number_format((float)$item->standard_rate, 2, '.', '');
                                                    }
                                                    @endphp
                                                <div class="col-md-12">
                                                    <div class="payment-details box-shadow p-30 mb-50">
                                                        <h6 class="widget-title border-left mb-20">تفاصيل الدفع</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="td-title-1">سعر المنتجات</td>
                                                                <td class="td-title-2 "> <span class="price" id="order-price">  جنيه<?php if (isset($total)) echo $total;?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">خدمة التوصيل</td>
                                                                <td class="td-title-2"><span class="price">  جنيه  </span> @if(isset($shipping[0]->rate)){{$shipping[0]->rate}}@endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="order-total">السعر النهائي</td>
                                                                <td class="order-total-price"> <span class="price" id="order-total-price"> جنيه  <?php if (isset($total)) echo $total + $shipping[0]->rate;?>  </span></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!-- shopping-cart end -->
                                <!-- wishlist start -->
                                <?php
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

                                ?>
                                <div class="tab-pane" id="wishlist">
                                    <div class="wishlist-content">
                                        <div class="table-content table-responsive mb-50" style="overflow: hidden">
                                                <table class="text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">المنتج</th>
                                                            <th class="product-price">السعر</th>
                                                            <th class="product-stock">الكمية المتاحة</th>
                                                            <th class="product-add-cart">اضف للسلة</th>
                                                            <th class="product-remove">حذف</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tr -->
                                                        @if(isset($xproducts))
                                                            @foreach($xproducts as $product)
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{ $product->image }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="{{ url("product/".$product->id) }}">{{ $product->name }}</a>
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">{{ number_format($product->standard_rate , 2, ".", ",") }} جنية</td>
                                                            <td class="product-quantity">{{ isset($product->stock_qty)?$product->stock_qty :'out of stock' }} </td>

                                                            <td class="product-remove">
                                                                <a title="Add to cart" class="add" style="cursor: pointer;" onclick="addToCart('{{$product->id}}','1')" id="hpaddtocart1{{$product->id}}"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </td>
                                                            <form action="{{url('deletewishlist')}}" method="post">
                                                                <td class="wishlist-cell5 customer-wishlist-item-remove last">
                                                                    <input type="hidden" name="wishlist" value="wishlist">


                                                                    <input min="{{$product->min_order_qty}}"
                                                                           data-parsley-max="10"
                                                                           data-parsley-required="true"
                                                                           type="hidden"
                                                                           name="qty{{$product->id}}"
                                                                           id="{{$product->id}}"
                                                                           title="Quantity:">

                                                                    <input value="{{$product->name}}"
                                                                           data-parsley-required="true"
                                                                           type="hidden"
                                                                           name="name{{$product->id}}"
                                                                           id="name{{$product->id}}"
                                                                           title="Quantity:"
                                                                           class="input-text name">

                                                                    <input value="{{$product->id}}"
                                                                           data-parsley-required="true"
                                                                           type="hidden"
                                                                           name="id"
                                                                           id="code{{$product->id}}"
                                                                           title="item_code"
                                                                           class="input-text item_code">


                                                                    <button class="btn-danger" title="حذف من قائمه المفضله"
                                                                            type="submit"
                                                                            id="removewish{{$product->id}}">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </button>


                                                                </td>
                                                            </form>

                                                        </tr>
                                                        <!-- tr -->

                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                                <!-- wishlist end -->

                                <?php
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


                                ?>
                                <!-- checkout start -->
    <div class="tab-pane" id="checkout">
        <div class="main-container col1-layout wow bounceInUp animated">

            <div class="main">
                <div class="cart wow bounceInUp animated">

                    <div class="table-responsive shopping-cart-tbl">

                        <form method="POST" action="{{url('/docheckout')}}" id="checkOutForm">

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        طريقة الدفع
                                        <select class="form-control" name="Paymentmethod" id="Paymentmethod">

                                            @foreach($payment_methods as $method)

                                                <option value="{{$method->type}}"><?php echo $method->type; ?></option>
                                            @endforeach
                                        </select> <br/>
                                    </div>
                                </div>

                                @if($addresses!= null && is_array($addresses))

                                    <div class="row">

                                        <div class="col-md-12">
                                            العنوان
                                            <select class="form-control" name="address" id="full_address" dir="">
                                                @foreach($addresses as $address)
                                                    <option value="{{$address->id}}" dir="">
                                                        {{$address->title}} - {{$address->building_no}} {{$address->street}},
                                                        {{$address->regoin}},
                                                        {{$address->city}},
                                                        {{$address->apartment_no}},
                                                        {{$address->floor_no}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <a style="margin-top: 20px;" href="{{url('addnewaddress')}}"
                                               class="btn-danger btn-xs"> أضف عنوان جديد </a>

                                        </div>
                                        @else
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <select class="form-control" name="address" id="address">

                                                        <option value="">لايوجد عنوان مسجل لديك</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <a href="{{url('addnewaddress')}}" style="margin-top: 20px;"
                                                   class="btn-danger btn-xs">أضف عنوان جديد </a>
                                            </div>

                                        @endif

                                    </div>


                                    وقت التوصيل
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select class="form-control" name="timesection" id="timesection">
                                                @foreach($timesections as $timesection)
                                                    <option value="{{$timesection->id}}">{{$timesection->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="shipping" value="{{$shipping[0]->shipping_rule}}">

                            </div>
                            <div class="col-md-12" id="showAdress" dir="">

                            </div>
                            <div id="promocodeInput">

                            </div>
                            <div class="col-sm-12" id="promocodeDiv">
                                <br />
                                لديك قسيمة ؟ <button type="button" class="btn-danger btn-xs" data-toggle="modal" data-target="#myModal" >الأدخال هنا</button>



                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">رقم القسيمة</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>أدخل رقم القسيمة هنا</p>
                                                <input type="text" name="promocode" id="promocodeField"/>
                                                <div id="codeError" style="color:red; visibility: none;"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn-danger btn-xs" id="promocodeButton" >تطبيق</button>

                                                <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div style="margin-right: -10px;" class="col-sm-12">
                                    <div class="totals">
                                        <h3>مجموع الحساب</h3>
                                        <div class="inner">

                                            <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                                <colgroup>
                                                    <col>
                                                    <col width="1">
                                                </colgroup>
                                                <tfoot id="pricestable">
                                                <tr>
                                                    <td style="" class="a-left" colspan="1">
                                                        <strong>خدمه التوصيل </strong>
                                                    </td>

                                                    <td style="" class="a-right">
                                                        <strong><span class="price">  جنيه  </span> <span>{{$shipping[0]->rate}}</span>

                                                        </strong>

                                                    </td>

                                                </tr>

                                                <tr >
                                                    <td style="" class="a-left" colspan="1">
                                                        <strong id="hesablabel">الحساب الكلي</strong>
                                                    </td>
                                                    <td style="" class="a-right" id="totalPrice">
                                                        <strong ><span
                                                                    class="price"> جنيه </span> <span id="tprice"><?php if (isset($total)) echo $total + $shipping[0]->rate;?></span>
                                                        </strong>
                                                    </td>
                                                </tr>

                                                </tfoot>
                                                <tbody>
                                                <tr>
                                                    <td style="" class="a-left" colspan="1">
                                                        الحساب
                                                    </td>
                                                    <td style="" class="a-right">
                                                        <span class="price"> جنيه </span> <span id="final-price"><?php if (isset($total)) echo $total;?></span> 
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>


                                            <ul class="checkout">
                                                <li>
                                                    <button type="submit" @if($addresses == null) disabled="disabled"
                                                            style="background-color:gray;"
                                                            @endif title="Proceed to Checkout"
                                                            class="button btn-proceed-checkout" onClick="">
                                                        <span>إتمام عمليه الشراء</span>
                                                    </button>


                                                </li>
                                                <br>

                                                <br>
                                            </ul>
                                        </div><!--inner-->
                                    </div><!--totals-->
                                </div> <!--col-sm-4-->

                            </div>
                        </form>

                    </div>

                    <!-- BEGIN CART COLLATERALS -->


                </div>  <!--cart-->

            </div><!--main-container-->

        </div>
        </div>

                                <!-- order-complete start -->
                                <!-- order-complete end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->             

        </section>
        <!-- End page content -->

    @include('layouts.footer')
    <!--style-customizer end -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->
@include('layouts.endpage')

<script>
        $("#promocodeButton").click(function(){
            var promocode = $("#promocodeField").val();
            $.ajax({
                url: "{{url('/promocodevalidation')}}",
                crossDomain: true,
                contentType: 'application/json',
                type: 'POST',
                data: JSON.stringify({'code': promocode}),
                success: function (response) {
                   if(response.status == 'success')
                    {
                        $('#myModal').modal('toggle');
                        $('#promocodeDiv').html("<p style='color:green;'>رقم قسيمة التخفيض"+promocode+"</p>");
                        var totalPrice = jQuery('#totalPrice').html();
                        $('#totalPrice').html('<strike> '+totalPrice+'</strike>');
                        var tprice = jQuery('#tprice').html();
                        $('#promocodeInput').html('<input type="hidden" name="promocode" value="'+promocode+'">');
                        $('#hesablabel').html('الحساب قبل الخصم');
                        $('#pricestable').append('<tr>'+'<td style="" class="a-left" colspan="1"> الحساب بعد الخصم</td><td style="" class="a-right" >'+(tprice - response.rate)+'</td><tr>');
    


                        $("#order-price").html((tprice - response.rate) + "جنية");
                        $("#order-total-price").html((tprice - response.rate + 15) + 'جنية' );
                        $("#order-total-price").html((tprice - response.rate + 15) + 'جنية' );
                        $("#cartTotalPrice").html((tprice - response.rate)  + 'جنية' );
                        $("#tprice").html((tprice - response.rate + 15) + 'جنية' );
                        $("#final-price").html((tprice - response.rate)  + 'جنية' );
                        
                    }
                    else
                    {
                        $('#codeError').html(response.message);
                        $('#codeError').show();
                    }
                },
                error: function (response) {
                    // alert(50);
                },
                   
            });
        });
            var address = jQuery("#full_address option:selected").text();
            $('#showAdress').html(address);
    
            $('#full_address').on('change',function () {
                var address = jQuery("#full_address option:selected").text();
                $('#showAdress').html(address);
            });
        </script>