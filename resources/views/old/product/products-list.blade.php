@extends ('layouts.app')

@section('metatitle') جملة أونلاين @stop

@section('metadescription') دلوقتي تقدر تشتري كل المنتجات الغذائية الجافة من خلال تطبيق جملة.أونلاين
حمله دلوقتي و وفر فلوسك ومجهودك @stop

@section('metaimage'){{url('/public/gomla/images/logo.jpg')}}@stop


@section('content')

    <div class="page-heading">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home"><a href="index.html" title="Go to Home Page">Home</a> <span>—› </span></li>
                            <li class="category1599"><a href="grid.html" title="">Salad</a> <span>—› </span></li>
                            <li class="category1600"><a href="grid.html" title="">Bread Salad</a> <span>—› </span></li>
                            <li class="category1601"><strong>Dakos</strong></li>
                        </ul>
                    </div>
                    <!--col-xs-12-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <div class="page-title">
            <h2>PRODUCTS</h2>
        </div>
    </div>
    <!--breadcrumbs-->
    <!-- BEGIN Main Container col2-left -->
    <section class="main-container col2-left-layout bounceInUp animated">
        <!-- For version 1, 2, 3, 8 -->
        <!-- For version 1, 2, 3 -->
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-9 col-sm-push-3 product-grid">
                    <div class="pro-coloumn">
                        <article class="col-main">
                            <div class="toolbar">
                                <div class="sorter">
                                    <div class="view-mode"><span title="Grid" class="button button-active button-grid">&nbsp;</span><a
                                                href="list.html" title="List" class="button-list">&nbsp;</a></div>
                                </div>
                                <div id="sort-by">
                                    <label class="left">Sort By: </label>
                                    <ul>
                                        <li><a href="#">Position<span class="right-arrow"></span></a>
                                            <ul>
                                                <li><a href="#">Name</a></li>
                                                <li><a href="#">Price</a></li>
                                                <li><a href="#">Position</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <a class="button-asc left" href="#" title="Set Descending Direction"><span
                                                class="top_arrow"></span></a></div>
                                <div class="pager">
                                    <div id="limiter">
                                        <label>View: </label>
                                        <ul>
                                            <li><a href="#">15<span class="right-arrow"></span></a>
                                                <ul>
                                                    <li><a href="#">20</a></li>
                                                    <li><a href="#">30</a></li>
                                                    <li><a href="#">35</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pages">
                                        <label>Page:</label>
                                        <ul class="pagination">
                                            <li><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="category-products">
                                <ol class="products-list" id="products-list">


                                    @foreach($products as $product)
                                        <li class="item first">
                                            <div class="product-image"><a href="product-detail.html"
                                                                          title="HTC Rhyme Sense">
                                                    <img class="small-image"
                                                         src="http://163.172.104.238/goomla/storage/app/erpnext/{{$product['image']}}"
                                                         alt="{{$product['name']}}">
                                                </a></div>
                                            <div class="product-shop">
                                                <h2 class="product-name"><a href="product-detail.html"
                                                                            title="HTC Rhyme Sense">{{$product['name']}}</a>
                                                </h2>
                                                {{--<div class="ratings">--}}
                                                    {{--<div class="rating-box">--}}
                                                        {{--<div style="width:50%" class="rating"></div>--}}

                                                        {{--<p class="rating-links"><a--}}
                                                                    {{--href="#/review/product/list/id/167/category/35/">1--}}
                                                                {{--Review(s)</a>--}}
                                                            {{--<span class="separator">|</span> <a href="#review-form">Add--}}
                                                                {{--Your--}}
                                                                {{--Review</a></p>--}}
                                                    {{--</div>--}}
                                                    <div class="desc std">
                                                        <p>{{$product['description']}} </p>

                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price"><span class="price-label"></span> <span
                                                                    id="product-price-212"
                                                                    class="price">{{$product['standard_rate']}} </span></p>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                                type="button"><span>Add to Cart</span></button>
                                                        <span class="add-to-links"> <a title="Add to Wishlist"
                                                                                       class="button link-wishlist"
                                                                                       href="#"><span>Add to Wishlist</span></a> <a
                                                                    title="Add to Compare" class="button link-compare"
                                                                    href="#"><span>Add to Compare</span></a> </span>
                                                    </div>
                                                </div>
                                        </li>
                                    @endforeach


                                </ol>
                            </div>


                        </article>
                    </div>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
                    <!-- BEGIN SIDE-NAV-CATEGORY -->
                    <div class="side-nav-categories">
                        <div class="block-title"> Categories</div>
                        <!--block-title-->
                        <!-- BEGIN BOX-CATEGORY -->
                        <div class="box-content box-category">
                            <ul>

                                {{--start foreach categories--}}
                                <?php $categories = json_decode(file_get_contents('http://163.172.104.238/goomla/api/categories'), true);
                                foreach ($categories as $category) {
                                ?>
                                <?php if ($category['hasSubCategories'] == "true") { ?>

                                <li>
                                    <a class="active" href="{{url('products/'.$category['item_group_name'])}}">
                                        <?php echo $category['name']  ?>
                                    </a>
                                    <span class="subDropdown minus"></span>

                                    <ul class="level0_415" style="display:block">
                                        <!--level1-->
                                        <?php $sub_cats = json_decode(file_get_contents('http://163.172.104.238/goomla/api/categories/' . $category['id']), true);
                                        foreach ($sub_cats as $cat) {
                                        ?>
                                        <li>
                                            <a href="{{url('products/'.$cat['item_group_name'])}}"> <?php echo $cat['name']?> </a>
                                            <span
                                                    class="subDropdown plus"></span>
                                            <?php
                                            }
                                            ?>
                                        </li>
                                    </ul>

                                    <!--level0-->
                                </li>

                                <?php
                                }
                                ?>
                                <?php

                                }

                                ?>
                                {{--end foreach categories--}}

                            </ul>
                        </div>
                        <!--box-content box-category-->
                    </div>
                    <!--side-nav-categories-->

                    <div class="custom-slider">
                        <div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active"><img src="{{url('/public/gomla/')}}/images/blog-banner.png"
                                                                  alt="slide3">
                                        <div class="carousel-caption">
                                            <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <a class="link" href="#">Buy Now</a></div>
                                    </div>
                                    <div class="item"><img src="{{url('/public/gomla/')}}/images/blog-banner.png"
                                                           alt="slide1">
                                        <div class="carousel-caption">
                                            <h3><a title=" Sample Product" href="product-detail.html">Hot collection</a>
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="item"><img src="{{url('/public/gomla/')}}/images/blog-banner.png"
                                                           alt="slide2">
                                        <div class="carousel-caption">
                                            <h3><a title=" Sample Product" href="product-detail.html">Summer
                                                    collection</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="sr-only">Previous</span> </a> <a class="right carousel-control"
                                                                                  href="#carousel-example-generic"
                                                                                  data-slide="next"> <span
                                            class="sr-only">Next</span> </a></div>
                        </div>
                    </div>

                    <div style="height: 50px" class="custom-slider">
                        <div>
                        </div>
                    </div>


                    <div class="hot-banner"><img src="{{url('/public/gomla/')}}/images/hot-trends-banner.png"
                                                 alt="banner"></div>
                </aside>
                <!--col-right sidebar-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </section>
    <!--main-container col2-left-layout-->

    <div class="our-features-box wow bounceInUp animated animated">
        <div class="container">
            <ul>
                <li>
                    <div class="feature-box free-shipping">
                        <div class="icon-truck"></div>
                        <div class="content">FREE SHIPPING on order over $99</div>
                    </div>
                </li>
                <li>
                    <div class="feature-box need-help">
                        <div class="icon-support"></div>
                        <div class="content">Need Help +1 800 123 1234</div>
                    </div>
                </li>
                <li>
                    <div class="feature-box money-back">
                        <div class="icon-money"></div>
                        <div class="content">Money Back Guarantee</div>
                    </div>
                </li>
                <li class="last">
                    <div class="feature-box return-policy">
                        <div class="icon-return"></div>
                        <div class="content">30 days return Service</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


@endsection