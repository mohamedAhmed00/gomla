<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('metadescription')">
    <meta name="keywords" content="fashion, store, E-commerce">
    <meta name="robots" content="*">

    <meta property="og:title" content="@yield('metatitle')"/>
    <meta property="og:description" content="@yield('metadescription')"/>
    <meta property="og:url" content="http://gomla.online"/>
    <meta property="og:image" content="@yield('metaimage')"/>


    <link rel="icon" href="#" type="image/x-icon">
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <link rel="shortcut icon" href="{{asset('gomla/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('gomla/images/favicon-32x32.png')}}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('gomla/images/favicon-16x16.png')}}">
    <link rel="icon" href="{{asset('gomla/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/font-awesome.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/revslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/style.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('gomla/stylesheet/responsive.css')}}" media="all">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    <style>
        .dirc {
            direction: ltr;
        }

        .popup {
            padding: 20px 0px 10px 0px;
            text-align: center;
            /* line-height: 40px; */
            font-size: 18px;
            /* font-weight: 600; */
            /* height: 35px; */
            color: green;
        }

        .buttoncart {
            left: auto !important;
            background: white !important;
            border: none !important;
            color: #080808 !important;
            right: 0px !important;
            margin-top: 0px !important;
            top: -13px !important;
            /* background: none; */
            float: left !important;
            margin-right: 30px !important;
            margin-left: -30px !important;
        }

        #ac li {
            font-size: 15px;
            font-weight: bold;
            padding-top: 7px;
            padding-left: 3px;
            padding-right: 3px;
            border-radius: 4px;
            padding-bottom: 7px;
        }

        #ac li:hover {
            background-color: #901a1d;
        }

        #ac li:hover a {
            color: #fff;
        }

        #ac {
            -webkit-margin-before: 0em;
            -webkit-padding-start: 0px;
            -webkit-margin-after: 0em;

        }

    </style>
    @yield('head')

