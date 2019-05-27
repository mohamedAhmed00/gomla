@include('layouts.head')

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
@include('layouts.header')

@include('layouts.nav')

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg" style="background: #f6f6f6 url('{{ asset("gomla/images/coverphoto.jpg") }}') no-repeat scroll center center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">المفضلة</h1>
                                <ul class="breadcrumb-list">
                                <li><a href="{{ url('/') }}">الرئيسية</a></li>
                                    <li>المفضلة</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->
        <style>
                .breadcrumbs-inner .breadcrumbs-title,.breadcrumb-list li a,.breadcrumb-list li
            {
                color:#fff !important
            }
            .overlay-bg:before {
                background: none
            }
            .breadcrumb-list > li::before {
            color: #FFF
            }
            .product-remove .add
            {
                color:#000
            }
            .btn-danger
            {
                color: #fff !important;
                background-color: #ff7f00 !important;
                border-color: #ff7f00 !important;
            }
    </style>
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- shopping-cart start -->
                                <!-- shopping-cart end -->
                                <!-- wishlist start -->
                                <div class="tab-pane active" id="wishlist">
                                    <div class="wishlist-content">
                                        <form action="#">
                                            <div class="table-content table-responsive mb-50">
                                                <table class="text-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">المنتج</th>
                                                        <th class="product-thumbnail">الصورة</th>
                                                        <th class="product-price">السعر</th>
                                                        <th class="product-price">اضافه الي السلة</th>
                                                        <th class="product-remove">حذف</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(isset($xproducts))
                                                        @foreach($xproducts as $product)
                                                            <tr id=even"{{$product->id}}" class="first odd">
                                                                <td class="product-thumbnail">
                                                                    <div class="pro-thumbnail-info text-right">
                                                                        <a href="{{ url('product/'.$product->id) }}">{{$product->name}}</a>
                                                                    </div>
                                                                </td>
                                                                <td class="product-thumbnail">
                                                                    <div class="pro-thumbnail-img">
                                                                        @if(isset($product->image))

                                                                            <img class="imagetable"
                                                                                 src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                                                 width="80" height="80"
                                                                                 alt="Slim Fit Casual Shirt">
                                                                        @else
                                                                            <img class="imagetable"
                                                                                 src="{{url('/public/gomla/')}}/images/404.png"
                                                                                 alt="{{$product->name}}">

                                                                        @endif
                                                                    </div>
                                                                </td>
                                                                <td class="product-price">{{$product->standard_rate}}جنيه</td>
                                                                <td class="product-remove">
                                                                    <a title="Add to cart" class="add" style="cursor: pointer;" onclick="addToCart('{{$product->id}}','1')" id="hpaddtocart1{{$product->id}}"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                </td>
                                                                <form action="{{url('deletewishlist')}}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <td class="product-remove">
                                                                        <input type="hidden" name="wishlist" value="wishlist">


                                                                        <input min="{{$product->min_order_qty}}"
                                                                               data-parsley-max="10"
                                                                               data-parsley-required="true"
                                                                               type="hidden"
                                                                               name="qty{{$product->id}}"
                                                                               id="{{$product->id}}"
                                                                               title="Quantity:">

                                                                        <input value="{{$product->name}}"
                                                                               data-parsley-required="true"
                                                                               type="hidden"
                                                                               name="name{{$product->id}}"
                                                                               id="name{{$product->id}}"
                                                                               title="Quantity:"
                                                                               class="input-text name">

                                                                        <input value="{{$product->id}}"
                                                                               data-parsley-required="true"
                                                                               type="hidden"
                                                                               name="id"
                                                                               id="code{{$product->id}}"
                                                                               title="item_code"
                                                                               class="input-text item_code">


                                                                        <button class="btn-danger" title="حذف من قائمه المفضله"
                                                                                type="submit"
                                                                                id="removewish{{$product->id}}">
                                                                            <i class="zmdi zmdi-close" aria-hidden="true">
                                                                            </i>
                                                                        </button>


                                                                    </td>
                                                                </form>

                                                            </tr>
                                                        @endforeach
                                                    @endif

                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- order-complete end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->

        </section>
        <!-- End page content -->

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