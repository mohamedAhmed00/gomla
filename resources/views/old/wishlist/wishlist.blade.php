@extends ('layouts.app')


@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {{--<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        .image {
            height: 267px;
            width: 267px;
        }
        .right {
            margin-right: 10px !important;
            float: right !important;
        }


        .imagetable {
            height: 80px;
            width: 80px;

        }

        .widthtable {
            width: 100px;
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
         .right {
             margin-right: 10px !important;
             float: right !important;
         }

        .left-osama {
            float: left !important;
        }

        @media only screen and (min-width: 667px) {
            .left-osama {
                float: right;
            }
        }
        .bold{
            font-weight: bold !important;
            font-size: 16px!important;
            line-height: 16px !important;
            padding: 5px !important;
        }


    </style>
@endsection
@section('content')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>المفضله</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN Main Container col2-right -->
    <section class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <section  class="left-osama col-main col-sm-9 col-xs-12 wow bounceInUp animated animated"
                         style="visibility: visible;">


                    <div class="my-account">

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        <div class="my-wishlist">
                            <fieldset>
                                <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                                <div class="table-responsive">
                                    <table class="clean-table linearize-table data-table table-striped"
                                           id="wishlist-table">
                                        <thead>
                                        <tr class="first last">
                                            <th class=" widthtable customer-wishlist-item-image">صوره المنتج</th>
                                            <th class="customer-wishlist-item-info"></th>
                                            <th class="customer-wishlist-item-price"></th>
                                            <th class="customer-wishlist-item-remove"></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if(isset($xproducts))
                                            @foreach($xproducts as $product)

                                                <tr id=even"{{$product->id}}" class="first odd">
                                                    <td class="wishlist-cell0 customer-wishlist-item-image">
                                                        <a class="product-image"
                                                           href="{{url('product/'.$product->id)}}"
                                                           title="{{$product->name}}">

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
                                                        </a>
                                                    </td>
                                                    <td class="wishlist-cell1 customer-wishlist-item-info">
                                                        <h3 class="product-name">
                                                            <a href="{{url('product/'.$product->id)}}"
                                                               title="Slim Fit Casual Shirt">
                                                                {{$product->name}}</a>
                                                        </h3>
                                                        <div class="description std">
                                                            <div class="inner">{{$product->description}}.</div>
                                                        </div>

                                                    </td>
                                                    <td class="wishlist-cell3 customer-wishlist-item-price"
                                                        data-rwd-label="Price">
                                                        <div class="cart-cell">
                                                            <div class="price-box"><span class="regular-price"
                                                                                         id="product-price-2"> <span
                                                                            class="price">{{$product->standard_rate}}
                                                                        جنيه</span> </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <form action="{{url('deletewishlist')}}" method="post">
                                                        <td class="wishlist-cell5 customer-wishlist-item-remove last">
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
                                                                <i class="fa fa-trash-o" aria-hidden="true">
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


                            </fieldset>

                        </div>

                    </div>
                </section>

                <aside style="float: right !important;" class="col-right sidebar col-sm-3 wow bounceInUp animated animated">
                    <div id="checkout-progress-wrapper">
                        <div class="block block-progress">
                            <div class="block-title">
                                حسابي
                            </div>
                            <div class="block-content">
                                <dl>
                                    <div class="row">
                                        <div class="right" id="billing-progress-opcheckout">
                                            <dt class="">
                                                <a href="{{url('wishlist')}}">المفضله</a>

                                            </dt>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="right" id="billing-progress-opcheckout">
                                            <dt class="">
                                                <a href="{{url('cart')}}">سله الشراء</a>

                                            </dt>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="right" id="billing-progress-opcheckout">
                                            <dt class="">
                                                <a href="{{url('history')}}">مشترياتي السابقه</a>

                                            </dt>
                                        </div>
                                    </div>

                                </dl>
                            </div>
                        </div>
                    </div>
                </aside> <!--col-right sidebar-->

                <!--col-right sidebar col-sm-3 wow bounceInUp animated-->
            </div>
            <!--row-->
        </div>
        <!--main container-->
    </section>
    <!--main-container col2-left-layout-->
    <!-- For version 1,2,3,4,6 -->


    </div>

@endsection
