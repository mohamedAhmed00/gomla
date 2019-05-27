@include('layouts.head')

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
@include('layouts.header')

@include('layouts.nav')

    <div class="breadcrumbs-section plr-200 mb-80">
        <div class="breadcrumbs overlay-bg" style="background: #f6f6f6 url('http://localhost:8000/gomla/images/coverphoto.jpg') no-repeat scroll center center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title" style="color:#000"> {{$product['name']  }}</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="{{ url('/') }}" style="color:#000">الرئيسيه</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="page-content" class="page-wrapper">

        <!-- SHOP SECTION START -->
        <div class="shop-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-xs-12">
                        <!-- single-product-area start -->
                        <div class="single-product-area mb-80">
                            <div class="row">
                                <!-- imgs-zoom-area start -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="imgs-zoom-area">
                                        <img id="zoom_03" src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product['image']}}" data-zoom-image="img/product/6.jpg" alt="">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30 slick-initialized slick-slider"><button type="button" class="arrow-prev slick-arrow" style=""><i class="zmdi zmdi-long-arrow-left"></i></button>
                                                    <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 966px; transform: translate3d(-276px, 0px, 0px);" role="listbox"><div class="p-c slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 69px;" tabindex="-1">
                                                                <a href="#" data-image="img/product/4.jpg" data-zoom-image="img/product/4.jpg" tabindex="-1">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/4.jpg') }}" alt="">
                                                                </a>
                                                            </div><div class="p-c slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 69px;" tabindex="-1">
                                                                <a href="#" data-image="img/product/5.jpg" data-zoom-image="img/product/5.jpg" tabindex="-1">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/5.jpg') }}" alt="">
                                                                </a>
                                                            </div><div class="p-c slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 69px;" tabindex="-1" role="option" aria-describedby="slick-slide13">
                                                                <a href="#" data-image="img/product/5.jpg" data-zoom-image="img/product/5.jpg" tabindex="0">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/5.jpg') }}" alt="">
                                                                </a>
                                                            </div><div class="p-c slick-slide" data-slick-index="4" aria-hidden="true" style="width: 69px;" tabindex="-1" role="option" aria-describedby="slick-slide14">
                                                                <a href="#" data-image="img/product/6.jpg" data-zoom-image="img/product/6.jpg" tabindex="-1">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/6.jpg') }}" alt="">
                                                                </a>
                                                            </div><div class="p-c slick-slide" data-slick-index="5" aria-hidden="true" style="width: 69px;" tabindex="-1" role="option" aria-describedby="slick-slide15">
                                                                <a href="#" data-image="img/product/7.jpg" data-zoom-image="img/product/7.jpg" tabindex="-1">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/7.jpg') }}" alt="">
                                                                </a>
                                                            </div><div class="p-c slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 69px;" tabindex="-1">
                                                                <a href="#" data-image="img/product/2.jpg" data-zoom-image="img/product/2.jpg" tabindex="-1">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/2.jpg') }}" alt="">
                                                                </a>
                                                            </div><div class="p-c slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 69px;" tabindex="-1">
                                                                <a href="#" data-image="img/product/3.jpg" data-zoom-image="img/product/3.jpg" tabindex="-1">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/3.jpg') }}" alt="">
                                                                </a>
                                                            </div><div class="p-c slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 69px;" tabindex="-1">
                                                                <a href="#" data-image="img/product/4.jpg" data-zoom-image="img/product/4.jpg" tabindex="-1">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/4.jpg') }}" alt="">
                                                                </a>
                                                            </div><div class="p-c slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 69px;" tabindex="-1">
                                                                <a href="#" data-image="img/product/5.jpg" data-zoom-image="img/product/5.jpg" tabindex="-1">
                                                                    <img class="zoom_03" src="{{ asset('gomla/img/product/5.jpg') }}" alt="">
                                                                </a>
                                                            </div></div></div>





                                                    <button type="button" class="arrow-next slick-arrow" style=""><i class="zmdi zmdi-long-arrow-right"></i></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- imgs-zoom-area end -->
                                <!-- single-product-info start -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="single-product-info">
                                        <h3 class="text-black-1">{{$product['name']}} </h3>
                                        <h6 class="brand-name-2">{{ $product['brand'] }}</h6>
                                        <!--  hr -->
                                        <hr>
                                        <!-- single-pro-color-rating -->
                                        <div class="single-pro-color-rating clearfix">
                                            <div class="sin-pro-color f-left">
                                                <p class="color-title f-left">Color</p>
                                                <div class="widget-color f-left">
                                                    <ul>
                                                        <li class="color-1"><a href="#"></a></li>
                                                        <li class="color-2"><a href="#"></a></li>
                                                        <li class="color-3"><a href="#"></a></li>
                                                        <li class="color-4"><a href="#"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pro-rating sin-pro-rating f-right">
                                                <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <span class="text-black-5">( 27 Rating )</span>
                                            </div>
                                        </div>
                                        <!-- hr -->
                                        <hr>
                                        <!-- plus-minus-pro-action -->
                                        <div class="plus-minus-pro-action clearfix">
                                            <div class="sin-plus-minus f-left clearfix">
                                                <p class="color-title f-left">Qty</p>
                                                <div class="cart-plus-minus f-left"><div class="dec qtybutton">-</div>
                                                    <input value="02" name="qtybutton" class="cart-plus-minus-box" type="text">
                                                    <div class="inc qtybutton">+</div></div>
                                            </div>
                                            <div class="sin-pro-action f-right">
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- plus-minus-pro-action end -->
                                        <!-- hr -->
                                        <hr>
                                        <!-- single-product-price -->
                                        <h3 class="pro-price">السعر {{$product['standard_rate']}} جنيه</h3>
                                        <!--  hr -->
                                        <hr>
                                        <h3 class="pro-price">الكميه {{$product['stock_qty']}} </h3>
                                        <!--  hr -->
                                        <hr>
                                        <div>
                                            <a href="#" class="button extra-small button-black" tabindex="-1">
                                                <span class="text-uppercase">Buy now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-info end -->
                            </div>
                            <!-- single-product-tab -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- hr -->
                                    <hr>
                                    <div class="single-product-tab">
                                        <ul class="reviews-tab mb-20">
                                            <li class="active"><a href="#description" data-toggle="tab">description</a></li>
                                            <li><a href="#information" data-toggle="tab">information</a></li>
                                            <li><a href="#reviews" data-toggle="tab">reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="description">
                                                <p>{{ $product['description'] }}</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="information">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis,  deleniti consectetur non ,aspernatur.</p>
                                                <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="reviews">
                                                <!-- reviews-tab-desc -->
                                                <div class="reviews-tab-desc">
                                                    <!-- single comments -->
                                                    <div class="media mt-30">
                                                        <div class="media-left">
                                                            <a href="#"><img class="media-object" src="img/author/1.jpg" alt="#"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="clearfix">
                                                                <div class="name-commenter pull-left">
                                                                    <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                                    <p class="mb-10">27 Jun, 2017 at 2:30pm</p>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <ul class="reply-delate">
                                                                        <li><a href="#">Reply</a></li>
                                                                        <li>/</li>
                                                                        <li><a href="#">Delate</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                        </div>
                                                    </div>
                                                    <!-- single comments -->
                                                    <div class="media mt-30">
                                                        <div class="media-left">
                                                            <a href="#"><img class="media-object" src="img/author/2.jpg" alt="#"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="clearfix">
                                                                <div class="name-commenter pull-left">
                                                                    <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                                    <p class="mb-10">27 Jun, 2017 at 2:30pm</p>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <ul class="reply-delate">
                                                                        <li><a href="#">Reply</a></li>
                                                                        <li>/</li>
                                                                        <li><a href="#">Delate</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  hr -->
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-area end -->
                        <div class="related-product-area">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-left mb-40">
                                        <h2 class="uppercase">related product</h2>
                                        <h6>There are many variations of passages of brands available,</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="active-related-product slick-initialized slick-slider">
                                    <!-- product-item start -->
                                    <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2930px; transform: translate3d(-879px, 0px, 0px);" role="listbox"><div class="col-xs-12 slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 293px;" tabindex="-1">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="-1">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="-1">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="-1"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="-1"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="-1"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="-1"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 293px;" tabindex="-1">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="-1">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="-1">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="-1"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="-1"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="-1"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="-1"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 293px;" tabindex="-1">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="-1">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="-1">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="-1"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="-1"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="-1"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="-1"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 293px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="0">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="0">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 293px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="0">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="0">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 293px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="0">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="0">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide" data-slick-index="3" aria-hidden="true" style="width: 293px;" tabindex="-1" role="option" aria-describedby="slick-slide03">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="-1">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="-1">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="-1"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="-1"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="-1"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="-1"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 293px;" tabindex="-1">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="-1">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="-1">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="-1"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="-1"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="-1"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="-1"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 293px;" tabindex="-1">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="-1">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="-1">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="-1"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="-1"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="-1"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="-1"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 293px;" tabindex="-1">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html" tabindex="-1">
                                                            <img src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="single-product.html" tabindex="-1">Product Name</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#" tabindex="-1"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">$ 869.00</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist" tabindex="-1"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="-1"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare" tabindex="-1"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart" tabindex="-1"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div></div></div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->

                                    <!-- product-item end -->
                                    <!-- product-item start -->

                                    <!-- product-item end -->
                                    <!-- product-item start -->

                                    <!-- product-item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <!-- widget-search -->
                        <aside class="widget-search mb-30">
                            <form action="#">
                                <input placeholder="Search here..." type="text">
                                <button type="submit"><i class="zmdi zmdi-search"></i></button>
                            </form>
                        </aside>
                        <!-- widget-categories -->
                        <aside class="widget widget-categories box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20">Categories</h6>
                            <div id="cat-treeview" class="product-cat">
                                <ul class="treeview">
                                    <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">Brand One</a>
                                        <ul class="treeview" style="display: none;">
                                            <li><a href="#">Mobile</a></li>
                                            <li><a href="#">Tab</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Head Phone</a></li>
                                            <li class="last"><a href="#">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class="open collapsable"><div class="hitarea open-hitarea collapsable-hitarea"></div><a href="#">Brand Two</a>
                                        <ul class="treeview">
                                            <li><a href="#" class="">Mobile</a></li>
                                            <li><a href="#" class="">Tab</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#" class="">Head Phone</a></li>
                                            <li class="last"><a href="#" class="">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">Accessories</a>
                                        <ul class="treeview" style="display: none;">
                                            <li><a href="#">Footwear</a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Watches</a></li>
                                            <li class="last"><a href="#">Utilities</a></li>
                                        </ul>
                                    </li>
                                    <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">Top Brands</a>
                                        <ul class="treeview" style="display: none;">
                                            <li><a href="#">Mobile</a></li>
                                            <li><a href="#">Tab</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Head Phone</a></li>
                                            <li class="last"><a href="#">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea"></div><a href="#">Jewelry</a>
                                        <ul class="treeview" style="display: none;">
                                            <li><a href="#">Footwear</a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Watches</a></li>
                                            <li class="last"><a href="#">Utilities</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <!-- operating-system -->
                        <aside class="widget operating-system box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20">operating system</h6>
                            <form action="action_page.php">
                                <label><input name="operating-1" value="phone-1" type="checkbox">Windows Phone</label><br>
                                <label><input name="operating-1" value="phone-1" type="checkbox">Bleckgerry ios</label><br>
                                <label><input name="operating-1" value="phone-1" type="checkbox">Android</label><br>
                                <label><input name="operating-1" value="phone-1" type="checkbox">ios</label><br>
                                <label><input name="operating-1" value="phone-1" type="checkbox">Windows Phone</label><br>
                                <label><input name="operating-1" value="phone-1" type="checkbox">Symban</label><br>
                                <label class="mb-0"><input name="operating-1" value="phone-1" type="checkbox">Bleckgerry os</label><br>
                            </form>
                        </aside>
                        <!-- widget-product -->
                        <aside class="widget widget-product box-shadow">
                            <h6 class="widget-title border-left mb-20">recent products</h6>
                            <!-- product-item start -->
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <h3 class="pro-price">$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <h3 class="pro-price">$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/12.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <h3 class="pro-price">$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </section>




@include('layouts.footer')
<!--style-customizer end -->
</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->
@include('layouts.endpage')