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
                                <h1 class="breadcrumbs-title">حسابي الشخصي</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">الرئيسية</a></li>
                                    <li>حسابي الشخصي</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            .product-remove .add,.right a
            {
                color:#000
            }
        </style>
        <!-- BREADCRUMBS SETCTION END -->
        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">

            <!-- LOGIN SECTION START -->
            <div class="login-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="my-account-content" id="accordion2">
                                <!-- My Personal Information -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion2" href="#personal_info">بياناتي الشخصية</a>
                                        </h4>
                                    </div>
                                    <div class="main-container col2-right-layout">
        <div class="main">
            <div class="row">

                <section style="float: left !important;"
                         class="left-osama col-main col-sm-9 wow bounceInUp animated animated">
                    <ol class="one-page-checkout" id="checkoutSteps">
                        <li id="opc-billing" class="section allow active">
                            <div class="step-title">
                                {{--<span class="number">1</span>--}}
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


                                </dl>
                            </div>
                        </div>
                    </div>
                </aside> <!--col-right sidebar-->
            </div><!--row-->
        </div><!--main-container-inner-->
    </div> <!--main-container col2-left-layout-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGIN SECTION END -->
        </div>
        <!-- End page content -->
@include('layouts.footer')
<!--style-customizer end -->
</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->
@include('layouts.endpage')