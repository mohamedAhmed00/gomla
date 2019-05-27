@extends('layouts.app')



@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

@endsection

@section('content')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="state_bar">
                        <ul class="checkout-progress" id="checkout-progress-state">
                            <li title="المشتريات السابقه" class="active first">المشتريات السابقه</li>
                            <li style="color: white;" title="سله الشراء" class=" first">
                                <a style="color: white !important;"  href="{{url('cart')}}">سله الشراء</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->

    </div>

    <!-- BEGIN Main Container -->

    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">
        <div class="main">

            <!--state_bar-->

            <div class="multiple_addresses multiple-checkout container">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <form id="checkout_multishipping_form" action="" method="post">

                        <div class="page-title_multi">
                            <h2> مشترياتك السابقه</h2>
                        </div>
                        <!--page-title_multi-->
                        <div class="title-buttons">

                        </div>
                        <!--title-buttons-->
                        <div class="addresses">
                            <fieldset class="">
                                <input type="hidden" name="continue" value="0" id="can_continue_flag">
                                <input type="hidden" name="new_address" value="0" id="add_new_address_flag">

                                <table class="data-table table-striped" id="multiship-addresses-table">
                                    <colgroup>
                                        <col>
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                    </colgroup>
                                    <thead>
                                    <tr class="first last">
                                        <th>العنوان</th>
                                        <th class="a-center">الأجمالي</th>
                                        <th>التاريخ</th>
                                        <th>رقم الطلب</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr class="first last">
                                        <td colspan="100" class="a-right last">

                                        </td>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($user_orders_history as $order)
                                        <tr class="first odd">
                                            <td>
                                                <h3 class="product-name">
                                                    <a href="{{url('/history'.'/'.$order->order_id)}}" title="الذهاب الي التفاصيل">

                                                        <span>العنوان</span> : {{$order->address->title}} -
                                                        <br>
                                                       <span>رقم الشقه</span> :  {{$order->address->apartment_no}}
                                                        <span>الشارع</span> :  {{$order->address->street}} , <span>المنطقه</span> :  {{$order->address->regoin}}
                                                        <br>
                                                        <span>المدينه</span> :  {{$order->address->city}} ,
                                                    
                                                       <span>المحافظه</span> : {{$order->address->country}}<br>
                                                       <span>رقم المبني</span> : {{$order->address->building_no}}<br>
                                                       <span>رقم الشقه</span> : {{$order->address->floor_no}}<br>
                                                       <span>اقرب علامه</span> : {{$order->address->nearest_landmark}}<br>
                                                    </a>
                                                </h3>
                                            </td>
                                            <td>
                                                <a title="الذهاب الي التفاصيل" href="{{url('/history'.'/'.$order->order_id)}}">
                                                <input type="text" name="" disabled
                                                       value=" {{$order->final_total_price}} جنيه " size="15"
                                                       class="input-text qty">
                                                </a>
                                            </td>
                                            <td>
                                                <a title=" التاريخ" href="{{url('/history'.'/'.$order->order_id)}}">
                                                <input type="text" name="" disabled value="{{$order->created_at}}"
                                                       size="35"
                                                       class="input-text qty">
                                                </a>
                                            </td>
                                            <td>
                                                <a title=" التاريخ" href="{{url('/history'.'/'.$order->order_id)}}">
                                                    <input type="text" name="" disabled value="{{$order->salesorder_id}}"
                                                           size="15"
                                                           class="input-text qty">
                                                </a>
                                            </td>
                                            <td>
                                                <input type="hidden" size="25" class="input-text qty">
                                            </td>
                                            <td>
                                                <input type="hidden" size="25" class="input-text qty">
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </fieldset>
                            <!--multiple-checkout-->
                        </div>
                        <!--addresses-->

                    </form>
                </div>
                <!--table-responsive-->

                <div class="buttons-set">
                    <a class="back-link" href="{{url('/cart')}}">
                        <small>«</small>
                        العوده الي سله الشراء
                    </a>
                    {{--<button type="submit" title="اعاده تحميل الصفحه" class="button btn-update">--}}
                        {{--<span>اعاده تحميل الصفحه</span></button>--}}
                </div>
            </div>
            <!--multiple_addresses-->
        </div>
        <!--main-container-->

    </div>
    <!--col1-layout-->

     <!-- For version 1,2,3,4,6 -->

@endsection


@section('javascript')
    <script src="{{url('/public/')}}/prasley/parsley.js"></script>
@endsection
