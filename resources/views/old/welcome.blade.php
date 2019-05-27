@extends('layouts.app')

@section('metatitle') جملة أونلاين @stop

@section('metadescription') دلوقتي تقدر تشتري كل المنتجات الغذائية الجافة من خلال تطبيق جملة.أونلاين
حملة دلوقتي و وفر فلوسك ومجهودك @stop

@section('metaimage'){{url('/public/gomla/images/logo.jpg')}}@stop

@section('head')

    <style>
        .owl-item {
            float: right;
        }

        .tp-caption.LargeTitle span {
            padding: 8px !important;
        }

        .btn-danger {
            color: #fff !important;

            background: #6d080f;
            font-family: 'Montserrat', sans-serif !important;
            border: 2px #ddd solid !important;
            border-radius: 4px !important;
            text-transform: uppercase !important;
            display: inline-block !important;
            padding: 5px 12px !important;
            margin-bottom: 0 !important;
            font-size: 14px !important;
            font-weight: 400 !important;
            line-height: 1.42857143 !important;
            text-align: center !important;
            white-space: nowrap !important;
            vertical-align: middle !important;
            -ms-touch-action: manipulation !important;
            touch-action: manipulation !important;
            cursor: pointer !important;
        }

        .popup {
            padding: 20px 0px 10px 0px;
            text-align: center;
            font-size: 18px;
            color: green;
        }

        .slider {
            color: #6d080f;
            float: right;
            /*padding: 10px ;*/

        }

        .margin {
            margin-right: 100px !important;
        }

        .img-download {

            display: block;
            max-width: 174px;
            max-height: 85px;
            width: auto;
            height: auto;
        }

        .margin-download {
            margin-right: 10px;
        }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

@endsection

