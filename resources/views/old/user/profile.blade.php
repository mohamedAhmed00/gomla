@extends('layouts.app')

@section('head')
    <style>
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
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h2>حسابي</h2>
                        </div>
                    </div>
                    <!--col-xs-12-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--breadcrumbs-->
    </div>

    <!-- BEGIN Main Container col2-right -->
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">

                <section style="float: left !important;"
                         class="left-osama col-main col-sm-9 wow bounceInUp animated animated">
                    <ol class="one-page-checkout" id="checkoutSteps">
                        <li id="opc-billing" class="section allow active">
                            <div class="step-title">
                                {{--<span class="number">1</span>--}}
                                <h3 class="bold one_page_heading"> الملف الشخصي</h3>
                            </div>
                            <div id="checkout-step-billing" class="step a-item">

                                <form id="co-billing-form" action="">
                                    <fieldset class="group-select">
                                        <ul class="">
                                            <li id="billing-new-address-form">
                                                <fieldset>
                                                    <ul>
                                                        <li class="wide">
                                                            <label class="bold"  for="billing:street1"> الإسم<em
                                                                        class="required"></em></label><br>

                                                            <input disabled type="text"
                                                                   value="{{$userData->user->name}}"
                                                                   title="الإسم" value=""
                                                                   class="input-text  required-entry">

                                                        </li>

                                                        <li class="wide">
                                                            <label class="bold" for="billing:street1"> البريد الإلكتروني<em
                                                                        class="required"></em></label><br>

                                                            <input disabled type="text"
                                                                   value="{{$userData->user->email}}"
                                                                   title="البريد الإلكتروني"
                                                                   class="input-text  required-entry">

                                                        </li>

                                                        <li class="wide">
                                                            <label class="bold" for="billing:street1"> رقم الموبايل<em
                                                                        class="required"></em></label><br>

                                                            <input disabled type="text"
                                                                   value="{{$userData->user->phone}}"
                                                                   title=" رقم الموبايل"
                                                                   class="input-text  required-entry">

                                                        </li>

                                                        <li class="fields">
                                                            <div class="input-box">
                                                            </div>
                                                        </li>


                                                        <label class="bold" for="billing:street1"> العنوان<em
                                                                    class="required"></em></label><br>
                                                        {{--start foreach address--}}
                                                        @foreach($userData->address as $address)

                                                            <li class="wide">

                                                                <div  class="input-text required-entry">
                                                                    {{$address->title}}<br>
                                                                    {{$address->building_no}} {{$address->street}}
                                                                    , {{$address->regoin}},
                                                                    {{$address->city}} <br>{{$address->nearest_landmark}}<br> {{$address->apartment_no}}<br> {{$address->floor_no}}


                                                                    </div>
                                                            </li>





                                                            <li class="wide">

                                                                <div style="height: 15px" type="text"
                                                                     title="Street Address 2"
                                                                     class="">

                                                                </div>

                                                            </li>

                                                        @endforeach
                                                        {{--endforeach address--}}

                                                        <li class="fields">


                                                        </li>

                                                    </ul>

                                                </fieldset>
                                            </li>

                                        </ul>

                                    </fieldset>
                                </form>

                            </div>
                        </li>

                    </ol>

                    <br>
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
            </div><!--row-->
        </div><!--main-container-inner-->
    </div> <!--main-container col2-left-layout-->

@endsection



@section('javascript')

@endsection