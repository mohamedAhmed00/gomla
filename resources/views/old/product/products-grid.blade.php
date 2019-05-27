@extends ('layouts.app')

@section('metatitle') Gomla Website |  @if(isset($cat_name) ){{$cat_name}}@endif @stop

@section('metadescription') @if(isset($cat_name) ){{$cat_name}}@endif @stop

@section('metaimage')@if(isset($imglink)) {{$imglink}} @endif @stop

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {{--<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        .height {
            height: 560px !important;
            /*margin-bottom: 0px !important;*/
        }

        .products-grid .item .item-inner .item-img {
            position: relative;
            border: 1px #eaeaea solid;
            border-radius: 3px;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
            /* margin-top: 20px; */
            width: 100%;
            overflow: hidden;
            /* min-height: 400px; */
            height: 400px;
            display: table-cell;
            vertical-align: middle;
        }

        .products-grid .item .item-inner .item-img .item-img-info {
            text-align: center;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            position: unset;
            /* position: relative; */
            /* display: inherit; */
            /* overflow: hidden; */
            /* max-height: 390px; */
            /* height: 225px; */
        }

        /*.image {*/
        /*width: auto !important;*/
        /*max-width: 236px !important;*/
        /*max-height: 300px !important;*/
        /*text-align: center !important;*/
        /*-webkit-transition: all 0.3s ease-out !important;*/
        /*-moz-transition: all 0.3s ease-out !important;*/
        /*-o-transition: all 0.3s ease-out !important;*/
        /*transition: all 0.3s ease-out !important;*/
        /*position: relative !important;*/
        /*overflow: hidden !important;*/
        /*height: 250px !important;*/

        /*}*/
        .btn-danger {
            color: #fff !important;

            background: #901a1d;
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

        .btn-danger:hover {
            background: #6d080f;
        }
        .popup {
            padding: 20px 0px 10px 0px;
            text-align: center;
            font-size: 18px;
            color: green;
        }
    </style>
@endsection

@section('content')

    <div class="page-heading"
     @if(isset($imglink)) style="
             background-size: cover!important;
             background-position: center center !important;
             background: linear-gradient(
             rgba(0, 0, 0, 0.45),
             rgba(0, 0, 0, 0.6)
             ),url({{$imglink}});
             " @endif>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home"><a href="{{url("/")}}" title="الذهاب إلي الرئيسيه">الرئيسية</a>
                                <span>—› </span>
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
            @if(isset($catNames) && isset($catNames->mainCat))
                <a href="{{url('categories/'.$catNames->mainCat->id)}}"><h2>{{$catNames->mainCat->name}}</h2></a>

            @endif

            
            @if(isset($catNames) && isset($catNames->subCat))
                <h2>{{$catNames->subCat}}</h2>
            @endif

        </div>
    </div>
    <!--breadcrumbs-->
    <!-- BEGIN Main Container col2-left -->

    <section class="main-container col2-left-layout bounceInUp animated">
        <!-- For version 1, 2, 3, 8 -->
        <!-- For version 1, 2, 3 -->
        {{--{{dd($item_group)}}--}}
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
                                                <a type="button" href="{{url('/login')}}" class=" btn-danger">تسجيل
                                                    الدخول</a>
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

                            <div class="category-products">
                                <ul class="products-grid">

                                    @foreach($products as $product)
                                        <script type="text/javascript"
                                                src="{{url('/public/gomla/')}}/js/jquery.min.js">
                                                </script>
                                        <li class="height item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a href="{{url('product/'.$product->id)}}" title="{{$product->name}}" class="product-image">
                                                            @if(isset($product->image))
                                                                <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                                     alt="{{$product->name}}">
                                                                 </a>
                                                            @else
                                                            <img src="{{url('/public/gomla/')}}/images/blog-banner.png"
                                                                 alt="{{$product->name}}"></a>
                                                        @endif
                                                        <div class="item-box-hover">
                                                            <div class="box-inner">
                                                                <div class="actions">
                                                                <span class="add-to-links">
                                                                     @if(in_array($product->id, $wishlist_products))
                                                                        <button class="link-wishlist"
                                                                                title="إضافة ألى قائمة المفضله"
                                                                                type="submit"
                                                                                style="color: red"
                                                                                id="addtofav{{$product->id}}">
                                                                                <span>إضافة ألى قائمة المفضله</span>
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
                                                                                        url: "{{url('/addwishlist')}}",
                                                                            type: 'post',
                                                                            data: {
                                                                         'id': jQuery('input[name=fav_id{{$product->id}}]').val(),
                                                                              'name': jQuery('input[name=favname{{$product->id}}]').val(),
                                                                                            '_token': jQuery('input[name=_token]').val()
                                                                                        },

                                                                                        success: function (response) {

                                                                                            if (response == 2) {
                                                                                                jQuery("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                                                                                jQuery('#exampleModalLong').modal('show');
                                                                                            }
                                                                                            else if (response == 1) {
                                                                                                jQuery('#addtofav{{$product->id}}').css("color", "red");
                                                                                                gtag('event', 'FAVOURITES_ADD', {
                                                                                                    'event_category': 'FAVOURITES',
                                                                                                    'event_action': 'FAVOURITES_ADD_{{$product->id}}'
                                                                                                });
                                                                                            } else {
                                                                                                jQuery('#addtofav{{$product->id}}').css("color", "black");
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
                                                               title="{{$product->name}}">{{$product->name}}</a>
                                                        </div>

                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                        <span class="regular-price"
                                                                              id="product-price-1">
                                                                            <span class="price">  {{number_format ($product->standard_rate , 2, '.', ',')}}  </span>
                                                                            <span class="price">  جنيه </span>

                                                                        </span>
                                                                </div>
                                                            </div>

                                                            {{--form add to cart--}}
                                                            <form data-parsley-validate method="POST"
                                                                  id="formcart{{$product->id}}">

                                                                <div class="add-to-cart">
                                                                    <div class="">
                                                                        <div class="custom"
                                                                             style="margin-bottom: 10px;">

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
                                                                                   title="الكميه:"
                                                                                   value="1"
                                                                                   class="input-text qty">


                                                                            <input value="{{$product->id}}"
                                                                                   data-parsley-required="true"
                                                                                   type="hidden"
                                                                                   name="id{{$product->id}}"
                                                                                   id="code{{$product->id}}"
                                                                                   title=""
                                                                                   class="input-text item_code">


                                                                        </div>
                                                                        <!--custom pull-left-->
                                                                    </div>
                                                                    <!--pull-left-->
                                                                    @if(intval($product->stock_qty) > 0)
                                                    <button type="submit"
                                                            id="addtocart{{$product->id}}"
                                                            title="إضافه إلى سلة الشراء" class="button btn-cart">
                                                        <span><i class="icon-basket"></i>إضافه إلى  سله الشراء</span>
                                                    @else
                                                    <button disabled="disabled"
                                                    			id="{{$product->id}}"
                                                            title=" المنتج غير متوفر" style="background-color: #000000; color:#fff;" class="button btn-cart">
                                                        <span><i class="icon-basket"></i>المنتج غير متوفر</span>
                                                    @endif 
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
                                                                                        jQuery("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                                                                        jQuery('#exampleModalLong').modal('show');

                                                                                    }
                                                                                    else if (typeof response === 'string' || response instanceof String)
                                                                                    {
                                                                                        //alert(response);
                                                                                        jQuery('#responseError').html(response);

                                                                                        jQuery('#error').modal('show');
                                                                                    }
                                                                                    else {
                                                                                        jQuery('#cart-sidebar').html('');
                                                                                        jQuery("#responseDone").html('<p>' + "تم اضافه المنتج بنجاح" + '</p>');
                                                                                        jQuery('#success').modal('show');
                                                                                        jQuery("#countapp1").html(response.length);
                                                                                        jQuery("#countapp").html(response.length);


                                                                                        getCart(response);
                                                                                    }
                                                                                },
                                                                                error: function (response) {
                                                                                    alert(erorr);
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


            {{--yield aside bar --}}

            @include('category.sidebar')

            {{--end yield side bar--}}


            <!--col-right sidebar-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </section>
    <!--main-container col2-left-layout-->


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

                    ' <button id="delcart' + this.id + '" class="btn-remove1" title="إحذف هذا المنتج" type="button"> ' + 'حذف' +
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

@endsection