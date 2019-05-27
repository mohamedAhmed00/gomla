@extends ('layouts.app')

@section('metatitle') Gomla Website | {{$product['name']}}  @stop

@section('metadescription') {{$product['description']}} @stop

@section('metaimage')http://163.172.33.245/goomla/storage/app/erpnext/{{$product['image']}}@stop



@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {{--<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        /*. {*/
            /*height: 214px;*/
            /*width: 214px;*/
        /*}*/


        /*. {*/
            /*height: 350px !important;*/
            /*width: auto !important;*/
            /*vertical-align: middle !important;*/
            /*text-align: center !important;*/
        /*}*/

        .owl-item {
            float: right;
        }
        .popup {
            padding: 20px 0px 10px 0px;
            text-align: center;
            font-size: 18px;
            color: green;
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

    </style>
@endsection


@section('content')


    <div class="page-heading">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home"><a href="{{url("/")}}" title="الذهاب إلي الصفحه الرئيسيه">الصفحه
                                    الرئيسيه </a>
                                <span> </span>
                            </li>
                        </ul>
                    </div>
                    <!--col-xs-12-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <div class="page-title">
            <h2>{{$product['name']}}</h2>
        </div>
    </div>

    <!-- Small modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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

    <div id="error" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                                 aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog modal-sm" role="document">

                                    <div id="responseError" width="200px" class="popup modal-content" style="color:red;">

                                    </div>
                                </div>
                            </div>


    <!-- BEGIN Main Container -->
    <div class="main-container col1-layout wow bounceInUp animated">
        <div class="main">
            <div class="col-main">
                <!-- Endif Next Previous Product -->
                <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product"
                     itemid="#product_base">
                    <div id="messages_product_view"></div>
                    <!--product-next-prev-->
                    <div class="product-essential container">
                        <div class="row">

                            <script type="text/javascript" src="{{url('/public/gomla/')}}/js/jquery.min.js"></script>

                            <!--End For version 1, 2, 6 -->
                            <!-- For version 3 -->
                            <div class="product-img-box col-sm-6 col-xs-12">
                                <div class="product-image">
                                    <div class=" large-image">
                                        @if(isset($product['image']))
                                            <a href="http://163.172.33.245/goomla/storage/app/erpnext/{{$product['image']}}"
                                               class="cloud-zoom" id="zoom1"
                                               rel="useWrapper: false, adjustY:0, adjustX:20">
                                                <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product['image']}}">
                                            </a>
                                        @else
                                            <a href="#"
                                               class="cloud-zoom" id="zoom1"
                                               rel="useWrapper: false, adjustY:0, adjustX:20">
                                                <img src="{{url('/public/gomla/')}}/images/404.png">
                                            </a>

                                        @endif

                                    </div>
                                </div>
                                <!-- end: more-images -->
                            </div>
                            <!--End For version 1,2,6-->
                            <!-- For version 3 -->
                            <div class="product-shop col-sm-6 col-xs-12">

                                <div class="product-name">
                                    <h1 itemprop="name">{{$product['name']}}</h1>
                                </div>
                                <!--product-name-->
                                <span itemprop="aggregateRating" itemscope=""
                                      itemtype="http://schema.org/AggregateRating">
                                    </span>

                                <div class="price-block">
                                    <div class="price-box">
                                        <span class="regular-price" id="product-price-123">
                                            <span class="price">   {{$product['standard_rate']}}جنيه </span>
                                        </span>
                                    </div>
                                    <p class="availability in-stock">

                                </div>
                                <!--price-block-->
                                <div class="short-description">
                                    <h2>نظره سريعه</h2>
                                    <p>{!! $product['description'] !!} </p>
                                </div>


                                <div class="add-to-box">
                                    {{--form add to cart--}}
                                    <script type="text/javascript" src="{{url('/public/gomla/')}}/js/jquery.min.js"></script>

                                    <div class="add-to-box">
                                        <form data-parsley-validate method="POST" id="formcart{{$product['id']}}">

                                            <div class="add-to-cart">
                                                <div class="pull-left">
                                                    <div class="custom pull-left">

                                                        <button onClick="var result = document.getElementById('{{$product['id']}}');
                                                                var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                                class="increase items-count"
                                                                type="button">
                                                            <i class="icon-plus">&nbsp;</i>
                                                        </button>

                                                        <button onClick="var result = document.getElementById('{{$product['id']}}');
                                                                var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 )
                                                                result.value--;return false;"
                                                                class="reduced items-count"
                                                                type="button">
                                                            <i class="icon-minus">&nbsp;</i>
                                                        </button>

                                                        <input min="{{$product['min_order_qty']}}"

                                                               data-parsley-required="true"
                                                               type="text"

                                                               name="productqty{{$product['id']}}"
                                                               id="{{$product['id']}}"
                                                               title="الكميه:"
                                                               class="input-text qty">


                                                        <input value="{{$product['id']}}"
                                                               data-parsley-required="true" type="hidden"
                                                               name="id{{$product['id']}}" id="code{{$product['id']}}"
                                                               title="" class="input-text item_code">

                                                        <!--custom pull-left-->
                                                    </div>
                                                </div>

                                                <!--pull-left-->
                                                   @if(intval($product['stock_qty']) > 0)

                                                    <button type="submit"
                                                            id="addtocart{{$product['id']}}"
                                                            title="إضافه إلى سلة الشراء" class="button btn-cart">
                                                        <span><i class="icon-basket"></i>إضافه إلى  سله الشراء</span>
                                                    </button>
                                                    @else
                                                    <button disabled="disabled"
                                                    			id="{{$product['id']}}"
                                                            title=" المنتج غير متوفر" style="background-color: #000000; color:#fff;" class="button btn-cart">
                                                        <span><i class="icon-basket"></i>المنتج غير متوفر</span>
                                                    @endif
													</button>


                                            </div>
                                            <!--email-addto-box-->
                                        </form>


                                        <div class="email-addto-box">
                                            <ul class="add-to-links">

                                                @if(in_array($product['id'], $wishlist_products))
                                                    <button class="link-wishlist" title="إضافه الي قائمه المفضله"
                                                            type="submit"
                                                            style="color: red"
                                                            id="addtofavdetails{{$product['id']}}">
                                                        <span>إضافه الي قائمه المفضله  </span>
                                                    </button>
                                                @else
                                                    <button class="link-wishlist" title="إضافه الي قائمه المفضله"
                                                            type="submit"
                                                            style="color: black"
                                                            id="addtofavdetails{{$product['id']}}">
                                                        <span>إضافه الي قائمه المفضله  </span>
                                                    </button>
                                                @endif
                                                <input value="{{$product['id']}}" type="hidden"
                                                       name="details_id{{$product['id']}}"
                                                       id="details_id{{$product['id']}}">
                                                <input value="{{$product['name']}}" type="hidden"
                                                       name="detailsi_tem_name{{$product['id']}}"
                                                       id="details_name{{$product['id']}}">

                                                {{--script add wishlist--}}
                                                <script>
                                                    jQuery(document).ready(function () {
                                                        jQuery('#addtofavdetails{{$product['id']}}').click(function () {
                                                            jQuery.ajax({
                                                                url: "{{url('addwishlist')}}",
                                                                type: 'post',
                                                                data: {
                                                                    'id': jQuery('input[name=details_id{{$product['id']}}]').val(),
                                                                    'name': jQuery('input[name=detailsi_tem_name{{$product['id']}}]').val(),
                                                                    '_token': jQuery('input[name=_token]').val()
                                                                },

                                                                success: function (response) {
                                                                    if (response == 2) {

                                                                        jQuery("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                                                        jQuery('#exampleModalLong').modal('show');

                                                                    }
                                                                    else if (response == 1) {
                                                                        jQuery('#addtofavdetails{{$product['id']}}').css("color", "red");
                                                                        gtag('event', 'FAVOURITES_ADD', {
                                                                            'event_category': 'FAVOURITES',
                                                                            'event_action': 'FAVOURITES_ADD_{{$product['id']}}'
                                                                        });
                                                                    }
                                                                    else {
                                                                        jQuery('#addtofavdetails{{$product['id']}}').css("color", "black");
                                                                        gtag('event', 'FAVOURITES_REMOVE', {
                                                                            'event_category': 'FAVOURITES',
                                                                            'event_action': 'FAVOURITES_REMOVE_{{$product['id']}}'
                                                                        });
                                                                    }
                                                                },

                                                                error: function () {

                                                                },

                                                            });
                                                        });
                                                    });
                                                </script>

                                                <li>
                                                </li>
                                            </ul>
                                            <!--add-to-links-->
                                        </div>
                                    </div>
                                    <!--email-addto-box-->


                                    {{--script add to cart--}}
                                    <script>
                                        jQuery(document).ready(function () {
                                            jQuery('#addtocart{{$product['id']}}').one('click', function () {
                                                jQuery('#formcart{{$product['id']}}').submit(function (e) {
                                                    e.preventDefault(e);

                                                    jQuery.ajax({
                                                        url: "{{url('/addcart')}}",
                                                        crossDomain: true,
                                                        contentType: 'application/json',
                                                        type: 'POST',
                                                        data: JSON.stringify({
                                                            'id': jQuery('input[name=id{{$product['id']}}]').val(),
                                                            'qty': jQuery('input[name=productqty{{$product['id']}}]').val(),
                                                            '_token': jQuery('input[name=_token]').val()
                                                        }),
                                                        success: function (response) {
                                                            if (typeof response === 'string' || response instanceof String)
                                                                                    {
                                                                                        //alert(response);
                                                                                        jQuery('#responseError').html(response);

                                                                                        jQuery('#error').modal('show');
                                                                                    }
                                                            else if (response == 1) {
                                                                jQuery("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                                                jQuery('#exampleModalLong').modal('show');
                                                            } else {
                                                                jQuery('#cart-sidebar').html('');
                                                                jQuery("#responseDone").html('<p>' + "تم اضافه المنتج بنجاح" + '</p>');
                                                                jQuery('#success').modal('show');
                                                                jQuery("#countapp1").html(response.length);
                                                                jQuery("#countapp").html(response.length);
                                                                console.log(response);

                                                                jQuery.each(response, function () {
                                                                    jQuery('#cart-sidebar').append('<li id="licartnew' + this.id + '" class="item first" >' +
                                                                        '<div class="item-inner">' +
                                                                        '<a class="product-image" title="' + this.name + '" href="{{url('product')}}' + '/' + this.id + '"  >' +

                                                                        '<img alt="' + this.name + '" src="http://163.172.33.245/goomla/storage/app/erpnext' + '/' + this.image + '">' +
                                                                        '</a>' +
                                                                        '<div class="product-details">' +
                                                                        '<div class="access">' +

                                                                        '<form method="POST" id="formdeletcartheaderx' + this.id + '">' +
                                                                        ' <input type="hidden" value="0" name="headerqtyx' + this.id + '" id="qtycartx' + this.id + '"/>' +
                                                                        ' <input type="hidden" value="' + this.id + ' "name="headeridx' + this.id + '" id="headeridx' + this.id + '"/>' +
                                                                        ' <button id="deletecartheaderx' + this.id + '" class="btn-remove1" title="احذف هذا المنتج" type="submit">' + 'حذف' +
                                                                        '</button>' +
                                                                        '</form>' +

                                                                        '</div>' +

                                                                        '<strong>' + "الكميه : " + '</strong>' +

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

                                                                });

                                                                {{--script delete to cart--}}
                                                                jQuery(document).ready(function () {
                                                                    jQuery(document).ready(function () {
                                                                        jQuery('#deletecartheaderx{{$product['id']}}').one('click', function () {
                                                                            jQuery('#formdeletcartheaderx{{$product['id']}}').submit(function (e) {
                                                                                e.preventDefault(e);

                                                                                jQuery.ajax({
                                                                                    url: "{{url('/deletecart/1')}}",
                                                                                    crossDomain: true,
                                                                                    contentType: 'application/json',
                                                                                    type: 'POST',
                                                                                    data: JSON.stringify({
                                                                                        'id': jQuery('input[name=headeridx{{$product['id']}}]').val(),
                                                                                        'qty': jQuery('input[name=headerqtyx{{$product['id']}}]').val(),
                                                                                        '_token': jQuery('input[name=_token]').val()
                                                                                    }),
                                                                                    success: function (response) {
                                                                                        if (response == 1) {
                                                                                            jQuery('#licartnew{{$product['id']}}').hide();
                                                                                            jQuery("#countapp1").html(response.length);
                                                                                            jQuery("#countapp").html(response.length);
                                                                                            jQuery("#responseDone").html('<p>' + "تم حذف المنتج بنجاح" + '</p>');
                                                                                            jQuery('.bs-example-modal-sm').modal('show');
                                                                                        }

                                                                                    },
                                                                                    error: function (response) {
                                                                                        alert("no");
//

                                                                                    },

                                                                                });
                                                                            });
                                                                        });
                                                                    });
                                                                });


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


                                </div>

                            </div>
                            <!--product-shop-->
                            <!--Detail page static block for version 3-->

                        </div>
                    </div>
                    <!--product-essential-->
                    <div class="product-collateral container">
                        <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                            <li class="active"><a href="#product_tabs_description" data-toggle="tab"> وصف المنتج</a>
                            </li>

                        </ul>
                        <div id="productTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="product_tabs_description">
                                <div class="std">
                                    <p>{{$product['description']}}.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--product-collateral-->

                </div>
                <!--box-additional-->
                <!--product-view-->
            </div>
        </div>
        <!--col-main-->
    </div>


    <!-- best Pro Slider   Cat sort number one -->
    <section class=" wow bounceInUp animated">
        <div class="best-pro slider-items-products container">
            <div class="new_title">
                <h2>المنتجات ذات صله</h2>
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
                                                <img src="{{url('/public/gomla/')}}/products-images/product-img.jpg"
                                                     alt="{{$product->name}}">

                                            @endif
                                        </a>
                                        <div class="item-box-hover">

                                            <div class="actions">
                                                        <span class="add-to-links">
                                                             @if(in_array($product->id, $wishlist_products))

                                                                <button class="link-wishlist"
                                                                        title="إضافة ألى قائمة المفضله"
                                                                        type="submit"
                                                                        style="color: red"
                                                                        id="addtofav1{{$product->id}}">
                                                                            </button>
                                                            @else

                                                                <button class="link-wishlist"
                                                                        title="إضافة ألى قائمة المفضله"
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
                                                                                            } else {
                                                                                                jQuery('#addtofav1{{$product->id}}').css("color", "black");
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
                                                <span class="price">  {{$product->standard_rate}}  </span>
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
                                                <button type="submit"
                                                        id="hpaddtocart1{{$product->id}}"
                                                        title="أضافه ألى سلة الشراء" class="button btn-cart">
                                                    <span><i class="icon-basket"></i>أضافه ألى سلة الشراء</span>
                                                </button>
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
                                                                    jQuery("#responseDone").html('<p>' + "تم اضافه المنتج بنجاح" + '</p>');
                                                                    jQuery('#success').modal('show');
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

    <!-- end related product -->

    <!--main-container-->
    <!--col1-layout-->
@endsection


@section('javascript')

    <script src="{{url('/public/')}}/prasley/parsley.js"></script>

    <script>


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

                    ' <button id="delcart' + this.id + '" class="buttoncart" title="إحذف هذا المنتج" type="button"> ' + 'حذف' +
                    '</button>' +
                    '</div>' +
                    '<strong>' + "الكميه : " + '</strong>' +
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


    <!-- JavaScript -->
    <script type="text/javascript" src="{{url('/public/gomla/')}}/js/jquery.flexslider.js"></script>

    <script type="text/javascript" src="{{url('/public/gomla/')}}/js/cloud-zoom.js"></script>


@endsection
