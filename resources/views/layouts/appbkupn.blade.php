<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Default Description">
    <meta name="keywords" content="fashion, store, E-commerce">
    <meta name="robots" content="*">
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/revslider.css">
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/jquery.mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{url('/public/gomla/')}}/stylesheet/responsive.css" media="all">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    @yield('head')

</head>
<body>
<div id="page">
    <header>
        <div class="header-banner">
            <div class="assetBlock">
                <div style="height: 20px; overflow: hidden;" id="slideshow">
                    <p style="display: block;">HOT DAYS! - <span>50%</span> GET READY FOR SUMMER! &gt;</p>
                    <p style="display: none;">SALE UP TO <span>40%</span> HURRY LIMITED OFFER! &gt;</p>
                </div>
            </div>
        </div>
        <div id="header">
            <div class="header-container container">
                <div class="row">
                    <div class="logo"><a href="index.html" title="Organ HTML">
                            <div><img src="{{url('/public/gomla/')}}/images/logo.png" alt="Organ Store"></div>
                        </a></div>
                    <div class="fl-nav-menu">

                        <nav>
                            <div class="mm-toggle-wrap">
                                <div class="mm-toggle"><i class="icon-align-justify"></i><span
                                            class="mm-label">Menu</span></div>
                            </div>
                            <div class="nav-inner">
                                <!-- BEGIN NAV -->
                                <ul id="nav" class="hidden-xs">

                                    <li class="active"><a class="level-top" href="#"><span>Home</span></a></li>

                                    <li class="mega-menu"><a class="level-top" href="grid.html"><span>Categories</span></a>
                                        <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                                            <div class="container">
                                                <div class="level0-wrapper2">
                                                    <div class="col-1">
                                                        <div class="nav-block nav-block-center">
                                                            <!--mega menu-->
                                                            <ul class="level0">
                                                                <?php $categories = json_decode(file_get_contents('http://163.172.104.238/goomla/api/categories'), true);
                                                                foreach ($categories as $category) {
                                                                ?>
                                                                <?php if($category['hasSubCategories'] == "true"){ ?>

                                                                <?php $sub_cats = json_decode(file_get_contents('http://163.172.104.238/goomla/api/categories/' . $category['id']), true);
                                                                foreach ($sub_cats as $cat) {
                                                                ?>
                                                                <li class="level3 nav-6-1 parent item"><a
                                                                            href="{{url('products/'.$category['id'])}}"><span><?php echo $category['name']  ?>
                                                                            ‎</span></a>
                                                                    <!--sub sub category-->

                                                                    <ul class="level1">
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"><a
                                                                                    href="{{url('products/'.$cat['id'])}}"><span><?php echo $cat['name']?></span></a>
                                                                        </li>
                                                                    </ul>

                                                                    <!--level1-->
                                                                    <!--sub sub category-->
                                                                </li>

                                                                <?php
                                                                }
                                                                ?>
                                                                <?php
                                                                }
                                                                ?>

                                                                <?php

                                                                }

                                                                ?>
                                                                <a type="button" class=" btn-success" style=" width: 125px;
                                                                text-align: center;height: 35px;vertical-align:
                                                                 middle;line-height: 35px;" href="{{url('categories')}}">
                                                                    <span>المزيد</span>
                                                                </a>
                                                            </ul>
                                                            <!--level0-->
                                                        </div>
                                                        <!--nav-block nav-block-center-->
                                                    </div>
                                                    <!--col-1-->
                                                    <div class="col-2">
                                                        <div class="menu_image"><a title="" href="grid.html"><img
                                                                        alt="menu_image"
                                                                        src="{{url('/public/gomla/')}}/images/Categories-Menu.png"></a>
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


                                    <li class="mega-menu"><a class="level-top" href="grid.html"><span>Soups‎</span></a>
                                        <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                                            <div class="container">
                                                <div class="level0-wrapper2">
                                                    <div class="nav-block nav-block-center">
                                                        <!--mega menu-->
                                                        <ul class="level0">
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Cold Soups</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Red Bean Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Fruit Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Naengguk</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Borscht</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Cream Soups</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Chowder</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Asparagus Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Broccoli Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Mushroom Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Vegitable Soups</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>French Onion Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Leek Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Minestrone</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Spring Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Bean Soups</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Bouneschlupp</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Jókai Bean Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Kwati Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Senate bean</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Bread Soups</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Tomato Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Manchow Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Sweet Corn Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Shorba Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Chinese Soups</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Hot & Sour</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Noodle Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Corn Crab Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Sago Soup</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                        </ul>
                                                        <!--level0-->
                                                    </div>
                                                    <!--nav-block nav-block-center-->
                                                    <div class="nav-add">
                                                        <div class="push_item">
                                                            <div class="push_img"><a href="#"><img
                                                                            src="images/menu-img.png" alt="menu item 1"></a>
                                                            </div>

                                                        </div>
                                                        <div class="push_item">
                                                            <div class="push_img"><a href="#"><img
                                                                            src="images/menu-img.png" alt="menu item 2"></a>
                                                            </div>

                                                        </div>
                                                        <div class="push_item">
                                                            <div class="push_img"><a href="#"><img
                                                                            src="images/menu-img.png" alt="menu item 3"></a>
                                                            </div>

                                                        </div>
                                                        <div class="push_item push_item_last">
                                                            <div class="push_img"><a href="#"><img
                                                                            src="images/menu-img.png" alt="menu item 4"></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--level0-wrapper2-->
                                            </div>
                                            <!--container-->
                                        </div>
                                        <!--level0-wrapper dropdown-6col-->
                                        <!--mega menu-->
                                    </li>
                                    <li class="mega-menu"><a class="level-top"
                                                             href="grid.html"><span>Fast Food</span></a>
                                        <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                                            <div class="container">
                                                <div class="level0-wrapper2">
                                                    <div class="nav-block nav-block-center">
                                                        <!--mega menu-->

                                                        <ul class="level0">
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Indian</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Aloo Chaat</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Batata Vada</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Kachori</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Panipuri</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Pizza</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Greek Pizza</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Pizza Rolls</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Grilled Pizza</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Pizza Strips</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>McDonald's</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Kiwiburger</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Happy Meal</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>McMuffin</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>McGriddles</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Wendy's Foods</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Bacon Deluxe</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Baconator</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Frescata</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Frosty</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Burger King</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Big King</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>TenderCrisp</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Whopper</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Kuro Burger</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                            <li class="level3 nav-6-1 parent item"><a
                                                                        href="grid.html"><span>Sandwiches</span></a>
                                                                <!--sub sub category-->
                                                                <ul class="level1">
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Hamburgers</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span> Hot Dogs‎</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>American Sandwiches</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                    <li class="level2 nav-6-1-1"><a
                                                                                href="grid.html"><span>Chilean Sandwiches</span></a>
                                                                    </li>
                                                                    <!--level2 nav-6-1-1-->
                                                                </ul>
                                                                <!--level1-->
                                                                <!--sub sub category-->
                                                            </li>
                                                            <!--level3 nav-6-1 parent item-->
                                                        </ul>
                                                        <!--level0-->
                                                    </div>
                                                    <!--nav-block nav-block-center-->
                                                </div>
                                                <!--level0-wrapper2-->
                                            </div>
                                            <!--container-->
                                        </div>
                                        <!--level0-wrapper dropdown-6col-->
                                        <!--mega menu-->
                                    </li>
                                    <li class="mega-menu"><a class="level-top" href="grid.html"><span>Sandwiches‎</span></a>
                                    </li>
                                    <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                                        <!--sub sub category-->
                                        <ul class="level1">
                                            <li class="level1 first"><a href="grid.html"><span>Product Grid</span></a>
                                            </li>
                                            <li class="level1 nav-10-2"><a href="list.html"> <span>Product List</span>
                                                </a></li>
                                            <li class="level1 nav-10-3"><a href="product-detail.html"> <span>Product Detail</span>
                                                </a></li>
                                            <li class="level1 nav-10-4"><a href="shopping-cart.html">
                                                    <span>Cart Page</span> </a></li>
                                            <li class="level1 first parent"><a
                                                        href="checkout.html"><span>Checkout</span></a>
                                                <!--sub sub category-->
                                                <ul class="level2 right-sub">
                                                    <li class="level2 nav-2-1-1 first"><a
                                                                href="checkout-method.html"><span>Method</span></a></li>
                                                    <li class="level2 nav-2-1-5 last"><a
                                                                href="checkout-billing-info.html"><span>Billing Info</span></a>
                                                    </li>
                                                </ul>
                                                <!--sub sub category-->
                                            </li>
                                            <li class="level1 nav-10-4"><a href="wishlist.html"> <span>Wishlist</span>
                                                </a></li>
                                            <li class="level1"><a href="dashboard.html"> <span>Dashboard</span> </a>
                                            </li>
                                            <li class="level1"><a href="multiple-addresses.html"> <span>Multiple Addresses</span>
                                                </a></li>
                                            <li class="level1"><a href="about-us.html"> <span>About us</span> </a></li>
                                            <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                                                <!--sub sub category-->
                                                <ul class="level2 right-sub">
                                                    <li class="level2 nav-2-1-1 first"><a href="blog-detail.html"><span>Blog Detail</span></a>
                                                    </li>
                                                </ul>
                                                <!--sub sub category-->
                                            </li>

                                            <li class="level1"><a href="contact-us.html"><span>Contact us</span></a>
                                            </li>
                                            <li class="level1"><a href="404error.html"><span>404 Error Page</span></a>
                                            </li>
                                            <li class="level1"><a href="{{url('login')}}"><span>Login Page</span></a>
                                            </li>
                                            <li class="level1"><a href="quickview.html"><span>Quick View</span></a></li>
                                            <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="fl-custom-tabmenulink mega-menu"><a href="#" class="level-top"> <span>Custom</span>
                                        </a>
                                        <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                                            <div class="container">
                                                <div class="header-nav-dropdown-wrapper clearer">
                                                    <div class="grid12-3">

                                                        <div><img src="images/custom-block.png" alt="custom-image">
                                                        </div>
                                                        <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    </div>
                                                    <div class="grid12-3">

                                                        <div><img src="images/custom-block.png" alt="custom-image">
                                                        </div>
                                                        <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                        <p>Sed et quam lacus. Fusce condimentum eleifend enim a
                                                            feugiat.</p>
                                                    </div>
                                                    <div class="grid12-3">
                                                        <div><img src="images/custom-block.png" alt="custom-image">
                                                        </div>
                                                        <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                        <p>Sed et quam lacus. Fusce condimentum eleifend enim a
                                                            feugiat.</p>
                                                    </div>
                                                    <div class="grid12-3">
                                                        <div><img src="images/custom-block.png" alt="custom-image">
                                                        </div>
                                                        <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!--nav-->
                            </div>
                        </nav>
                    </div>


                    <!--row-->


                    <div class="fl-header-right">
                        <div class="fl-links">
                            <div class="no-js"><a title="Company" class="clicker"></a>
                                <div class="fl-nav-links">
                                    <div class="language-currency">
                                        <div class="fl-language">
                                            <ul class="lang">
                                                <li><a href="#"> <img src="images/english.png" alt="English"> <span>English</span>
                                                    </a></li>
                                                <li><a href="#"> <img src="images/francais.png" alt="French"> <span>French</span>
                                                    </a></li>
                                                <li><a href="#"> <img src="images/german.png" alt="German">
                                                        <span>German</span> </a></li>
                                            </ul>
                                        </div>
                                        <!--fl-language-->
                                        <!-- END For version 1,2,3,4,6 -->
                                        <!-- For version 1,2,3,4,6 -->
                                        <div class="fl-currency">
                                            <ul class="currencies_list">
                                                <li><a href="#" title="EGP"> £</a></li>
                                                <li><a href="#" title="EUR"> €</a></li>
                                                <li><a href="#" title="USD"> $</a></li>
                                            </ul>
                                        </div>
                                        <!--fl-currency-->
                                        <!-- END For version 1,2,3,4,6 -->
                                    </div>
                                    <ul class="links">
                                        <li><a href="dashboard.html" title="My Account">My Account</a></li>
                                        <li><a href="{{url('/wishlist')}}" title="Wishlist">Wishlist</a></li>
                                        <li><a href="checkout.html" title="Checkout">Checkout</a></li>
                                        <li><a href="blog.html" title="Blog"><span>Blog</span></a></li>
                                        <li class="last"><a href="{{url('login')}}" title="Login"><span>Login</span></a>
                                        </li>
                                        <li class="last"><a href="{{url('register')}}"
                                                            title="Login"><span>Register</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fl-cart-contain">
                            <div class="mini-cart">
                                <div class="basket"><a href="shopping-cart.html"><span> 2 </span></a></div>
                                <div class="fl-mini-cart-content" style="display: none;">
                                    <div class="block-subtitle">
                                        <div class="top-subtotal">2 items, <span class="price">$259.99</span></div>
                                        <!--top-subtotal-->
                                        <!--pull-right-->
                                    </div>
                                    <!--block-subtitle-->
                                    <ul class="mini-products-list" id="cart-sidebar">
                                        <li class="item first">
                                            <div class="item-inner"><a class="product-image"
                                                                       title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White"
                                                                       href="#l"><img
                                                            alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White"
                                                            src="products-images/product-img.jpg"></a>
                                                <div class="product-details">
                                                    <div class="access"><a class="btn-remove1" title="Remove This Item"
                                                                           href="#">Remove</a> <a class="btn-edit"
                                                                                                  title="Edit item"
                                                                                                  href="#"><i
                                                                    class="icon-pencil"></i><span class="hidden">Edit item</span></a>
                                                    </div>
                                                    <!--access-->
                                                    <strong>1</strong> x <span class="price">$179.99</span>
                                                    <p class="product-name"><a href="product-detail.html">timi &amp;
                                                            leslie Sophia Diaper Bag...</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item last">
                                            <div class="item-inner"><a class="product-image"
                                                                       title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron"
                                                                       href="#"><img
                                                            alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron"
                                                            src="products-images/product-img.jpg"></a>
                                                <div class="product-details">
                                                    <div class="access"><a class="btn-remove1" title="Remove This Item"
                                                                           href="#">Remove</a> <a class="btn-edit"
                                                                                                  title="Edit item"
                                                                                                  href="#"><i
                                                                    class="icon-pencil"></i><span class="hidden">Edit item</span></a>
                                                    </div>
                                                    <!--access-->
                                                    <strong>1</strong> x <span class="price">$80.00</span>
                                                    <p class="product-name"><a href="product-detail.html">JP Lizzy
                                                            Satchel Designer Diaper Ba...</a></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="actions">
                                        <button class="btn-checkout" title="Checkout" type="button"
                                                onClick="window.location=checkout.html"><span>Checkout</span></button>
                                    </div>
                                    <!--actions-->
                                </div>
                                <!--fl-mini-cart-content-->
                            </div>
                        </div>
                        <!--mini-cart-->
                        <div class="collapse navbar-collapse">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                  <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span
                                  class="sr-only">Search</span> </span> </button>
                  </span></div>
                            </form>
                        </div>
                        <!--links-->
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--container-->


