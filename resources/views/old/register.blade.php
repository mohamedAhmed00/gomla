@extends('layouts.app')

@section('metatitle') جملة أونلاين @stop

@section('metadescription') دلوقتي تقدر تشتري كل المنتجات الغذائية الجافة من خلال تطبيق جملة.أونلاين
جملة


دلوقتي و وفر فلوسك ومجهودك @stop

@section('metaimage'){{url('/public/gomla/images/logo.jpg')}}@stop


@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}"/>

<link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')


<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title">
                    <h2>تسجيل حساب جديد</h2>
                </div>
            </div>
            <!--col-xs-12-->
        </div>
        <!--row-->
    </div>
    <!--container-->
</div>
<div class="main-container col1-layout wow bounceInUp animated animated" style=" visibility: visible;">

    <div class="main">
        <div class="account-login container">


            <div id="success" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                 aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm" role="document">

                    <div id="responseDone" width="200px" class="popup modal-content">

                    </div>
                </div>
            </div>


            <form data-parsley-validate action="" name="register" method="POST" id="signupForm">

                <div class="col-md-12">

                    <div style="float: left" class="col-md-6 registered-users">
                        <div class="content">
                            {{-- Ul addresse--}}
                            <div class="form-list">


                                {{--building_number--}}
                                <div class="row">
                                    <div class="input-box col-md-3 ">
                                        <label for="street">رقم المنزل<em class="required">*</em></label>
                                        <input data-parsley-required="true" type="text" name="building_number"
                                               class="input-text"
                                               id="building_number"
                                               title="رقم المنزل">
                                    </div>

                                    {{--floor_number--}}
                                    <div class="input-box col-md-3">
                                        <label for="floor_number">رقم الطابق<em class="required">*</em></label>

                                        <select name="floor_number" id="floor_number" class="input-text"
                                                title="الطابق">
                                            @for($i=0 ; $i<50 ; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    {{--appartment--}}
                                    <div class="input-box col-md-3">
                                        <label for="region">رقم الشقة<em class="required">*</em></label>
                                        <input data-parsley-required="true" type="text"
                                               name="apartment_number"
                                               class="input-text "
                                               id="apartment_number"
                                               title="رقم الشقة">
                                    </div>
                                </div>


                                {{--street--}}
                                <div class="row">
                                    <div class="input-box col-md-12">
                                        <label for="street">الشارع<em class="required">*</em></label>

                                        <input data-parsley-required="true" type="text" name="street"
                                               class="input-text" id="street"
                                               title="الشارع">
                                    </div>
                                </div>

                                <div class="row">
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
                                    {{--region--}}
                                    <div class="input-box col-md-3">
                                        <label for="region">المنطقة<em class="required">*</em></label>
                                        <select name="region" id="region" class="input-text"
                                                title="المنطقة">
                                            @foreach($destricts  as $desc)
                                            <option value="{{$desc->id}}">{{$desc->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    {{--//city--}}
                                    <div class=" input-box col-md-3">
                                        <label for="city">المحافظة<em class="required">*</em></label>
                                        <select name="city" id="city" class="input-text"
                                                title="المحافظة">
                                            <option selected disabled value="القاهره">القاهره</option>
                                        </select>
                                    </div>

                                </div>


                                {{--nearest_landmark--}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="nearest_landmark">أقرب علامة<em
                                                    class="required">*</em></label>
                                        <input data-parsley-required="true" type="text" name="nearest_landmark"
                                               class="input-text"
                                               id="nearest_landmark"
                                               title="أقرب علامة">
                                    </div>
                                </div>

                                {{--//address_ttile--}}
                                <div>
                                    <label for="city">إسم العنوان<em class="required">*</em></label>
                                    <div class="input-box">
                                        <input data-parsley-required="true" type="text" name="address_title"
                                               id="address_title"
                                               class="input-text required-entry validate-address_title"
                                               title="إسم العنوان">
                                    </div>
                                </div>

                                {{--lat--}}
                                <input type="hidden" name="lat" value="1.333" id="lat"
                                       class="input-text required-entry validate-lat"
                                       title="lat">

                                {{--lang--}}
                                <input type="hidden" name="lng" value="2.333" id="lng"
                                       class="input-text required-entry validate-lng"
                                       title="lng">


                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 registered-users">
                        <div class="content">
                            {{--user data--}}
                            <ul class="form-list">
                                {{--name--}}
                                <div class="row">
                                    <div class="input-box col-md-12">
                                        <label for="pass">الإسم<em class="required">*</em></label>
                                        <input data-parsley-required="true"
                                               type="text"
                                               name="name"
                                               class="input-text" id="name"
                                               title="name">
                                    </div>
                                </div>
                                {{--email--}}
                                <div class="row">
                                    <div class="input-box col-md-12">
                                        <label for="email">البريد الألكتروني<em class="required">*</em></label>
                                        <input data-parsley-required="true" data-parsley-type="email" type="email"
                                               name="email" id="email"
                                               class="input-text "
                                               title="البريد الألكتروني">
                                    </div>
                                </div>
                                {{--phone--}}
                                <div class="row">
                                    <div class=" input-box col-md-12">
                                        <label for="">رقم الهاتف<em class="required">*</em></label>
                                        <input data-parsley-required="true"
                                               type="text"
                                               name="phone"
                                               class="input-text" id="phone"
                                               title="رقم الهاتف">
                                    </div>
                                </div>
                                {{--password--}}
                                <div class="row">
                                    <div class="col-md-12 input-box">
                                        <label for="password">كلمة المرور<em class="required">*</em></label>
                                        <input data-parsley-required="true" type="password" name="password"
                                               class="input-text" id="password"
                                               title="كلمة المرور">
                                    </div>
                                </div>

                            </ul>

                            <p class="required">* إملأ البيانات المطلوية</p>


                        </div> <!--content-->
                    </div>
                    <!--col-2 registered-users-->
                    {{--<div class="row">--}}
                        <div style="vertical-align: middle; text-align: center;" class="col-sm-12 buttons-set">

                            <button style="margin-top: 25px;padding: 12px 100px;" type="submit" class="button login"
                                    title="إنشاء حساب جديد"
                                    name="" id="register">
                                <span>إنشاء حساب جديد</span>
                            </button>

                        </div>
                        <div style="vertical-align: middle; text-align: center;" class="col-md-12" id="loading-img">
                        </div>
                        <!--buttons-set-->
                        {{--</div>--}}
                </div> <!--col2-set-->

            </form>

        </div> <!--account-login-->

    </div><!--main-container-->

</div> <!--col1-layout-->

@endsection

<?php $register_url = 'http://163.172.33.245/goomla/api/register';?>

@section('javascript')

    <script src="{{url('/public/')}}/prasley/parsley.js"></script>


<script type="text/javascript">


    jQuery('form').parsley();

    var loadingimg = "{{url('/public/imgs/loading5.gif')}}";
    jQuery('#register').one('click', function () {

        jQuery('#loading-img').html('<img style="height:100px;" src="' + loadingimg + '" />');
//            jQuery('#loading-img').hide(10000);


        jQuery('form').submit(function (e) {
            e.preventDefault(e);

            jQuery.ajax({
                url: "{{URL::to('register')}}",
                crossDomain: true,
                contentType: 'application/json',
                type: 'POST',
                data: JSON.stringify({
                    'name': jQuery('input[name=name]').val(),
                    'email': jQuery('input[name=email]').val(),
                    'phone': jQuery('input[name=phone]').val(),
                    'address_phone': jQuery('input[name=phone]').val(),
                    'password': jQuery('input[name=password]').val(),
                    'floor_number': jQuery('select[name=floor_number]').val(),
                    'apartment_number': jQuery('input[name=apartment_number]').val(),
                    'building_number': jQuery('input[name=building_number]').val(),
                    'street': jQuery('input[name=street]').val(),
                    'nearest_landmark': jQuery('input[name=nearest_landmark]').val(),
                    'region': jQuery('select[name=region]').val(),
                    'city': "القاهره",
                    'lat': jQuery('input[name=lat]').val(),
                    'lng': jQuery('input[name=lng]').val(),
                    'address_title': jQuery('input[name=address_title]').val(),
                    '_token': jQuery('input[name=_token]').val()
                }),
                success: function (response) {
                    if (response == 1) {
                        jQuery("#responseDone").html('<p>' + "تم التسجيل بنجاح" + '</p>');
                        window.scrollTo(0, 0);
                        jQuery('.bs-example-modal-sm').modal('show');
                        jQuery('#loading-img').hide();
                        window.setTimeout(function () {
                            window.location.href = '{{url('/')}}';
                        }, 1000);

                    } else {

                        jQuery("#responseDone").html('<p>' + response+ '</p>');
                        jQuery("#responseDone p").css('color','red');
                        window.scrollTo(0, 0);

                        jQuery('.bs-example-modal-sm').modal('show');
                        jQuery('#loading-img').hide();
                    }


                },
                error: function (response) {
                    jQuery("#responseDone").html('<p>' + response + '</p>');
                    jQuery("#responseDone p").css('color','red');
                    window.scrollTo(0, 0);
                    jQuery('.bs-example-modal-sm').modal('show');


                }
                ,
            });
        });
    })
    ;
</script>

    <script>
        // Log SIGNUP_SUBMIT to Google Analytics
        var signUp = document.getElementById('signupForm');
        signUp.addEventListener('submit', function(event) {
            // Sends the event to Google Analytics
            gtag('event', 'SIGNUP_SUBMIT', {
                'event_category': 'SIGNUP_SCREEN',
                'event_action': 'SIGNUP_SUBMIT'
            } )
        });
    </script>

@endsection