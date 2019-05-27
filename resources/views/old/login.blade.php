@extends('layouts.app')

@section('metatitle') جملة أونلاين @stop

@section('metadescription') دلوقتي تقدر تشتري كل المنتجات الغذائية الجافة من خلال تطبيق جملة.أونلاين
حملة دلوقتي و وفر فلوسك ومجهودك @stop

@section('metaimage'){{url('/public/gomla/images/logo.jpg')}}@stop

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {{--<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        .btn-dangerfb {
            background-color: #3b5998 !important;
            /*margin-right: 50px !important;*/
        }

        .btn-dangerfb:hover {
            background-color: #3b5998 !important;
        }

        .forget {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>تسجيل دخول</h2>
                    </div>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">


        <div class="main">
            <div class="account-login container">
                <!--page-title-->

                <form data-parsley-validate method="POST" action="{{url('/login')}}" id="loginForm">

                    <fieldset class="col2-set">
                        <div class="col-1 new-users">

                            <strong>مستخدم جديد</strong>
                            <div class="content">
                                <p>
                                    عن طريق عمل حساب في موقعنا , انت ستكون قادر علي شراء جميع المنتجات بسعر الجملة .
                                </p>
                                <div class="buttons-set">

                                    <a type="button" title="Create an Account" class="btn-danger"
                                       href="{{url('/register')}}"><span><span>حساب جديد</span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 registered-users">
                            <div>

                                @if(session()->has('message'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                            </div>
                            <strong>تسجيل حساب جديد</strong>
                            <div class="content">

                                <p>هل لديك حساب بالفعل ؟ تفضل بالدخول</p>
                                <ul class="form-list">
                                    <li>
                                        <label for="email">البريد الإلكتروني<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input id="email" data-parsley-type="email" type="email"
                                                   data-parsley-required="true"
                                                   name="email" id=""
                                                   class="form-control input-text"
                                                   title="Email Address">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="pass">كلمة المرور<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="password" data-parsley-required="true" name="password"
                                                   class="form-control input-text " id="password"
                                                   title="Password">
                                        </div>
                                    </li>
                                </ul>
                                <div class="remember-me-popup">
                                    <div class="remember-me-popup-head" style="display:none">
                                        <h3 id="text2">ما هذا !</h3>
                                        <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
                                    </div>
                                    <div class="remember-me-popup-body" style="display:none">

                                        <div class="remember-me-popup-close-button a-right">
                                            <a href="#" class="remember-me-popup-close button" title="Close" onClick="
            showDiv()"><span>Close</span></a>
                                        </div>
                                    </div>
                                </div>

                                <p class="required">* املأ جميع البيانات</p>


                                <div class="buttons-set">


                                    <button style="margin-left: 50px !important;" type="submit" class="button login"
                                            title="Login" id="login">
                                        <span>تسجيل دخول</span>
                                    </button>

                                    <a type="button" class=" btn-danger btn-dangerfb"
                                       href="http://gomla.online/login/facebook"
                                       title="تسجيل عن طريق الفيسبوك" id="Facebook">
                                        <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> تسجيل عن طريق
                                        الفيسبوك
                                    </a>


                                    <br>
                                    <div class="row">
                                        <div class="forget col-md-12">
                                            <a href="{{url('/reset/password')}}" class="forgot-word">نسيت كلمة المرور
                                                ؟</a>
                                        </div>
                                    </div>

                                </div> <!--buttons-set-->
                            </div> <!--content-->
                        </div> <!--col-2 registered-users-->
                    </fieldset> <!--col2-set-->
                    {{ csrf_field() }}
                </form>

            </div> <!--account-login-->

        </div><!--main-container-->

    </div> <!--col1-layout-->
@endsection


@section('javascript')
    <script src="{{url('/public/')}}/prasley/parsley.js"></script>

    <script>
        // Log LOGIN_NORMAL to Google Analytics
        var loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', function(event) {
            // Sends the event to Google Analytics
            gtag('event', 'LOGIN_NORMAL', {
                'event_category': 'LOGIN_SCREEN',
                'event_action': 'LOGIN_NORMAL'
            } )
        });

        // Log LOGIN_NORMAL to Google Analytics
        var facebookLogin = document.getElementById('Facebook');
        facebookLogin.addEventListener('click', function(event) {
            // Sends the event to Google Analytics
            gtag('event', 'LOGIN_FACEBOOK', {
                'event_category': 'LOGIN_SCREEN',
                'event_action': 'LOGIN_FACEBOOK'
            } )
        });
    </script>


@endsection