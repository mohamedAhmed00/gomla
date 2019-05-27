@include('layouts.head')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<link href="{{asset('prasley/parsley.js')}}" rel="stylesheet" type="text/css"/>
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
                                <h1 class="breadcrumbs-title" style="color: #000">تسجيل الدخول / تسجيل حساب جديد</h1>
                                <ul class="breadcrumb-list">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->
    <style>

            .breadcrumbs-inner .breadcrumbs-title
        {
            color:#fff !important
        }
        .overlay-bg:before {
            background: none
        }

        .widget-title
        {
            color: #000;
            font-weight: bold;
            font-size: 20px;
        }
        .login-account label , registered-customers label
        {
            color:#333;
            font-weight: bold;
            font-size: 18px;

        }
        .login-account input,.login-account select,.registered-customers input
        {
            border: solid 2px #ccc;
            color: #333;
        }
        .registered-customers p
        {
            color: #000;
            font-size: 15px;
            font-weight: bold;

        }
    </style>
        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">

            <!-- LOGIN SECTION START -->
            <div class="login-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <h6 class="widget-title border-left mb-50">تسجيل الدخول</h6>
                                <form data-parsley-validate method="POST" action="{{url('/login')}}" id="loginForm">
                                    <div class="login-account p-30 box-shadow">
                                        <p>اذا كان لديك حساب قم بتسجيل الدخول</p>
                                        @if(session()->has('message'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <input type="email" name="email" placeholder="ادخل البريد الالكتروني">
                                        <input type="password" name="password" placeholder="ادخل رقم المرور">
                                        <button class="submit-btn-1 btn-hover-1" type="submit">تسجيل الدخول</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- new-customers -->
                        <div class="col-md-6">
                            <div class="new-customers">
                                <form data-parsley-validate action="" name="register" method="POST" id="signupForm">
                                    @csrf
                                    <h6 class="widget-title border-left mb-50">تسجيل جديد</h6>
                                    <div class="login-account p-30 box-shadow">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label >الاسم<em class="required">*</em></label>
                                                <input type="text"  name="name" placeholder="ادخل اسمك بالكامل">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="city">المحافظة<em class="required">*</em></label>
                                                <select name="city" id="city" class="custom-select"
                                                        title="المحافظة">
                                                    <option selected value="القاهره">القاهره</option>
                                                </select>
                                            </div>
                                            <?php
                                            $ch3 = curl_init();

                                            curl_setopt($ch3, CURLOPT_URL, 'http://163.172.33.245/goomla/api/districts');
                                            curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
                                            curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, true);
                                            curl_setopt($ch3, CURLOPT_SSL_VERIFYHOST, false);
                                            curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
                                            $rest3 = curl_exec($ch3);
                                            $res3 = json_decode($rest3);
                                            $destricts = $res3;
                                            ?>
                                            <div class="col-sm-6">
                                                <label for="city">المنطقة<em class="required">*</em></label>
                                                <select class="custom-select" name="region">
                                                    @foreach($destricts  as $desc)
                                                        <option value="{{$desc->id}}">{{$desc->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>رقم التليفون<em class="required">*</em></label>
                                                <input data-parsley-required="true" type="text" name="phone" class="input-text" id="phone" placeholder="ادخل رقم تليفونك">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="street">رقم المنزل<em class="required">*</em></label>
                                                <input data-parsley-required="true" type="text" name="building_number" maxlength="12" size="12"
                                                       class="input-text"
                                                       id="building_number"
                                                       placeholder="رقم المنزل">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="floor_number">رقم الطابق<em class="required">*</em></label>
                                                <select class="custom-select" name="floor_number">
                                                    @for($i=0 ; $i<50 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>

                                            </div>
                                            <div class="col-sm-6">
                                                <label for="region">رقم الشقة<em class="required">*</em></label>
                                                <input data-parsley-required="true" type="text"
                                                       name="apartment_number"
                                                       class="input-text "
                                                       id="apartment_number"
                                                       placeholder="رقم الشقة">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="street">الشارع<em class="required">*</em></label>

                                                <input data-parsley-required="true" type="text" name="street"
                                                       class="input-text" id="street"
                                                       placeholder="ادخل الشارع">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="street">أقرب علامة<em class="required">*</em></label>

                                                <input data-parsley-required="true" type="text" name="nearest_landmark"
                                                       class="input-text" id="street"
                                                       placeholder="ادخل أقرب علامة">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="street">إسم العنوان<em class="required">*</em></label>

                                                <input data-parsley-required="true" type="text" name="address_title"
                                                       class="input-text" id="street"
                                                       placeholder="ادخل إسم العنوان">
                                            </div>
                                        </div>
                                        <label >البريد الالكتروني<em class="required">*</em></label>
                                        <input  type="email" name="UserEmail"  class="input-text" placeholder="البريد الألكتروني" autocomplete="off">
                                        <label >رقم المرور<em class="required">*</em></label>
                                        <input type="password" name="UserPassword"  placeholder="ادخل رقم المرور">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="submit-btn-1 mt-20 btn-hover-1" id="register" type="submit" value="register">تسجيل</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">تفريغ</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="lat" value="1.333" id="lat"
                                               class="input-text required-entry validate-lat"
                                               title="lat">

                                        {{--lang--}}
                                        <input type="hidden" name="lng" value="2.333" id="lng"
                                               class="input-text required-entry validate-lng"
                                               title="lng">
                                    </div>
                                </form>
                                <div style="vertical-align: middle; text-align: center;" class="col-md-12" id="loading-img">
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

    <div  class="modal fade bs-example-modal-sm" id="success" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="responseDone">

                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>


<!--style-customizer end -->
</div>
<!-- Body main wrapper end -->

<?php $register_url = 'http://163.172.33.245/goomla/api/register';?>
<script src="{{ asset('gomla/js/vendor/jquery-3.1.1.min.js') }}"></script>

<!-- Placed JS at the end of the document so the pages load faster -->
@include('layouts.endpage')
