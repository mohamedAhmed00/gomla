@extends ('layouts.app')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {{--<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        .image {
            width: auto !important;
            max-width: 236px !important;
            max-height: 300px !important;
            text-align: center !important;
            -webkit-transition: all 0.3s ease-out !important;
            -moz-transition: all 0.3s ease-out!important;
            -o-transition: all 0.3s ease-out!important;
            transition: all 0.3s ease-out!important;
            position: relative!important;
            overflow: hidden!important;
            height: 275px!important;

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


    <div class="page-heading"
         @if($imglink!=null) style="background-image: url({{$imglink}}); background-size: cover;
    background-repeat: no-repeat;" @endif >
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home"><a href="{{url("/")}}" title="Go to Home Page">الرئيسية</a>
                                <span>—› </span>
                            </li>
                            {{--<li class="category1599"><a href="grid.html" title="">Salad</a> <span>—› </span></li>--}}
                            {{--<li class="category1600"><a href="grid.html" title="">Bread Salad</a> <span>—› </span></li>--}}
                            {{--<li class="category1601"><strong>Dakos</strong></li>--}}
                        </ul>
                    </div>
                    <!--col-xs-12-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <div class="page-title">
            @if(isset($name) )
                <h2>{{$name}}</h2>
            @endif
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
                                <div id="sort-by">
                                    <label class="left"></label>

                                </div>

                                <div class="pager">
                                    <div id="limiter">
                                        <label> </label>

                                    </div>
                                    <div class="pages">
                                        <label></label>
                                        <ul class="pagination">
                                            {{$products->setPath($item_group)->render()}}
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!-- Small modal -->


                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                                 aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog modal-sm" role="document">

                                    <div id="responseDone" width="200px" class="popup modal-content">

                                    </div>
                                </div>
                            </div>

                            <div class="category-products">
                                <ul class="  products-grid">

                                    @foreach($products as $product)
                                        <script type="text/javascript" src="{{url('/public/gomla/')}}/js/jquery.min.js"></script>


                                        <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">

                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="image  item-img-info">
                                                        <a href="{{url('product/'.$product->id)}}"
                                                           title="{{$product->name}}" class="product-image">
                                                            @if(isset($product->image))
                                                                <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                                     alt="{{$product->name}}"></a>
                                                        @else
                                                            <img src="{{url('/public/gomla/')}}/images/blog-banner.png" alt="{{$product->name}}"></a>
                                                        @endif
                                                        <div class="item-box-hover">
                                                            <div class="box-inner">
                                                                <div class="actions">
                                                                <span class="add-to-links">
                                                                     @if(in_array($product->id, $wishlist_products))
                                                                        <button class="link-wishlist"
                                                                                title="Add to Wishlist"
                                                                                type="submit"
                                                                                style="color: red"
                                                                                id="addtofav{{$product->id}}">
                                                                                <span>أضافة ألى قائمة المفضله</span>
                                                                            </button>
                                                                    @else

                                                                        <button class="link-wishlist"
                                                                                title="Add to Wishlist"
                                                                                type="submit"
                                                                                id="addtofav{{$product->id}}">
                                                                                <span>أضافة ألى قائمة المفضله</span>
                                                                            </button>

                                                                    @endif
                                                                    <input type="hidden" value="{{$product->id}}"
                                                                           name="fav_id{{$product->id}}"
                                                                           id="fav_id{{$product->id}}">

                                                                    <input type="hidden" value="{{$product->name}}"
                                                                           name="favname{{$product->id}}"
                                                                           id="favname{{$product->id}}">

                                                                    {{--script add wishlist--}}
                                                                    <script>
                                                                            jQuery(document).ready(function () {
                                                                                jQuery('#addtofav{{$product->id}}').click(function () {

                                                                                    jQuery.ajax({
                                                                                        url: "{{url('addwishlist')}}",
                                                                                        type: 'post',
                                                                                        data: {
                                                                                            'id': jQuery('input[name=fav_id{{$product->id}}]').val(),
                                                                                            'name': jQuery('input[name=favname{{$product->id}}]').val(),
                                                                                            '_token': jQuery('input[name=_token]').val()
                                                                                        },

                                                                                        success: function (response) {

                                                                                            if (response == 2) {
                                                                                                jQuery("#responseDone").html('<p>' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                                                                                jQuery('.bs-example-modal-sm').modal('show');
                                                                                                window.setTimeout(function () {
                                                                                                    // Move to a new location or you can do something else
                                                                                                    window.location.href = "{{url('/login')}}";

                                                                                                }, 5000);

                                                                                            }
                                                                                            else if (response == 1) {
                                                                                                jQuery('#addtofav{{$product->id}}').css("color", "red");
                                                                                            } else {
                                                                                                jQuery('#addtofav{{$product->id}}').css("color", "black");
                                                                                            }

                                                                                        },
                                                                                        error: function (response) {
                                                                                            alert(response);

                                                                                        },

                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>

                                                                    {{--script End wishlist--}}
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
                                                               title="Retis lapen casen">{{$product->name}}</a>
                                                        </div>

                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                        <span class="regular-price"
                                                                              id="product-price-1">
                                                                            <span class="price">  {{$product->standard_rate}}  </span>
                                                                            <span class="price">  جنيه </span>

                                                                        </span>
                                                                </div>
                                                            </div>

                                                            {{--form add to cart--}}
                                                            <form data-parsley-validate method="POST" id="formcart{{$product->id}}">

                                                                <div class="add-to-cart">
                                                                    <div class="">
                                                                        <div class="custom" style="margin-bottom: 10px;">

                                                                            <button onClick="var result = document.getElementById('{{$product->id}}');
                                                                                    var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                                                    class="increase items-count"
                                                                                    type="button">
                                                                                <i class="icon-plus">&nbsp;</i>
                                                                            </button>

                                                                            <button onClick="var result = document.getElementById('{{$product->id}}');
                                                                                    var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 )
                                                                                    result.value--;return false;"
                                                                                    class="reduced items-count"
                                                                                    type="button">
                                                                                <i class="icon-minus">&nbsp;</i>
                                                                            </button>

                                                                            <input min="{{$product->min_order_qty}}"
                                                                                   data-parsley-required="true"
                                                                                   type="text"
                                                                                   name="productqty{{$product->id}}"
                                                                                   id="{{$product->id}}"
                                                                                   title="Quantity:"
                                                                                   class="input-text qty">


                                                                            <input value="{{$product->id}}"
                                                                                   data-parsley-required="true"
                                                                                   type="hidden"
                                                                                   name="id{{$product->id}}"
                                                                                   id="code{{$product->id}}"
                                                                                   title="item_code"
                                                                                   class="input-text item_code">


                                                                        </div>
                                                                        <!--custom pull-left-->
                                                                    </div>
                                                                    <!--pull-left-->
                                                                    <button type="submit"
                                                                            id="addtocart{{$product->id}}"
                                                                            title="إضافه ألى سلة الشراء" class="button btn-cart">
                                                                        <span><i class="icon-basket"></i>إضافه إلى سلة الشراء</span>
                                                                    </button>
                                                                </div>


                                                            </form>

                                                            {{--script add to cart--}}
                                                            <script>
                                                                jQuery(document).ready(function () {
                                                                    jQuery('#addtocart{{$product->id}}').one('click', function () {
                                                                        jQuery('#formcart{{$product->id}}').submit(function (e) {
                                                                            e.preventDefault(e);

                                                                            jQuery.ajax({
                                                                                url: "{{url('/addcart')}}",
                                                                                crossDomain: true,
                                                                                contentType: 'application/json',
                                                                                type: 'POST',
                                                                                data: JSON.stringify({
                                                                                    'id': jQuery('input[name=id{{$product->id}}]').val(),
                                                                                    'qty': jQuery('input[name=productqty{{$product->id}}]').val(),
                                                                                    '_token': jQuery('input[name=_token]').val()
                                                                                }),
                                                                                success: function (response) {
                                                                                    if (response == 1) {
                                                                                        jQuery("#responseDone").html('<p>' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                                                                        jQuery('.bs-example-modal-sm').modal('show');
                                                                                        window.setTimeout(function () {
                                                                                            // Move to a new location or you can do something else
                                                                                            window.location.href = "{{url('/login')}}";

                                                                                        }, 5000);
                                                                                    } else {
                                                                                        jQuery('#cart-sidebar').html('');
                                                                                        jQuery("#responseDone").html('<p>' + "تم اضافه المنتج بنجاح" + '</p>');
                                                                                        jQuery('.bs-example-modal-sm').modal('show');
                                                                                        jQuery("#countapp1").html(response.length);
                                                                                        jQuery("#countapp").html(response.length);

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
                                                                                                ' <button id="deletecartheaderx' + this.id + '" class="btn-remove1" title="Remove This Item" type="submit"> ' + 'Remove' +
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
                                                                                                jQuery('#deletecartheaderx{{$product->id}}').one('click', function () {
                                                                                                    jQuery('#formdeletcartheaderx{{$product->id}}').submit(function (e) {
                                                                                                        e.preventDefault(e);

                                                                                                        jQuery.ajax({
                                                                                                            url: "{{url('/deletecart/1')}}",
                                                                                                            crossDomain: true,
                                                                                                            contentType: 'application/json',
                                                                                                            type: 'POST',
                                                                                                            data: JSON.stringify({
                                                                                                                'id': jQuery('input[name=headeridx{{$product->id}}]').val(),
                                                                                                                'qty': jQuery('input[name=headerqtyx{{$product->id}}]').val(),
                                                                                                                '_token': jQuery('input[name=_token]').val()
                                                                                                            }),
                                                                                                            success: function (response) {
                                                                                                                if (response == 1) {
                                                                                                                    jQuery('#licartnew{{$product->id}}').hide();
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
                                                </div>
                                            </div>

                                        </li>

                                    @endforeach

                                </ul>
                            </div>

                        </article>
                    </div>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
                    <!-- BEGIN SIDE-NAV-CATEGORY -->
                    <div class="side-nav-categories">
                        <div class="block-title"> الأقسام</div>
                        <!--block-title-->
                        <!-- BEGIN BOX-CATEGORY -->
                        <div class="box-content box-category">
                            <ul>

                                <?php
                                $crl2 = curl_init();

                                curl_setopt($crl2, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categorytree');
                                curl_setopt($crl2, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($crl2, CURLOPT_SSL_VERIFYHOST, false);
                                curl_setopt($crl2, CURLOPT_SSL_VERIFYPEER, false);

                                $rest2 = curl_exec($crl2);
                                $categories = json_decode($rest2);
                                ?>


                                {{--start foreach categories--}}

                                @foreach($categories as $onecat)
                                    @if($onecat->sub_categories != null )
                                        <li>
                                            <a class="active" href="{{url('products/'.$onecat->id)}}">
                                                {{$onecat->name}}
                                            </a>
                                            <span class="subDropdown minus"></span>


                                            <ul class="level0_415" style="display:block">
                                                <!--level1-->
                                                <li>
                                                    @foreach($onecat->sub_categories as $subcats)

                                                        <a href="{{url('products/'.$subcats->id)}}"> {{$subcats->name}}</a>
                                                    @endforeach
                                                </li>
                                            </ul>
                                        @endif

                                        <!--level0-->
                                        </li>
                                        @endforeach
                                        {{--end foreach categories--}}

                            </ul>
                        </div>
                        <!--box-content box-category-->
                    </div>
                    <!--side-nav-categories-->

         
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



@section('javascript')

    <script src="{{url('/public/')}}/prasley/parsley.js"></script>


@endsection