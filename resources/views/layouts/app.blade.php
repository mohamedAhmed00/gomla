<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('gomla/img/icon/favicon.png') }}">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('gomla/css/bootstrap.min.css') }}">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{ asset('gomla/lib/css/nivo-slider.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('gomla/css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('gomla/css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('gomla/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('gomla/css/responsive.css') }}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('gomla/css/custom.css') }}">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="{{ asset('gomla/css/style-customizer.css') }}">
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="{{ asset('gomla/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
    <header class="header-area header-wrapper header-2">
        <div class="header-top-bar plr-185">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="call-us">
                            <p class="mb-0 roboto">(+88) 01234-567890</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-link clearfix">
                            <ul class="link f-right">
                                <li>
                                    <a href="my-account.html">
                                        <i class="zmdi zmdi-account"></i>
                                        My Account
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="zmdi zmdi-favorite"></i>
                                        Wish List (0)
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="zmdi zmdi-lock"></i>
                                        Login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-middle-area -->
        <div id="sticky-header" class="header-middle-area plr-185">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('gomla/images/logo/logo.jpg') }}" style="width: 100px;" alt="main logo">
                                </a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-center">
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="mega-parent"><a href="#">elements</a>
                                        <div class="mega-menu-area clearfix">
                                            <div class="mega-menu-link mega-menu-link-4  f-left">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Elements 1</li>
                                                    <li>
                                                        <a href="elements-header-1-sticky.html">header-1-sticky</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-header-1-no-sticky.html">header-1-no-sticky</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-header-2-sticky.html">header-2-sticky</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-header-2-no-sticky.html">header-2-no-sticky</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-footer-1.html">footer-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-footer-2.html">footer-2</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-footer-3.html">footer-3</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-contact-form.html">Dynamic Contact Form</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-map.html">Google Map</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Elements 2</li>
                                                    <li>
                                                        <a href="elements-featured-product-1.html">featured-product-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-featured-product-2.html">featured-product-2</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-product-tab-1.html">product-tab-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-product-tab-2.html">product-tab-2</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-up-comming-product-1.html">up-comming-product-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-up-comming-product-2.html">up-comming-product-2</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-single-product.html">single-product</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-sidebar-left.html">sidebar-left</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-sidebar-right.html">sidebar-right</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Elements 3</li>
                                                    <li>
                                                        <a href="elements-section-title.html">section-title</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-pagination.html">pagination</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-banner.html">Banner</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-brands.html">Brands</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-breadcrumbs.html">Breadcrumbs</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-newsletter.html">Newsletter</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-team.html">team</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-audio.html">Audio</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-video.html">Video</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Elements 4</li>
                                                    <li>
                                                        <a href="elements-typography.html">typography</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-buttons.html">Buttons</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-call-to-action.html">Call to Action</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-accordion.html">Accordion</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-alerts.html">Alerts</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-progress-bars.html">progress-bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-tab.html">tab</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-toggles.html">toggles</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-toggles.html">toggles</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mega-parent"><a href="{{ url('categories') }}">Products</a>
                                        <div class="mega-menu-area clearfix">
                                            <div class="mega-menu-link f-left">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Smart Phone</li>
                                                    <li>
                                                        <a href="#">All Mobile Phones</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Smart phones</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Android Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Windows Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Refurbished Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">All Mobile Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Note Book</li>
                                                    <li>
                                                        <a href="">All Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Smart notebooks</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Android Note Book</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Windows Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Refurbished Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Note Books Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Tablets</li>
                                                    <li>
                                                        <a href="">All Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Smart tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Android Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Windows Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Refurbished Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Tablets Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu-photo f-left">
                                                <a href="#">
                                                    <img src="{{ asset('gomla/img/mega-menu/1.jpg') }}" alt="mega menu image">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mega-parent"><a href="#">Pages</a>
                                        <div class="mega-menu-area mega-menu-area-2 clearfix">
                                            <div class="mega-menu-link mega-menu-link-2  f-left">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">page list</li>
                                                    <li>
                                                        <a href="shop.html">Shop</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list.html">Shop List</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.html">Single Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-left-sidebar.html">Single Product Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">page list</li>
                                                    <li>
                                                        <a href="cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="order.html">Order</a>
                                                    </li>
                                                    <li>
                                                        <a href="login.html">Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="My-account.html">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="about.html">About us</a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html">404</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="dropdwn">
                                            <li><a href="blog-left-sidebar.html">Dropdown Repeat</a>
                                                <ul class="dropdwn-repeat">
                                                    <li>
                                                        <a href="blog.html">Blog</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-2.html">Blog style 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog.html">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2.html">Blog style 2</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-blog.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about-us') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact-us') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="search-top-cart  f-right">
                                <!-- header-search -->
                                <div class="header-search header-search-2 f-left">
                                    <div class="header-search-inner">
                                        <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                        <form action="#">
                                            <div class="top-search-box">
                                                <input type="text" placeholder="Search here your product...">
                                                <button type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-account header-account-2 f-left">
                                    <ul class="user-meta">
                                        <li><a href="#"><i class="zmdi zmdi-view-headline"></i></a>
                                            <ul>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="#">Wish list</a></li>
                                                <li><a href="#">Checkout</a></li>
                                                <li><a href="#">Testimonial</a></li>
                                                <li><a href="#">Log in</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- total-cart -->
                                <div class="total-cart total-cart-2 f-left">
                                    <div class="total-cart-in">
                                        <div class="cart-toggler">
                                            <a href="#">
                                                <span class="cart-quantity">
                                                    @if(session('cart'))
                                                        {{count( session('cart') )}}
                                                    @else
                                                        0
                                                    @endif
                                                </span><br>
                                                <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="top-cart-inner your-cart">
                                                    <h5 class="text-capitalize">Your Cart</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-cart-pro">
                                                    <!-- single-cart -->
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-img f-left">
                                                            <a href="#">
                                                                <img src="{{ asset('gomla/img/cart/1.jpg') }}" alt="Cart Product" />
                                                            </a>
                                                            <div class="del-icon">
                                                                <a href="#">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cart-info f-left">
                                                            <h6 class="text-capitalize">
                                                                <a href="#">Dummy Product Name</a>
                                                            </h6>
                                                            <p>
                                                                <span>Brand <strong>:</strong></span>Brand Name
                                                            </p>
                                                            <p>
                                                                <span>Model <strong>:</strong></span>Grand s2
                                                            </p>
                                                            <p>
                                                                <span>Color <strong>:</strong></span>Black, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- single-cart -->
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-img f-left">
                                                            <a href="#">
                                                                <img src="{{ asset('gomla/img/cart/1.jpg') }}" alt="Cart Product" />
                                                            </a>
                                                            <div class="del-icon">
                                                                <a href="#">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cart-info f-left">
                                                            <h6 class="text-capitalize">
                                                                <a href="#">Dummy Product Name</a>
                                                            </h6>
                                                            <p>
                                                                <span>Brand <strong>:</strong></span>Brand Name
                                                            </p>
                                                            <p>
                                                                <span>Model <strong>:</strong></span>Grand s2
                                                            </p>
                                                            <p>
                                                                <span>Color <strong>:</strong></span>Black, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner subtotal">
                                                    <h4 class="text-uppercase g-font-2">
                                                        Total  =
                                                        <span>$ 500.00</span>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner view-cart">
                                                    <h4 class="text-uppercase">
                                                        <a href="#">View cart</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner check-out">
                                                    <h4 class="text-uppercase">
                                                        <a href="#">Check out</a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
    <div class="mobile-menu-area hidden-lg hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a>
                                    <ul>
                                        <li>
                                            <a href="index.html">Home Version 1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home Version 2</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">Home Version 3</a>
                                        </li>
                                        <li>
                                            <a href="index-4.html">Home 4 Animated Text</a>
                                        </li>
                                        <li>
                                            <a href="index-5.html">Home 5 Animated Text Ovlerlay</a>
                                        </li>
                                        <li>
                                            <a href="index-6.html">Home 6 Background Video</a>
                                        </li>
                                        <li>
                                            <a href="index-7.html">Home 7 BG-Video Ovlerlay</a>
                                        </li>
                                        <li>
                                            <a href="index-8.html">Home 8 Boxed-1</a>
                                        </li>
                                        <li>
                                            <a href="index-9.html">Home 9 Gradient</a>
                                        </li>
                                        <li>
                                            <a href="index-10.html">Home 10 Boxed-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">Products</a>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-list.html">Shop List</a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-product.html">Single Product</a>
                                        </li>
                                        <li>
                                            <a href="single-product-left-sidebar.html">Single Product Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="order.html">Order</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="My-account.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li>
                                            <a href="blog.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-2.html">Blog style 2</a>
                                        </li>
                                        <li>
                                            <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-blog.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/about-us') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact-us') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MOBILE MENU AREA -->

    @yield('content')

    <!-- START FOOTER AREA -->
    <footer id="footer" class="footer-area footer-2">
        <div class="footer-top footer-top-2 text-center ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-logo">
                            <img style="width: 100px;height: 80px" src="{{ asset('gomla/images/logo/logo.jpg') }}" alt="">
                        </div>
                        <ul class="footer-menu-2">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom footer-bottom-2 text-center gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5">
                        <div class="copyright-text copyright-text-2">
                            <p>&copy; <a href="#" target="_blank">Subas</a> 2018. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <ul class="footer-social footer-social-2">
                            <li>
                                <a class="facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                            </li>
                            <li>
                                <a class="google-plus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                            </li>
                            <li>
                                <a class="twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                            </li>
                            <li>
                                <a class="rss" href="#" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-3">
                        <ul class="footer-payment">
                            <li>
                                <a href="#"><img src="{{ asset('gomla/img/payment/1.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('gomla/img/payment/2.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('gomla/img/payment/3.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('gomla/img/payment/4.jpg') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER AREA -->

    <!-- START QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product clearfix">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="" src="{{ asset('gomla/img/product/quickview.jpg') }}">
                                </div>
                            </div><!-- .product-images -->

                            <div class="product-info">
                                <h1>Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">£160.00</span>
                                        <span class="old-price">£190.00</span>
                                    </div>
                                </div>
                                <a href="single-product-left-sidebar.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons clearfix">
                                            <li>
                                                <a class="facebook" href="#" target="_blank" title="Facebook">
                                                    <i class="zmdi zmdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="#" target="_blank" title="Google +">
                                                    <i class="zmdi zmdi-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank" title="Twitter">
                                                    <i class="zmdi zmdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="pinterest" href="#" target="_blank" title="Pinterest">
                                                    <i class="zmdi zmdi-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="rss" href="#" target="_blank" title="RSS">
                                                    <i class="zmdi zmdi-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->

    <!--style-customizer start -->
    <div class="style-customizer closed">
        <div class="buy-button">
            <a href="{{ url('/') }}" class="customizer-logo"><img src="{{ asset('gomla/images/logo/logo.png') }}" alt="Theme Logo"></a>
        </div>
        <div class="clearfix content-chooser">
            <h3>Layout Options</h3>
            <p>Which layout option you want to use?</p>
            <ul class="layoutstyle clearfix">
                <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
                <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
            </ul>
            <h3>Color Schemes</h3>
            <p>Which theme color you want to use? Select from here.</p>
            <ul class="styleChange clearfix">
                <li class="skin-default selected" title="skin-default" data-style="skin-default" ></li>
                <li class="skin-green" title="green" data-style="skin-green"></li>
                <li class="skin-purple" title="purple" data-style="skin-purple"></li>
                <li class="skin-blue" title="blue" data-style="skin-blue"></li>
                <li class="skin-cyan" title="cyan" data-style="skin-cyan"></li>
                <li class="skin-amber" title="amber" data-style="skin-amber"></li>
                <li class="skin-blue-grey" title="blue-grey" data-style="skin-blue-grey"></li>
                <li class="skin-teal" title="teal" data-style="skin-teal"></li>
            </ul>
            <h3>Background Patterns</h3>
            <p>Which background pattern you want to use?</p>
            <ul class="patternChange clearfix">
                <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
                <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
                <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
                <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
                <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
                <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
                <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
                <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
            </ul>
            <h3>Background Images</h3>
            <p>Which background image you want to use?</p>
            <ul class="patternChange main-bg-change clearfix">
                <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="{{ asset('gomla/images/customizer/bodybg/01.jpg') }}" alt=""></li>
                <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="{{ asset('gomla/images/customizer/bodybg/02.jpg') }}" alt=""></li>
                <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="{{ asset('gomla/images/customizer/bodybg/03.jpg') }}" alt=""></li>
                <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="{{ asset('gomla/images/customizer/bodybg/04.jpg') }}" alt=""></li>
                <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="{{ asset('gomla/images/customizer/bodybg/05.jpg') }}" alt=""></li>
                <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="{{ asset('gomla/images/customizer/bodybg/06.jpg') }}" alt=""></li>
                <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="{{ asset('gomla/images/customizer/bodybg/07.jpg') }}" alt=""></li>
                <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="{{ asset('gomla/images/customizer/bodybg/08.jpg') }}" alt=""></li>
            </ul>
            <ul class="resetAll">
                <li><a class="button button-border button-reset" href="#">Reset All</a></li>
            </ul>
        </div>
    </div>
    <!--style-customizer end -->
</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{ asset('gomla/js/vendor/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('gomla/js/bootstrap.min.js') }}"></script>
<!-- jquery.nivo.slider js -->
<script src="{{ asset('gomla/lib/js/jquery.nivo.slider.js') }}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('gomla/js/plugins.js') }}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('gomla/js/main.js') }}"></script>

</body>

</html>