</head>
<body>
<div id="page">
    <header>
        <div class="header-banner">
            <div class="assetBlock">
                <div style="height: 20px; overflow: hidden;" id="slideshow">
                    <p style="font-size: 16px;   font-weight: 600; display: block;">مفهوم جديد للجملة</p>
                    <p style="font-size: 16px;   font-weight: 600; display: none;"> وفر فلوسك .. وفر وقتك .. وفر
                        مجهودك </p>

                </div>
            </div>
        </div>
        <div id="header">
            <div class="header-container container">
                <div class="row">
                    <div class="logo"><a href="{{url('/')}}" title="جملةاونلاين">
                            <div><img src="{{asset('gomla/images/logo.png')}}" alt="{{ config('app.name') }}">
                            </div>
                        </a></div>
                    <div class="fl-nav-menu">

                        <nav>
                            <div class="mm-toggle-wrap">
                                <div class="mm-toggle"><i class="icon-align-justify"></i><span
                                            class="mm-label">القائمة</span></div>
                            </div>
                            <div class="nav-inner">
                                <!-- BEGIN NAV -->
                                <ul id="nav" class="hidden-xs">

                                    <li class="active">
                                        <a class="level-top" href="{{url('/')}}"><span>الرئيسية</span></a>
                                    </li>

                                    <li class="mega-menu"><a id="navbarCategoriesBtn" class="level-top"
                                                             href="{{url('/categories')}}"><span>الأقسام</span></a>

                                        <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                                            <div class="container">
                                                <div class="level0-wrapper2">
                                                    <div class="col-1">
                                                        <div class="nav-block nav-block-center">
                                                            <!--mega menu-->
                                                            <ul class="level0">
                                                                <?php
                                                                $crl2 = curl_init();

                                                                curl_setopt($crl2, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categorytree');
                                                                curl_setopt($crl2, CURLOPT_RETURNTRANSFER, true);
                                                                curl_setopt($crl2, CURLOPT_SSL_VERIFYHOST, false);
                                                                curl_setopt($crl2, CURLOPT_SSL_VERIFYPEER, false);

                                                                $rest2 = curl_exec($crl2);
                                                                $homecategories = json_decode($rest2);
                                                                ?>
                                                                @if(!is_array($homecategories))
                                                                    Error Categories Please Reload
                                                                @endif
                                                                @foreach ($homecategories as $category)
                                                                    <li class="level3 nav-6-1 parent item">
                                                                        @if($category->sub_categories != null)
                                                                            <a href="{{url('categories/'.$category->id)}}">
                                                                                <span>{{$category->name}}</span>
                                                                            </a>
                                                                        @else
                                                                            <a href="{{url('products/'.$category->id)}}">
                                                                                <span>{{$category->name}}</span>
                                                                            </a>
                                                                    @endif
                                                                    @if(!empty($category->sub_categories)  )
                                                                        <!--sub sub category-->
                                                                            <ul class="level1">
                                                                                {{--<li class="level2 nav-6-1-1">--}}
                                                                                @if(!is_array($category->sub_categories))
                                                                                    Error Sub Categories Please Reload
                                                                                @endif
                                                                                @foreach($category->sub_categories as $subcats)

                                                                                    <a href="{{url('products/'.$subcats->id)}}">
                                                                                        <span>{{$subcats->name}}</span>
                                                                                    </a>
                                                                                    {{--</li>--}}
                                                                                @endforeach
                                                                            </ul>
                                                                    @endif
                                                                    <!--level1-->
                                                                        <!--sub sub category-->
                                                                    </li>
                                                                @endforeach

                                                            </ul>

                                                            <!--level0-->
                                                        </div>
                                                        <!--nav-block nav-block-center-->
                                                    </div>
                                                    <!--col-1-->
                                                    <div class="col-2">
                                                        <div class="menu_image">
                                                            <a title="الاقسام" href="{{url('categories')}}">
                                                                <img alt="menu_image"
                                                                     src="{{asset('gomla/images/Categories-Menu.png')}}">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <!--col-2-->
                                                </div>
                                                <!--level0-wrapper2-->
                                            </div>
                                            <!--container-->
                                        </div>
                                        <!--level0-wrapper dropdown-6col-->
                                        <!--mega menu-->
                                    </li>


                                    <li class="mega-menu"><a id="navbarAboutUs" class="level-top"
                                                             href="{{url('/about-us')}}"><span>عن جملة</span></a>
                                    </li>


                                    <li class="mega-menu"><a id="navbarContactUs" class="level-top"
                                                             href="{{url('/contact-us')}}"><span>أتصل بنا</span></a>
                                    </li>

                                    <li class="mega-menu"><a id="navbarPrivacyPolicy" class="level-top"
                                                             href="{{url('/privacy')}}"><span>سياسه الخصوصية</span></a>
                                    </li>


                                </ul>
                                <!--nav-->
                            </div>
                        </nav>
                    </div>


                    <!--row-->


                    <div class="fl-header-right">
                        <div class="fl-links">
                            <div class="no-js"><a title="" class="clicker"></a>
                                <div class="fl-nav-links">

                                    <ul class="links">
                                        @if(session('auth_token'))
                                            <li>
                                                <a href="{{url('/profile')}}" title="حسابي">حسابي</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/wishlist')}}" title="المفضله">المفضله</a>
                                            </li>

                                            <li>
                                                <a href="{{url('cart')}}" title="سله الشراء">سله الشراء</a>
                                            </li>

                                            {{--<li>--}}
                                            {{--<a href="checkout.html" title="متابعه الشراء">متابعه الشراء</a>--}}
                                            {{--</li>--}}


                                            <li>
                                                <a href="{{url('/history')}}" title="متابعه الشراء">مشترياتي السابقه</a>
                                            </li>


                                            <li class="last">
                                                <a id="logOutBtn" href="{{url('logout')}}"
                                                   title="الخروج"><span>الخروج</span></a>
                                            </li>

                                        @else
                                            <li class="last">
                                                <a id="navbarLoginBtn" href="{{url('login')}}"
                                                   title="تسجيل الدخول"><span>تسجيل الدخول</span></a>
                                            <li class="last">
                                                <a id="navbarSignUpBtn" href="{{url('register')}}"
                                                   title="حساب جديد"><span>حساب جديد</span></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="fl-cart-contain">
                            <div class="mini-cart">
                                <div class="basket">
                                    <a href="{{url('/cart')}}">
                                        @if(session('cart'))
                                            <span id="countapp1">{{count( session('cart') )}}</span>
                                        @else
                                            <span id="countapp1">0</span>
                                        @endif
                                    </a>
                                </div>
                                <div class="fl-mini-cart-content" style="display: none;">
                                    <div class="block-subtitle">
                                        <div id="countapp" class="top-subtotal">
                                            @if(session('cart'))
                                                {{count( session('cart') )}}
                                            @else
                                                0
                                            @endif
                                            في سلة
                                            الشراء
                                            <span class="price"> </span></div>
                                        <!--top-subtotal-->
                                        <!--pull-right-->
                                    </div>
                                <?php $session = (session('cart'))   ?>
                                <!--block-subtitle-->

                                    <script type="text/javascript"
                                            src="{{asset('gomla/js/jquery.min.js')}}"></script>

                                    <ul class="mini-products-list" id="cart-sidebar">

                                        @if(isset( $session ) )

                                            @if(!empty($session))
                                                
                                                @foreach($session as $product)
                                                @if(isset($product->id))
                                                    <li id="licart{{$product->id}}" class="item first">
                                                        <div class="item-inner">
                                                            <a class="product-image" title="{{$product->name}}"
                                                               href="{{url('product/'.$product->id)}}">
                                                                @if(isset($product->image))
                                                                    <img alt="{{$product->name}}"
                                                                         src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}">
                                                                @else
                                                                    <img alt="{{$product->name}}"
                                                                         src="{{asset('gomla/products-images/product-img.jpg')}}">
                                                                @endif
                                                            </a>
                                                            <div class="product-details">
                                                                <div class="access">
                                                                    {{--form delete from cart--}}
                                                                    <form data-parsley-validate method="POST"
                                                                          id="formdeletcartheader{{$product->id}}">

                                                                        <input type="hidden" value="0"
                                                                               name="headerqty{{$product->id}}"
                                                                               id="headerqty{{$product->id}}">


                                                                        <input type="hidden" value="{{$product->id}}"
                                                                               name="headerid{{$product->id}}"
                                                                               id="headerid{{$product->id}}">

                                                                        <button id="deletecartheader{{$product->id}}"
                                                                                class="buttoncart" title="حذف"
                                                                                type="submit">
                                                                            <i class="fa fa-trash-o fa-2x"
                                                                               aria-hidden="true"></i>

                                                                        </button>

                                                                    </form>
                                                                </div>
                                                                <!--access-->
                                                                <strong>الكميه : </strong>
                                                                <strong>{{$product->qty}}</strong>
                                                                <span class="price">&nbsp {{$product->standard_rate}}
                                                                    &nbsp </span>

                                                                <span class="price">جنيه</span>
                                                                <p class="product-name">
                                                                    <a href="{{url('product/'.$product->id)}}"
                                                                       title="{{$product->name}}">{{$product->name}}</a>
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </li>
                                                    {{--script delete to cart--}}
                                                    <script>
                                                        jQuery(document).ready(function () {
                                                            jQuery('#deletecartheader{{$product->id}}').one('click', function () {
                                                                jQuery('#formdeletcartheader{{$product->id}}').submit(function (e) {
                                                                    e.preventDefault(e);

                                                                    jQuery.ajax({
                                                                        url: "{{url('/deletecart/1')}}",
                                                                        crossDomain: true,
                                                                        contentType: 'application/json',
                                                                        type: 'POST',
                                                                        data: JSON.stringify({
                                                                            'id': jQuery('input[name=headerid{{$product->id}}]').val(),
                                                                            'qty': jQuery('input[name=headerqty{{$product->id}}]').val(),
                                                                            '_token': jQuery('input[name=_token]').val()
                                                                        }),
                                                                        success: function (response) {

                                                                            console.log(response.length);
                                                                            jQuery("#responseDone").html('<p>' + "تم حذف المنتج بنجاح" + '</p>');
                                                                            jQuery('.bs-example-modal-sm').modal('show');

                                                                            jQuery("#countapp1").html(response.length);
                                                                            jQuery("#countapp").html(response.length);
                                                                            jQuery('#licart{{$product->id}}').hide();

                                                                        },
                                                                        error: function (response) {
//

                                                                        },

                                                                    });
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    </ul>
                                    <div class="actions">
                                        <a class="btn-checkout" title="متابعه الشراء" type=""
                                           href="{{url('/cart')}}">
                                            <span>متابعه الشراء</span>
                                        </a>
                                    </div>
                                    <!--actions-->
                                </div>
                                <!--fl-mini-cart-content-->
                            </div>
                        </div>
                        <!--mini-cart-->

                        <div class="collapse navbar-collapse">

                            <form action="{{url('/search')}}" id="formsearch" method="GET" class="navbar-form"
                                  role="search">
                                <div class="input-group ui-widget">

                                    <input type="text" name="product" autocomplete="off" id="inputsearch"
                                           class="form-control"
                                           placeholder="Search">
                                    <ul style="background-color: #fff;list-style: none;" id="ac"></ul>

                                    <span class="input-group-btn">
                                           <button id="btnsearch" type="button" onclick="" class="search-btn">
                                               <span class="glyphicon glyphicon-search">
                                                   <span class="sr-only">Search</span>
                                               </span>
                                           </button>
                                         </span>

                                </div>
                            </form>
                            <script type="text/javascript" src="{{asset('gomla/js/jquery.min.js')}}"></script>

                            <script>
                                jQuery(document).ready(function () {
                                    jQuery('#btnsearch').click(function () {
                                        jQuery('#formsearch').toggleClass("active");
                                    });
                                });
                            </script>

                        </div>
                        <!--links-->
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--container-->


@yield('content')

{{--<div class="our-features-box wow bounceInUp animated animated">--}}
{{--<div class="container">--}}
{{--<ul>--}}
{{--<li>--}}
{{--<div class="feature-box free-shipping">--}}
{{--<div class="icon-truck"></div>--}}
{{--<div class="content">FREE SHIPPING on order over $99</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li>--}}
{{--<div class="feature-box need-help">--}}
{{--<div class="icon-support"></div>--}}
{{--<div class="content">Need Help +1 800 123 1234</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li>--}}
{{--<div class="feature-box money-back">--}}
{{--<div class="icon-money"></div>--}}
{{--<div class="content">Money Back Guarantee</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li class="last">--}}
{{--<div class="feature-box return-policy">--}}
{{--<div class="icon-return"></div>--}}
{{--<div class="content">30 days return Service</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}


<!-- For version 1,2,3,4,6 -->

    <footer>
        <!-- BEGIN INFORMATIVE FOOTER -->
        <div class="footer-inner"
             style="background-image: url({{url('/public/gomla/')}}/images/footer-With-Cart-Image.png)">
            <div class="newsletter-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col">
                            <!-- Footer Payment Link -->
                            <div class="payment-accept">
                                <div>
                                    <img src="{{asset('gomla/images/Payment-Card-on-delivery.png')}}"
                                         alt="الدفع ببظاقه الإتمان">
                                    <img src="{{asset('gomla/images/Payment-Card-online.png')}}"
                                         alt="الدفع اونلاين">
                                    <img src="{{asset('gomla/images/Payment-Cash-icon.png')}}" alt="الدفع نقداً">
                                </div>
                            </div>
                        </div>
                        <!-- Footer Newsletter -->
                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12 col1">
                            <div class="newsletter-wrap">
                                <h4>التوصيل لباب المنزل والدفع كاش او كريديت</h4>
                            </div>
                            <!--newsletter-wrap-->
                        </div>

                    </div>
                </div>
                <!--footer-column-last-->
            </div>
            <div class="container">
                <div class="row">
                    <div style="float: left" class="col-sm-4 col-xs-12 col-lg-4">
                        <div class="co-info">
                            <div>
                                <a href="{{url('/')}}">
                                    <img src="{{asset('/gomla/images/logo.png')}}" alt="footer logo">
                                </a>
                            </div>
                            <address>
                                {{--<div>--}}
                                {{--<em class="icon-location-arrow"></em>--}}
                                {{--<span>ABC Town Luton Street, New York 226688</span>--}}
                                {{--</div>--}}
                                <div class="dirc"><em
                                            class="icon-mobile-phone"></em><span> 0228462113 / 0228462117</span></div>
                                <div class="dirc"><em class="icon-envelope"></em><span>support@gomla.online</span></div>
                            </address>
                            <div class="social">
                                <ul class="link">
                                    <li class="fb pull-left">
                                        <a target="_blank" rel="nofollow"
                                           href="https://www.facebook.com/GomlaOnline.eg/" title="فيسبوك"></a>
                                    </li>
                                    {{--<li class="tw pull-left">--}}
                                    {{--<a target="_blank" rel="nofollow" href="#" title="Twitter"></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="googleplus pull-left">--}}
                                    {{--<a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a>--}}
                                    {{--</li>--}}

                                    <li class="apple pull-left">
                                        <a target="_blank" rel="nofollow"
                                           href="https://itunes.apple.com/us/app/gomla-online/id1233850051?ls=1&mt=8"
                                           title="apple">
                                            <i class="fa fa-apple" aria-hidden="true"></i>

                                        </a>
                                    </li>

                                    <li class="android pull-left">

                                        <a target="_blank" rel="nofollow"
                                           href="https://play.google.com/store/apps/details?id=com.pam.gomla.android"
                                           title="android">
                                            <i class="fa fa-android" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--col-sm-12 col-xs-12 col-lg-8-->
                    <!--col-xs-12 col-lg-4-->
                </div>
                <!--row-->

            </div>

            <!--container-->
        </div>
        <!--footer-inner-->

        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="row"></div>
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--footer-middle-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 coppyright"> Copyrights © 2017 gomla.online. All Rights Reserved.
                    </div>

                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--footer-bottom-->
        <!-- BEGIN SIMPLE FOOTER -->
    </footer>
    <!-- End For version 1,2,3,4,6 -->

</div>
<!--page-->
<!-- Mobile Menu-->
<div id="mobile-menu">
    <ul>
        <li>
            <div class="home"><a href="#"><i class="icon-home"></i>الرئيسية</a></div>
        </li>
        @foreach ($homecategories as $category)
            <li>
                @if($category->sub_categories != null)
                    <a href="{{url('categories/'.$category->id)}}">{{$category->name}}</a>
                @else
                    <a href="{{url('products/'.$category->id)}}">{{$category->name}}</a>
                @endif

                @if($category->sub_categories != null )
                    <ul>
                        <li>
                            @foreach($category->sub_categories as $subcats)
                                <a href="{{url('products/'.$subcats->id)}}">{{$subcats->name}}‎</a>
                            @endforeach
                        </li>

                    </ul>
                @endif
            </li>
        @endforeach


        <li><a href="{{url('about-us')}}">عن جملة‎</a></li>
        <li><a href="{{url('contact-us')}}">إتصل بنا</a></li>
    </ul>
</div>


<!-- JavaScript -->
<script type="text/javascript" src="{{asset('gomla/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('gomla/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('gomla/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('gomla/js/revslider.js')}}"></script>
<script type="text/javascript" src="{{asset('gomla/js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('gomla/js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('gomla/js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('gomla/js/jquery.mobile-menu.min.js')}}"></script>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98396155-1"></script>
<script type="text/javascript" src="{{asset('gomla/js/google.js')}}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@yield('javascript')

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#thm-rev-slider').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 0,
            startheight: 650,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'on',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'on',
            forceFullWidth: 'off',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
    jQuery('#ac').html('');
    jQuery("#inputsearch").on('keyup', function () {
        var posTop = jQuery(this).position().top;
        var posLeft = jQuery(this).position().left;
        var elementWidth = jQuery(this).width() + 50;
        var searchtag = jQuery(this).val();
        jQuery('#ac').css({top: posTop + 80, left: posLeft, width: elementWidth, position: "absolute"});
        jQuery.ajax({
            url: "http://admin.gomla.online/api/search/products?autocomplete=true&name=" + searchtag + "",
            dataType: "json",
            success: function (data) {
                //console.log(data);
                jQuery('#ac').html('')
                jQuery.each(data, function (index, value) {
                    //jQuery.each(data.data, function(item) {
                    /// do stuff

                    jQuery('#ac').append(
                        '<li><a href="{{url('')}}/product/' + value.id + '">' + value.label + '</a></li>'
                    );
                });

            }
        });
        //jQuery('#ac').html();
    });

</script>
<script type="text/javascript">
    function HideMe() {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script>

<script type="text/javascript">


    //        jQuery('body').on('click',function () {
    //            jQuery('#mobile-menu').hide();
    //        });
</script>


<script>
    // Log SEARCH to Google Analytics
    var searchForm = document.getElementById('formsearch');
    searchForm.addEventListener('submit', function (event) {
        // Sends the event to Google Analytics
        gtag('event', 'SEARCH', {
            'event_category': 'SEARCH',
            'event_action': 'SEARCH'
        })
    });

    // Log SEARCH to Google Analytics
    var logOut = document.getElementById('logOutBtn');
    logOut.addEventListener('click', function (event) {
        // Sends the event to Google Analytics
        gtag('event', 'LOGOUT', {
            'event_category': 'LOGOUT',
            'event_action': 'LOGOUT'
        })
    });
</script>
</body>
</html>