@include('layouts.head')
<?php
if(session('message'))
{
    ?>
<script>
    alert("{{session('message')}}");
</script>
<?php
}
?>


<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
    @include('layouts.header')

    @include('layouts.nav')
    <div class="slider-area slider-2">
        <div class="bend niceties preview-2">
            <div id="nivoslider-2" class="slides">
                <img src="{{asset('gomla/images/Slide-image1.2.jpg')}}" alt="" title="#slider-direction-1"/>
                <img src="{{asset('gomla/images/Slide-image2.jpg') }}" alt="" title="#slider-direction-2"/>
            </div>
            <!-- ===== direction 1 ===== -->
            <div id="slider-direction-1" class="slider-direction">
                <div class="slider-content-1">
                    <div class="title-container">
                        <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h6 class="slider2-title-1">ارخص الاسعار في مصر</h6>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2">جملة اونلاين</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <h2 class="slider2-title-3">والتوصيل للمنزل</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <p class="slider2-title-4"> من الاندرويد او الايفون</p>
                        </div>
                        <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                            <a href="#" class="button extra-small button-black">
                                <span class="text-uppercase">تسوق الان</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- layer 1 -->
                <div class="slider-content-1-image">
                    <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="layer-1-1">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== direction 2 ===== -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-content-1">
                    <div class="title-container">
                        <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h6 class="slider2-title-1">ارخص الاسعار في مصر</h6>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2">جملة اونلاين</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <h2 class="slider2-title-3">والتوصيل للمنزل</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <p class="slider2-title-4"> من الاندرويد او الايفون</p>
                        </div>
                        <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                            <a href="#" class="button extra-small button-black">
                                <span class="text-uppercase">تسوق الان</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- layer 1 -->
                <div class="slider-content-1-image">
                    <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="layer-1-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     {{--dd( Session::get('brand') ) --}}
    <script src="{{ asset('gomla/js/vendor/jquery-3.1.1.min.js') }}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{ asset('gomla/js/bootstrap.min.js') }}"></script>
    <section id="page-content" style="background: #f6f6f6;" class="page-wrapper">
        <div class="featured-product-section section-bg-tb pt-80 pb-55" style="padding-top: 40px;padding-bottom: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-20">
                            <h2 class="uppercase"><a href="{{ url('products/890') }}">حيوانات اليفة</a></h2>
                        </div>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="row active-featured-product slick-arrow-2">
                        <!-- product-item start -->
                        @foreach($schoolProduct as $product)
                        @php 
                        $data = '<button onclick=addToCart2("'.$product->id.'","1") class="btn btn-danger">اضافة للسلة</button><button title="Add to cart" style="margin-left:15px;color:#fff;background:#ff7f00" id="plus1'.$product->id.'"><i class="zmdi zmdi-plus"></i></button><input id="qty1'.$product->id.'" type="text" style="border: solid 1px #ccc;width:30px;height: 30px;padding: 0;text-align: center" value="1"><button title="Add to cart" style="color:#fff;background:#ff7f00" id="minus1'.$product->id.'"><i class="zmdi zmdi-minus"></i></button>';
                        $data .='<script>$("#minus1'.$product->id.'").on("click",function(){let x = $("#qty1'. $product->id .'").val();--x;if(x > 0){$("#qty1'. $product->id .'").val(x);}});$("#plus1'.$product->id.'").click(function(){let x = $("#qty1'. $product->id .'").val();++x;$("#qty1'. $product->id .'").val(x);});</script>';
                    @endphp
                            @if($product->stock_qty != 0)

                            <?php $button = '<button class="single_add_to_cart_button" onclick=addItemToCart("'. $product->id . '") type="submit">Add to cart</button>'; ?>
                            <div class="col-xs-12">
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a style="cursor: pointer" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')">
                                            @if(isset($product->image))
                                                <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                     alt=""/>
                                            @else
                                                <img src="{{asset('gomla/images/404.png')}}"
                                                    style="height: 260px"  alt="{{$product->name}}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{url('product/'.$product->id)}}">{{ $product->name }}</a>
                                        </h6>
                                        <h6 class="brand-name">{{ $product->brand }}</h6>
                                        <h3 class="pro-price"> {{number_format ($product->standard_rate , 2, '.', ',')}}
                                            جنيه</h3>
                                    </div>


                                    <ul class="action-button">
                                        @if(intval($product->stock_qty) < 1)
                                            <li>
                                                <button title="Wishlist" onclick="wishlist( '{{$product->id}}' , '{{ $product->name  }}' )" id="addtofav1{{$product->id}}"><i class="zmdi zmdi-favorite"></i></button>
                                            </li>
                                            <li>
                                                <a  title="Quickview"><i class="zmdi zmdi-zoom-in" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')"></i></a>
                                            </li>
                                            <li>
                                                Out of the stock
                                            </li>

                                        @else

                                            <li>
                                                <button title="Wishlist" onclick="wishlist( '{{$product->id}}' , '{{ $product->name  }}' )" id="addtofav1{{$product->id}}"><i class="zmdi zmdi-favorite"></i></button>
                                            </li>
                                            <li>
                                            <a  title="Quickview"><i class="zmdi zmdi-zoom-in" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')"></i></a>
                                            </li>
                                            <li>
                                                <button title="Add to cart" onclick="addToCart('{{$product->id}}','1')" id="hpaddtocart1{{$product->id}}"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
                                            </li>
                                            <li>
                                                <button title="Add to cart" id="plus{{$product->id}}"><i class="zmdi zmdi-plus"></i></button>
                                            </li>
                                            <li>
                                                <input id="qty{{$product->id}}" type="text" style="width:30px;height: 30px;padding: 0;text-align: center" value="1">
                                            </li>
                                            <li>
                                                <button title="Add to cart" id="minus{{$product->id}}"><i class="zmdi zmdi-minus"></i></button>
                                            </li>
                                        @endif
                                    </ul>
                                    <script>

                                        $("#minus{{$product->id}}").click(function(){
                                            let x = $("#qty{{ $product->id }}").val();
                                            --x;
                                            if(x > 0)
                                            {
                                                $("#qty{{ $product->id }}").val(x);
                                            }
                                        });
                                        $("#plus{{$product->id}}").click(function(){
                                            let x = $("#qty{{ $product->id }}").val();
                                            ++x;
                                            $("#qty{{ $product->id }}").val(x)

                                        });
                                    </script>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-product-section section-bg-tb pt-80 pb-55" style="padding-top: 20px;padding-bottom: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-20">
                            <h2 class="uppercase">ADS</h2>
                        </div>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="row active-featured-product slick-arrow-2">
                        <!-- product-item start -->
                        <div class="col-xs-12">
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a>
                                            <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-product-section section-bg-tb pt-80 pb-55" style="padding-top: 20px;padding-bottom: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-20">
                            <h2 class="uppercase"><a href="{{ url('products/846') }}">حلويات و مقرمشات</a></h2>
                        </div>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="row active-featured-product slick-arrow-2">
                        <!-- product-item start -->
                        @foreach($specialProduct as $product)
                        @php
                            $data = '<button onclick=addToCart2("'.$product->id.'","1") class="btn btn-danger">اضافة للسلة</button><button title="Add to cart" style="margin-left:15px;color:#fff;background:#ff7f00" id="plus1'.$product->id.'"><i class="zmdi zmdi-plus"></i></button><input id="qty1'.$product->id.'" type="text" style="border: solid 1px #ccc;width:30px;height: 30px;padding: 0;text-align: center" value="1"><button title="Add to cart" style="color:#fff;background:#ff7f00" id="minus1'.$product->id.'"><i class="zmdi zmdi-minus"></i></button>';
                            $data .='<script>$("#minus1'.$product->id.'").on("click",function(){let x = $("#qty1'. $product->id .'").val();--x;if(x > 0){$("#qty1'. $product->id .'").val(x);}});$("#plus1'.$product->id.'").click(function(){let x = $("#qty1'. $product->id .'").val();++x;$("#qty1'. $product->id .'").val(x);});</script>';
                    @endphp
                            @if($product->stock_qty != 0)

                            <?php $button = '<button class="single_add_to_cart_button" onclick=addItemToCart("'. $product->id . '") type="submit">Add to cart</button>'; ?>
                                <div class="col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a style="cursor: pointer" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')">
                                                @if(isset($product->image))
                                                    <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                         alt=""/>
                                                @else
                                                    <img src="{{asset('gomla/images/404.png')}}"
                                                         style="height: 260px"  alt="{{$product->name}}">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="{{url('product/'.$product->id)}}">{{ $product->name }}</a>
                                            </h6>
                                            <h6 class="brand-name">{{ $product->brand }}</h6>
                                            <h3 class="pro-price"> {{number_format ($product->standard_rate , 2, '.', ',')}}
                                                جنيه</h3>
                                        </div>


                                        <ul class="action-button">
                                            @if(intval($product->stock_qty) < 1)
                                                <li>
                                                    <button title="Wishlist" onclick="wishlist( '{{$product->id}}' , '{{ $product->name  }}' )" id="addtofav1{{$product->id}}"><i class="zmdi zmdi-favorite"></i></button>
                                                </li>
                                                <li>
                                                    <a  title="Quickview"><i class="zmdi zmdi-zoom-in" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')"></i></a>
                                                </li>
                                                <li>
                                                    Out of the stock
                                                </li>

                                            @else

                                                <li>
                                                    <button title="Wishlist" onclick="wishlist( '{{$product->id}}' , '{{ $product->name  }}' )" id="addtofav1{{$product->id}}"><i class="zmdi zmdi-favorite"></i></button>
                                                </li>
                                                <li>
                                                    <a  title="Quickview"><i class="zmdi zmdi-zoom-in" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')"></i></a>
                                                </li>
                                                <li>
                                                    <button title="Add to cart" onclick="addToCart('{{$product->id}}','1')" id="hpaddtocart1{{$product->id}}"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
                                                </li>
                                                <li>
                                                    <button title="Add to cart" id="plus{{$product->id}}"><i class="zmdi zmdi-plus"></i></button>
                                                </li>
                                                <li>
                                                    <input id="qty{{$product->id}}" type="text" style="width:30px;height: 30px;padding: 0;text-align: center" value="1">
                                                </li>
                                                <li>
                                                    <button title="Add to cart" id="minus{{$product->id}}"><i class="zmdi zmdi-minus"></i></button>
                                                </li>
                                            @endif
                                        </ul>
                                        <script>

                                            $("#minus{{$product->id}}").click(function(){
                                                let x = $("#qty{{ $product->id }}").val();
                                                --x;
                                                if(x > 0)
                                                {
                                                    $("#qty{{ $product->id }}").val(x);
                                                }
                                            });
                                            $("#plus{{$product->id}}").click(function(){
                                                let x = $("#qty{{ $product->id }}").val();
                                                ++x;
                                                $("#qty{{ $product->id }}").val(x)

                                            });
                                        </script>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-product-section section-bg-tb pt-80 pb-55" style="padding-top: 20px;padding-bottom: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-20">
                            <h2 class="uppercase">ADS</h2>
                        </div>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="row active-featured-product slick-arrow-2">
                        <!-- product-item start -->
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a>
                                        <img src="http://localhost:8000/gomla/img/blog/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-product-section section-bg-tb pt-80 pb-55" style="padding-top: 20px;padding-bottom: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-20">
                            <h2 class="uppercase">احدث المنتجات</h2>
                        </div>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="row active-featured-product slick-arrow-2">
                        <!-- product-item start -->
                        @foreach($newProduct as $product)
                        @php
                            $data = '<button onclick=addToCart2("'.$product->id.'","1") class="btn btn-danger">اضافة للسلة</button><button title="Add to cart" style="margin-left:15px;color:#fff;background:#ff7f00" id="plus1'.$product->id.'"><i class="zmdi zmdi-plus"></i></button><input id="qty1'.$product->id.'" type="text" style="border: solid 1px #ccc;width:30px;height: 30px;padding: 0;text-align: center" value="1"><button title="Add to cart" style="color:#fff;background:#ff7f00" id="minus1'.$product->id.'"><i class="zmdi zmdi-minus"></i></button>';
                            $data .='<script>$("#minus1'.$product->id.'").on("click",function(){let x = $("#qty1'. $product->id .'").val();--x;if(x > 0){$("#qty1'. $product->id .'").val(x);}});$("#plus1'.$product->id.'").click(function(){let x = $("#qty1'. $product->id .'").val();++x;$("#qty1'. $product->id .'").val(x);});</script>';
                    @endphp
                            @if($product->stock_qty != 0)

                            <?php $button = '<button class="single_add_to_cart_button" onclick=addItemToCart("'. $product->id . '") type="submit">Add to cart</button>'; ?>
                            <div class="col-xs-12">
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a style="cursor: pointer" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')">
                                            @if(isset($product->image))
                                                <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                     alt=""/>
                                            @else
                                                <img src="{{asset('gomla/images/404.png')}}"
                                                    style="height: 260px"  alt="{{$product->name}}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{url('product/'.$product->id)}}">{{ $product->name }}</a>
                                        </h6>
                                        <h6 class="brand-name">{{ $product->brand }}</h6>
                                        <h3 class="pro-price"> {{number_format ($product->standard_rate , 2, '.', ',')}}
                                            جنيه</h3>
                                    </div>


                                    <ul class="action-button">
                                        @if(intval($product->stock_qty) < 1)
                                            <li>
                                                <button title="Wishlist" onclick="wishlist( '{{$product->id}}' , '{{ $product->name  }}' )" id="addtofav1{{$product->id}}"><i class="zmdi zmdi-favorite"></i></button>
                                            </li>
                                            <li>
                                                <a  title="Quickview"><i class="zmdi zmdi-zoom-in" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')"></i></a>
                                            </li>
                                            <li>
                                                Out of the stock
                                            </li>

                                        @else

                                            <li>
                                                <button title="Wishlist" onclick="wishlist( '{{$product->id}}' , '{{ $product->name  }}' )" id="addtofav1{{$product->id}}"><i class="zmdi zmdi-favorite"></i></button>
                                            </li>
                                            <li>
                                            <a  title="Quickview"><i class="zmdi zmdi-zoom-in" onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $data }}')"></i></a>
                                            </li>
                                            <li>
                                                <button title="Add to cart" onclick="addToCart('{{$product->id}}','1')" id="hpaddtocart1{{$product->id}}"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
                                            </li>
                                            <li>
                                                <button title="Add to cart" id="plus{{$product->id}}"><i class="zmdi zmdi-plus"></i></button>
                                            </li>
                                            <li>
                                                <input id="qty{{$product->id}}" type="text" style="width:30px;height: 30px;padding: 0;text-align: center" value="1">
                                            </li>
                                            <li>
                                                <button title="Add to cart" id="minus{{$product->id}}"><i class="zmdi zmdi-minus"></i></button>
                                            </li>
                                        @endif
                                    </ul>
                                    <script>

                                        $("#minus{{$product->id}}").click(function(){
                                            let x = $("#qty{{ $product->id }}").val();
                                            --x;
                                            if(x > 0)
                                            {
                                                $("#qty{{ $product->id }}").val(x);
                                            }

                                        });
                                        $("#plus{{$product->id}}").click(function(){
                                            let x = $("#qty{{ $product->id }}").val();
                                            ++x;
                                            $("#qty{{ $product->id }}").val(x)

                                        });
                                    </script>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED PRODUCT SECTION END -->
        <!-- PRODUCT TAB SECTION START -->
</section>

@include('layouts.footer')

<!--style-customizer end -->
</div>
<!-- Body main wrapper end -->

<div class="modal fade" id="exampleModalLong" style="top:100px" tabindex="-1" role="dialog"
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




<!-- Placed JS at the end of the document so the pages load faster -->
@include('layouts.endpage')