@yield('content')


<!-- For version 1,2,3,4,6 -->

    <footer>
        <!-- BEGIN INFORMATIVE FOOTER -->
        <div class="footer-inner">
            <div class="newsletter-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col">
                            <!-- Footer Payment Link -->
                            <div class="payment-accept">
                                <div><img src="{{url('/public/gomla/')}}/images/payment-1.png" alt="payment1"> <img
                                            src="{{url('/public/gomla/')}}/images/payment-2.png" alt="payment2"> <img
                                            src="{{url('/public/gomla/')}}/images/payment-3.png" alt="payment3"> <img
                                            src="{{url('/public/gomla/')}}/images/payment-4.png" alt="payment4"></div>
                            </div>
                        </div>
                        <!-- Footer Newsletter -->
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col1">
                            <div class="newsletter-wrap">
                                <h4>Sign up for emails</h4>
                                <form action="#" method="post" id="newsletter-validate-detail1">
                                    <div id="container_form_news">
                                        <div id="container_form_news2">
                                            <input type="text" name="email" id="newsletter1"
                                                   title="Sign up for our newsletter"
                                                   class="input-text required-entry validate-email"
                                                   placeholder="Enter your email address">
                                            <button type="submit" title="Subscribe" class="button subscribe">
                                                <span>Subscribe</span>
                                            </button>
                                        </div>
                                        <!--container_form_news2-->
                                    </div>
                                    <!--container_form_news-->
                                </form>

                            </div>
                            <!--newsletter-wrap-->
                        </div>

                    </div>
                </div>
                <!--footer-column-last-->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-lg-4">
                        <div class="co-info">
                            <div><a href="index.html"><img src="{{url('/public/gomla/')}}/images/logo.png"
                                                           alt="footer logo"></a></div>
                            <address>
                                <div><em class="icon-location-arrow"></em>
                                    <span>ABC Town Luton Street, New York 226688</span></div>
                                <div><em class="icon-mobile-phone"></em><span> + 0800 567 345</span></div>
                                <div><em class="icon-envelope"></em><span>abc@example.com</span></div>
                            </address>
                            <div class="social">
                                <ul class="link">
                                    <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                title="Facebook"></a></li>
                                    <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                title="Twitter"></a></li>
                                    <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                        title="GooglePlus"></a></li>
                                    <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                 title="RSS"></a></li>
                                    <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                      title="PInterest"></a></li>
                                    <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                      title="Linkedin"></a></li>
                                    <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                     title="Youtube"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8 col-xs-12 col-lg-8">
                        <div class="footer-column">
                            <h4>Quick Links</h4>
                            <ul class="links">
                                <li class="first"><a title="How to buy" href="/blog/">Blog</a></li>
                                <li><a title="FAQs" href="#">FAQs</a></li>
                                <li><a title="Payment" href="#">Payment</a></li>
                                <li><a title="Shipment" href="#">Shipment</a></li>
                                <li><a title="Where is my order?" href="#">Where is my order?</a></li>
                                <li class="last"><a title="Return policy" href="#">Return policy</a></li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <h4>Style Advisor</h4>
                            <ul class="links">
                                <li class="first"><a title="Your Account" href="#">Your Account</a></li>
                                <li><a title="Information" href="#">Information</a></li>
                                <li><a title="Addresses" href="#">Addresses</a></li>
                                <li><a title="Addresses" href="#">Discount</a></li>
                                <li><a title="Orders History" href="#">Orders History</a></li>
                                <li class="last"><a title=" Additional Information" href="#"> Additional Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <h4>Information</h4>
                            <ul class="links">
                                <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                                <li><a title="Search Terms" href="#">Search Terms</a></li>
                                <li><a title="Advanced Search" href="#">Advanced Search</a></li>
                                <li><a title="History" href="#">About Us</a></li>
                                <li><a title="History" href="#">Contact Us</a></li>
                                <li><a title="Suppliers" href="#">Suppliers</a></li>
                            </ul>
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
                    <div class="col-sm-12 col-xs-12 coppyright">© 2017 Organ. All Rights Reserved.</div>

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
            <div class="home"><a href="#"><i class="icon-home"></i>Home</a></div>
        </li>
        <li><a href="#">Pages</a>
            <ul>
                <li><a href="grid.html">Grid</a></li>
                <li><a href="list.html">List</a></li>
                <li><a href="product-detail.html">Product Detail</a></li>
                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout</a>
                    <ul>
                        <li><a href="checkout-method.html">Checkout Method</a></li>
                        <li><a href="checkout-billing-info.html">Checkout Billing Info</a></li>
                    </ul>
                </li>
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="multiple-addresses.html">Multiple Addresses</a></li>
                <li><a href="about-us.html">About us</a></li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.html">Contact us</a></li>
                <li><a href="404error.html">404 Error Page</a></li>
            </ul>
        </li>


        <li><a href="#">salades</a>
            <ul>

                <li><a href="grid.html"><span>Bread Salads‎</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Cappon Magro</span></a></li>
                        <li><a href="grid.html"><span>Dakos</span></a></li>
                        <li><a href="grid.html"><span>Fattoush</span></a></li>
                        <li><a href="grid.html"><span>Panzanella</span></a></li>
                    </ul>
                </li>

                <li><a href="grid.html"><span>Fruit Salads‎</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Candle Salad</span></a></li>
                        <li><a href="grid.html"><span>Frogeye Salad</span></a></li>
                        <li><a href="grid.html"><span>Green Papaya Salad</span></a></li>
                        <li><a href="grid.html"><span>Waldorf salad</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Salad Dressings</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Louis Dressings</span></a></li>
                        <li><a href="grid.html"><span>French Dressings</span></a></li>
                        <li><a href="grid.html"><span>Gingner Dressings</span></a></li>
                        <li><a href="grid.html"><span>Italian Dressings</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Leaf Vegetable</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Fenugreek</span></a></li>
                        <li><a href="grid.html"><span>Spinach</span></a></li>
                        <li><a href="grid.html"><span>Malva</span></a></li>
                        <li><a href="grid.html"><span>Cabbage</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><a href="grid.html">Soups</a>
            <ul>
                <li><a href="grid.html"><span>Cold Soups</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Red Bean Soup</span></a></li>
                        <li><a href="grid.html"><span>Fruit Soup</span></a></li>
                        <li><a href="grid.html"><span>Naengguk</span></a></li>
                        <li><a href="grid.html"><span>Borscht</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Cream Soups</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Chowder</span></a></li>
                        <li><a href="grid.html"><span>Asparagus Soup</span></a></li>
                        <li><a href="grid.html"><span>Broccoli Soup</span></a></li>
                        <li><a href="grid.html"><span>Mushroom Soup</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Vegitable Soups</span></a>
                    <ul>
                        <li><a href="grid.html"><span>French Onion Soup</span></a></li>
                        <li><a href="grid.html"><span>Leek Soup</span></a></li>
                        <li><a href="grid.html"><span>Minestrone</span></a></li>
                        <li><a href="grid.html"><span>Spring Soup</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Bean Soups</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Bouneschlupp</span></a></li>
                        <li><a href="grid.html"><span>Jókai Bean Soup</span></a></li>
                        <li><a href="grid.html"><span>Kwati Soup</span></a></li>
                        <li><a href="grid.html"><span>Senate bean</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Bread Soups</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Tomato Soup</span></a></li>
                        <li><a href="grid.html"><span>Manchow Soup</span></a></li>
                        <li><a href="grid.html"><span>Sweet Corn Soup</span></a></li>
                        <li><a href="grid.html"><span>Shorba Soup</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Chinese Soups</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Hot & Sour</span></a></li>
                        <li><a href="grid.html"><span>Noodle Soup</span></a></li>
                        <li><a href="grid.html"><span>Corn Crab Soup</span></a></li>
                        <li><a href="grid.html"><span>Sago Soup</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Fast Food</a>
            <ul>
                <li><a href="grid.html"><span>Indian</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Aloo Chaat</span></a></li>
                        <li><a href="grid.html"><span>Batata Vada</span></a></li>
                        <li><a href="grid.html"><span>Kachori</span></a></li>
                        <li><a href="grid.html"><span>Panipuri</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Pizza</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Greek Pizza</span></a></li>
                        <li><a href="grid.html"><span>Pizza Rolls</span></a></li>
                        <li><a href="grid.html"><span>Grilled Pizza</span></a></li>
                        <li><a href="grid.html"><span>Pizza Strips</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>McDonald's</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Kiwiburger</span></a></li>
                        <li><a href="grid.html"><span>Happy Meal</span></a></li>
                        <li><a href="grid.html"><span>McMuffin</span></a></li>
                        <li><a href="grid.html"><span>McGriddles</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Wendy's Foods</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Bacon Deluxe</span></a></li>
                        <li><a href="grid.html"><span>Baconator</span></a></li>
                        <li><a href="grid.html"><span>Frescata</span></a></li>
                        <li><a href="grid.html"><span>Frosty</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Burger King</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Big King</span></a></li>
                        <li><a href="grid.html"><span>TenderCrisp</span></a></li>
                        <li><a href="grid.html"><span>Whopper</span></a></li>
                        <li><a href="grid.html"><span>Kuro Burger</span></a></li>
                    </ul>
                </li>
                <li><a href="grid.html"><span>Sandwiches</span></a>
                    <ul>
                        <li><a href="grid.html"><span>Hamburgers</span></a></li>
                        <li><a href="grid.html"><span> Hot Dogs‎</span></a></li>
                        <li><a href="grid.html"><span>American Sandwiches</span></a></li>
                        <li><a href="grid.html"><span>Chilean Sandwiches</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Sandwiches‎</a></li>
        <li><a href="contact-us.html">Contact Us</a></li>
    </ul>
</div>


<!-- JavaScript -->
<script type="text/javascript" src="{{url('/public/gomla/')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{url('/public/gomla/')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('/public/gomla/')}}/js/parallax.js"></script>
<script type="text/javascript" src="{{url('/public/gomla/')}}/js/revslider.js"></script>
<script type="text/javascript" src="{{url('/public/gomla/')}}/js/common.js"></script>
<script type="text/javascript" src="{{url('/public/gomla/')}}/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="{{url('/public/gomla/')}}/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{url('/public/gomla/')}}/js/jquery.mobile-menu.min.js"></script>

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
</script>
<script type="text/javascript">
    function HideMe() {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script>


</body>
</html>

