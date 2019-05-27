@extends('layouts.app')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {{--<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>--}}

    <style>


        .imagedetails {
            height: auto;
            width: 100%;
            max-width: 50%;
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
    </style>
@endsection

@section('content')

    <!-- BEGIN Main Container -->
    <div class="main-container col1-layout wow bounceInUp animated">
        <div class="main">
            <div class="col-main">
                <!-- Endif Next Previous Product -->


                <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product"
                     itemid="#product_base">
                    <div id="messages_product_view"></div>
                    <!--product-next-prev-->

                    {{--start foreach--}}
                    @foreach($user_orders_history as $order)

                        <div class="product-essential container">
                            <form action="" method="post" id="product_addtocart_form">
                                <!--End For version 1, 2, 6 -->
                                <!-- For version 3 -->
                                @foreach($order->cart as $cart)

                                    <div style="margin-bottom: 75px" class="product-img-box col-sm-6 col-xs-12">
                                        <div class="new-label new-top-left"></div>
                                        <div class="product-image">
                                            <div class="imagedetails large-image">

                                                @if(isset($cart->image))
                                                    <a href="{{url('product/'.$cart->id)}}"
                                                       class="imagedetails cloud-zoom" id="zoom1"
                                                       rel="useWrapper: false, adjustY:0, adjustX:20">
                                                        <img class="imagedetails"
                                                             src="http://163.172.33.245/goomla/storage/app/erpnext/{{$cart->image}}">
                                                    </a>
                                                @else
                                                    <a href="{{url('/public/gomla/')}}/images/blog-banner.png"
                                                       class=" imagedetails cloud-zoom" id="zoom1"
                                                       rel="useWrapper: false, adjustY:0, adjustX:20">
                                                        <img class="imagedetails"
                                                             src="{{url('/public/gomla/')}}/images/blog-banner.png">
                                                    </a>
                                                @endif
                                            </div>

                                        </div>
                                        <!-- end: more-images -->
                                    </div>


                                    <!--End For version 1,2,6-->
                                <!-- For version 3 -->
                                <div style="margin-bottom: 75px" class="product-shop col-sm-6 col-xs-12">

                                    <div class="product-name">
                                        <h1 itemprop="name">   {{$cart->item_name}}</h1>
                                    </div>
                                    <!--product-name-->

                                    <div class="price-block">
                                        <div class="price-box">
                                               <span class="regular-price" id="product-price-123">
                                                <span class="price">الكميه : {{$cart->qty}}</span>
                                            </span>
                                            <span style="float: left" class="regular-price" id="product-price-123">
                                                <span class="price">السعر : {{$cart->total_price}} جنيه</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!--price-block-->
                                    <div class="short-description">
                                        <h2>التفاصيل</h2>
                                        <p>{{$cart->description}}</p>

                                    </div>
                                    <!--add-to-box-->
                                    <!-- thm-mart Social Share-->
                                    <!-- thm-mart Social Share Close-->
                                </div>

                            @endforeach
                                <!--product-shop-->
                                <!--Detail page static block for version 3-->
                            </form>
                        </div>
                    @endforeach

                    {{--endforeach--}}

                </div>
                <!--product-essential-->


                <!--product-collateral-->
                <!-- end related product -->
            </div>
            <!--box-additional-->
            <!--product-view-->
        </div>
    </div>
    <!--col-main-->
    </div>
    <!--main-container-->
    </div>

@endsection


@section('javascript')
    <script src="{{url('/public/')}}/prasley/parsley.js"></script>
@endsection