@section('content')

    {{--data-backdrop="static" data-keyboard="false"--}}
    <div class="modal fade" id="districtModal" role="dialog" aria-labelledby="districtModalLabel"
         data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="districtModalLabel">اختار المنطقه</h5>

                </div>
                <div class="modal-body">
                    <select id="districtSelect">
                        @foreach($districts as $district)
                            <option value="{{$district->id}}">{{$district->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" id="saveDistrict" class=" btn-danger">حفظ</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="homeSkipLoginBtn">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLongTitle">تسجيل الدخول</h5>

                </div>
                <div class="modal-body">
                    <div id="responseDone-erorr" class="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            إغلاق
                        </button>
                        <a type="button" href="{{url('/login')}}" class=" btn-danger">تسجيل الدخول</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel">
            <div id="responseDone-erorr" class="modal-dialog modal-sm" role="document">

            </div>
        </div>
    </div>


    <div id="success" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">

            <div id="responseDone" width="200px" class="popup modal-content">

            </div>
        </div>
    </div>


    <div class="content">
        <div id="thm-mart-slideshow" class="thm-mart-slideshow">
            <div class="container">
                <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container'>
                    <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
                        <ul>
                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                                data-thumb="{{asset('/gomla/images/Slide-image1.jpg')}}">
                                <img src="{{asset('/gomla/images/Slide-image1.jpg')}}"
                                     data-bgposition='left top' data-bgfit='cover'
                                     data-bgrepeat='no-repeat'
                                     alt="slider-image1"/>
                                <div class="info">
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0' data-y='180'
                                         data-endspeed='500' data-speed='500' data-start='1100'
                                         data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span
                                                class="slider margin">يمكنك تحميل التطبيق</span>
                                    </div>
                                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0' data-y='300'
                                         data-endspeed='500' data-speed='500' data-start='1300'
                                         data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>

                                        <span class="slider margin"> جملة اونلاين</span>
                                    </div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-x='0' data-y='550'
                                         data-endspeed='500' data-speed='500' data-start='1500'
                                         data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>

                                        <a target="_blank" style="float: right"
                                           href='https://itunes.apple.com/us/app/gomla-online/id1233850051?ls=1&mt=8'
                                           class="margin">
                                            <img class="img-download"
                                                 src="{{asset('gomla/images/download_from_apple_store.png')}}">
                                        </a>

                                        <a target="_blank" style="float: right"
                                           href='https://play.google.com/store/apps/details?id=com.pam.gomla.android'
                                           class="margin-download">
                                            <img class="img-download"
                                                 src="{{asset('gomla/images/download_from_android_store.png')}}">
                                        </a>
                                    </div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-x='0' data-y='420'
                                         data-endspeed='500' data-speed='500' data-start='1500'
                                         data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>
                                        <span style="vertical-align: middle" class="slider margin">
                                           من الاندرويد او الايفون

</span>

                                    </div>
                                </div>
                            </li>
                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                                data-thumb="{{asset('gomla/images/Slide-image2.jpg')}}"><img
                                        src="{{asset('gomla/images/Slide-image2.jpg')}}"
                                        data-bgposition='left top' data-bgfit='cover'
                                        data-bgrepeat='no-repeat'
                                        alt="slider-image2"/>
                                <div class="info">
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0' data-y='180'
                                         data-endspeed='500' data-speed='500' data-start='1100'
                                         data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>
                                        <span class="slider margin">ارخص الاسعار في مصر</span>
                                    </div>
                                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0' data-y='300'
                                         data-endspeed='500' data-speed='500' data-start='1300'
                                         data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>
                                        <span class="slider margin"> جملة اونلاين</span>
                                    </div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-x='0' data-y='550'
                                         data-endspeed='500' data-speed='500' data-start='1500'
                                         data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>
                                        {{--<a style="float: right" href='https://itunes.apple.com/us/app/gomla-online/id1233850051?ls=1&mt=8' class="margin">--}}
                                        {{--<img class="img-download" src="{{url('/public/gomla/')}}/images/download_from_apple_store.png">--}}
                                        {{--</a>--}}

                                        {{--<a style="float: right" href='https://play.google.com/store/apps/details?id=com.pam.gomla.android' class="">--}}
                                        {{--<img class="img-download" src="{{url('/public/gomla/')}}/images/download_from_android_store.png">--}}
                                        {{--</a>--}}
                                    </div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-x='0' data-y='420'
                                         data-endspeed='500' data-speed='500' data-start='1500'
                                         data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>
                                        <span class="slider margin">والتوصيل للمنزل</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php $configration = json_decode(file_get_contents('http://163.172.33.245/goomla/api/configrations'), true); ?>
        <div class="row">

            <div class="col-sm-12">
                <div class="container"
                     style="background-color: #901a1d; color:#fff; text-align: center; margin-top:9px;">
                    <h4>{{$configration['note']}}</h4>
                </div>
            </div>
        </div>

        <!--Category slider Start-->
        <div class="top-cate">
            <div class="featured-pro container">
                <div class="row">

                    <div class="slider-items-products">
                        <div class="new_title">
                            <h2>الأقسام</h2>

                        </div>
                        <div id="top-categories" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4 products-grid" style="overflow:hidden">
                                <?php $categories = json_decode(file_get_contents('http://163.172.33.245/goomla/api/categories'), true); ?>
                                @foreach($categories as $category)

                                    <div class="item">
                                        <a href="{{url('products/'.$category['id'])}}">
                                            <div class="pro-img">

                                                @if(isset($category['images']))
                                                    <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$category['images'][0]}}"
                                                         alt="{{$category['name']}}">
                                                @else
                                                    <img src="{{url('/public/gomla/')}}/images/404.png"
                                                         alt="{{$category['name']}}">

                                                @endif
                                                <div class="pro-info">{{$category['name']}}</div>
                                            </div>
                                        </a>
                                    </div>

                            @endforeach

                            <!-- End Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Category silder End



            <!-- best Pro Slider   Cat sort number one -->
        <section class=" wow bounceInUp animated">
            <div class="best-pro slider-items-products container">
                <div class="new_title">
                    <h2>المنتجات</h2>
                </div>

                <div id="best-seller" class="product-flexslider hidden-buttons">

                    <div class="slider-items slider-width-col4 products-grid" style="overflow:hidden">


                        @foreach($products as $product)

                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a href="{{url('product/'.$product->id)}}" title="{{$product->name}}"
                                               class="product-image">
                                                @if(isset($product->image))
                                                    <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                         alt="{{$product->name}}">
                                                @else
                                                    <img src="{{asset('gomla/images/404.png')}}"
                                                         alt="{{$product->name}}">

                                                @endif
                                            </a>
                                            {{--<div class="new-label new-top-left">جديد</div>--}}
                                            <div class="item-box-hover">

                                                <div class="actions">
                                                        <span class="add-to-links">
                                                             @if(in_array($product->id, $wishlist_products))

                                                                <button class="link-wishlist"
                                                                        title="إضافة إلى قائمة المفضلة"
                                                                        type="submit"
                                                                        style="color: red"
                                                                        id="addtofav1{{$product->id}}">
                                                                            </button>
                                                            @else

                                                                <button class="link-wishlist"
                                                                        title="إضافة إلى قائمة المفضلة"
                                                                        type="submit"
                                                                        id="addtofav1{{$product->id}}">
                                                                            </button>
                                                            @endif

                                                            <input type="hidden" value="{{$product->id}}"
                                                                   name="favid1{{$product->id}}"
                                                                   id="favid1{{$product->id}}">

                                                                    <input type="hidden" value="{{$product->name}}"
                                                                           name="favname1{{$product->id}}"
                                                                           id="favname1{{$product->id}}">

                                                            {{--script add wishlist--}}
                                                            <script>
                                                                            jQuery(document).ready(function () {
                                                                                jQuery('#addtofav1{{$product->id}}').click(function () {

                                                                                    jQuery.ajax({
                                                                                        url: "{{url('addwishlist')}}",
                                                                                        type: 'post',
                                                                                        data: {
                                                                                            'id': jQuery('input[name=favid1{{$product->id}}]').val(),
                                                                                            'name': jQuery('input[name=favname1{{$product->id}}]').val(),
                                                                                            '_token': jQuery('input[name=_token]').val()
                                                                                        },

                                                                                        success: function (response) {
                                                                                            if (response == 2) {
                                                                                                jQuery("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                                                                                jQuery('#exampleModalLong').modal('show');
                                                                                            }
                                                                                            else if (response == 1) {
                                                                                                jQuery('#addtofav1{{$product->id}}').css("color", "red");
                                                                                                gtag('event', 'FAVOURITES_ADD', {
                                                                                                    'event_category': 'FAVOURITES',
                                                                                                    'event_action': 'FAVOURITES_ADD_{{$product->id}}'
                                                                                                });
                                                                                            } else {
                                                                                                jQuery('#addtofav1{{$product->id}}').css("color", "black");
                                                                                                gtag('event', 'FAVOURITES_REMOVE', {
                                                                                                    'event_category': 'FAVOURITES',
                                                                                                    'event_action': 'FAVOURITES_REMOVE_{{$product->id}}'
                                                                                                });
                                                                                            }

                                                                                        },
                                                                                        error: function (response) {
                                                                                            alert(response);

                                                                                        },

                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>

                                                            {{-- End script wishlist--}}

                                                        </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <a href="{{url('product/'.$product->id)}}"
                                               title="{{$product->name}}">{{$product->name}}</a>
                                        </div>
                                        <div class="item-content">

                                            <div class="item-price">
                                                <div class="price-box">
                                                    <span class="price">  {{number_format ($product->standard_rate , 2, '.', ',')}}  </span>
                                                    <span class="price">  جنيه </span>
                                                </div>
                                            </div>
                                            <form data-parsley-validate method="POST" id="hpformcart1{{$product->id}}">

                                                <div class="add-to-cart">
                                                    <div class="">
                                                        <div class="custom "
                                                             style="margin-bottom: 10px;">

                                                            <button onClick="var result = document.getElementById('hpqty1{{$product->id}}');
                                                                    var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                                    class="increase items-count"
                                                                    type="button">
                                                                <i class="icon-plus">&nbsp;</i>
                                                            </button>

                                                            <button onClick="var result = document.getElementById('hpqty1{{$product->id}}');
                                                                    var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 )
                                                                    result.value--;return false;"
                                                                    class="reduced items-count"
                                                                    type="button">
                                                                <i class="icon-minus">&nbsp;</i>
                                                            </button>

                                                            <input min="{{$product->min_order_qty}}"
                                                                   data-parsley-required="true"
                                                                   type="text"
                                                                   name="hpqty1{{$product->id}}"
                                                                   value="1"
                                                                   id="hpqty1{{$product->id}}"
                                                                   title="Quantity:"
                                                                   class="input-text qty">


                                                            <input value="{{$product->id}}"
                                                                   data-parsley-required="true"
                                                                   type="hidden"
                                                                   name="hpid{{$product->id}}"
                                                                   id="hpid1{{$product->id}}"
                                                                   title="item_code"
                                                                   class="input-text item_code">


                                                        </div>
                                                        <!--custom pull-left-->
                                                    </div>
                                                    <!--pull-left-->

                                                    @if(intval($product->stock_qty) > 0)
                                                        <button type="submit"
                                                                id="hpaddtocart1{{$product->id}}"
                                                                title="إضافة إلى سلة الشراء" class="button btn-cart">
                                                            <span><i class="icon-basket"></i>إضافة إلى  سلة الشراء</span>
                                                            @else
                                                                <button disabled="disabled"
                                                                        id="{{$product->id}}"
                                                                        title=" المنتج غير متوفر"
                                                                        style="background-color: #000000; color:#fff;"
                                                                        class="button btn-cart">
                                                                    <span><i class="icon-basket"></i>المنتج غير متوفر</span>
                                                                </button>
                                                        </button>
                                                    @endif

                                                </div>


                                            </form>

                                            {{--script add to cart--}}
                                            <script>
                                                jQuery(document).ready(function () {
                                                    jQuery('#hpaddtocart1{{$product->id}}').one('click', function () {
                                                        jQuery('#hpformcart1{{$product->id}}').submit(function (e) {
                                                            e.preventDefault(e);

                                                            jQuery.ajax({
                                                                url: "{{url('/addcart')}}",
                                                                crossDomain: true,
                                                                contentType: 'application/json',
                                                                type: 'POST',
                                                                data: JSON.stringify({
                                                                    'id': jQuery('input[name=hpid{{$product->id}}]').val(),
                                                                    'qty': jQuery('input[name=hpqty1{{$product->id}}]').val(),
                                                                    '_token': jQuery('input[name=_token]').val()
                                                                }),
                                                                success: function (response) {
                                                                    if (response == 1) {
                                                                        jQuery("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                                                        jQuery('#exampleModalLong').modal('show');

                                                                    } else {
                                                                        jQuery('#cart-sidebar').html('');
                                                                        jQuery("#responseDone").html('<p>' + "تم اضافة المنتج بنجاح" + '</p>');
                                                                        jQuery('.bs-example-modal-sm').modal('show');
                                                                        jQuery("#countapp1").html(response.length);
                                                                        jQuery("#countapp").html(response.length);

                                                                        getCart(response);


                                                                    }
                                                                },
                                                                error: function (response) {
                                                                    alert(50);
                                                                },

                                                            });
                                                        });
                                                    });
                                                });

                                            </script>
                                            {{--End script add to cart--}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    {{--//$brands = json_decode(file_get_contents('http://163.172.33.245/goomla/api/brands'), true);--}}
    {{--<section class=" wow bounceInUp animated">--}}
    {{--<div class="container">--}}
    {{--<div class="row best-pro" >--}}
    {{--<div class="new_title">--}}
    {{--<h2>الماركات</h2>--}}
    {{--</div>--}}

    {{--<div id="brands" class="product-flexslider hidden-buttons">--}}

    {{--<div class="slider-items slider-width-col3 products-grid" style="overflow:hidden">--}}

    {{--@foreach($brands as $brand)--}}

    {{--<div class="item">--}}
    {{--<div class="item-inner">--}}
    {{--<div class="item-img">--}}
    {{--<div class="item-img-info" style="height:150px;width:150px;">--}}
    {{--<a href="{{url('products/brand/'.trim($brand['brand']))}}" title="{{$product->name}}"--}}
    {{--class="product-image">--}}
    {{--<div style="height:150px; width:150px; background-color:#901a1d; text-align: center;--}}
    {{--vertical-align: middle; line-height: 150px; font-size: large; color:#fff; " >{{$brand['brand']}}</div>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    <!-- Logo Brand Block -->

    </div>

@endsection


@section('javascript')


    <script>
        jQuery(document).ready(function () {

            if ("{{session('warehouse_count')}}" != 1 && "{{session('district_id')}}" == "") {
                jQuery('#districtModal').modal('show');
                jQuery('.content').css({
                    opacity: 0.1

                });

            }
        });
        jQuery(document).on('click', '#saveDistrict', function () {
            jQuery.ajax({
                url: "{{URL::to('save_district_id')}}",
                data: {district_id: jQuery('#districtSelect').val()},

                success: function (data) {
                    jQuery('#districtModal').modal('hide');
                    jQuery('.content').css({
                        opacity: 1

                    });
                },
                error: function () {

                }


            });
        });


        function getCart(response) {

            jQuery.each(response, function () {
                jQuery('#cart-sidebar').append('<li id="licartnew' + this.id + '" class="item first" >' +
                    '<div class="item-inner">' +
                    '<a class="product-image" title="' + this.name + '" href="{{url('product')}}' + '/' + this.id + '"  >' +
                    '<img alt="' + this.name + '" src="http://163.172.33.245/goomla/storage/app/erpnext' + '/' + this.image + '">' +
                    '</a>' +
                    '<div class="product-details">' +
                    '<div class="access">' +
                    ' <input type="hidden" value="0" name="headerqtyx' + this.id + '" id="qtycartx' + this.id + '"/>' +
                    ' <input type="hidden" value="' + this.id + ' "name="headeridx' + this.id + '" id="headeridx' + this.id + '"/>' +

                    ' <button id="delcart' + this.id + '" class="btn-remove1" title="إحذف هذا المنتج" type="button"> ' + 'حذف' +
                    '</button>' +
                    '</div>' +
                    '<strong>' + "الكمية : " + '</strong>' +
                    '<strong>' + this.qty + '</strong>' +
                    '<span class="price">' + "&nbsp" + '</span>' +
                    '<span class="price">' + this.standard_rate + '</span>' +
                    '<span class="price">' + "&nbsp" + '</span>' +
                    '<span class="price">' + "جنيه" + '</span>' +
                    '<p class="product-name">' +
                    '<a href="{{url('product')}}' + '/' + this.id + ' "title="' + this.name + '">' + this.name +
                    '</a>' +
                    '</p>' +
                    '</div>' +
                    '</div>' +
                    '</li>');


                var id = this.id;
                {{--script delete to cart--}}

                jQuery('#delcart' + this.id + '').one('click', function () {

                    jQuery('input[name=headeridx' + this.id + ']').val()
                    jQuery.ajax({
                        url: "{{url('/deletecart/1')}}",
                        crossDomain: true,
                        contentType: 'application/json',
                        type: 'POST',
                        data: JSON.stringify({
                            'id': jQuery('input[name=headeridx' + id + ']').val(),
                            'qty': jQuery('input[name=headerqtyx' + id + ']').val(),
                            '_token': jQuery('input[name=_token]').val()
                        }),
                        success: function (response) {
                            jQuery('#licartnew' + id + '').hide();
                            jQuery("#countapp1").html(response.length);
                            jQuery("#countapp").html(response.length);
                            jQuery("#responseDone").html('<p>' + "تم حذف المنتج بنجاح" + '</p>');
                            jQuery('.bs-example-modal-sm').modal('show');


                        },
                        error: function (response) {
                            alert("no");
//

                        },
                    });
                });


            });

        }

    </script>

    >
        // Log LOGIN_SKIP to Google Analytics
        var skipLogin = document.getElementById('homeSkipLoginBtn');
        skipLogin.addEventListener('click', function (event) {
            // Sends the event to Google Analytics
            gtag('event', 'LOGIN_SKIP', {
                'event_category': 'HOME_SCREEN',
                'event_action': 'LOGIN_SKIP'
            })
        });
    </script>

@endsection