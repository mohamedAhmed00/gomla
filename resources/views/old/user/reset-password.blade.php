@extends('layouts.app')



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
                        <h2>استعاده كلمه المرور</h2>
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

                <form data-parsley-validate method="POST" action="{{url('/reset/password')}}" id="form">

                    <fieldset class="col2-set">
                        <div class="col-1 new-users">
                            <div>

                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                            </div>
                            <strong>إستعاده كلمه المرور</strong>
                            <div class="content">
                                <p>أدخل بريدك الإلكتروني</p>
                                <div class="buttons-set">

                                    <ul class="form-list">
                                        <li>
                                            <label for="email"> لإستعاده كلمه المرور , ادخل بريدك الإلكتروني<em
                                                        class="required">*</em></label>
                                            <div class="input-box">
                                                <input data-parsley-type="email" type="email"
                                                       data-parsley-required="true"
                                                       name="email" id=""
                                                       class="form-control input-text"
                                                       title="Email Address">
                                            </div>
                                        </li>
                                    </ul>

                                    <p class="required">* إملأ جميع البيانات</p>


                                    <div class="buttons-set">

                                        <button type="submit" class="button login" title="Login" id="login">
                                            <span>إستعاده كلمه المرور</span>
                                        </button>


                                    </div> <!--buttons-set-->


                                </div>
                            </div>
                        </div>
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
        // Log FORGET_PASSWORD to Google Analytics
        var forgetPassword = document.getElementById('form');
        forgetPassword.addEventListener('submit', function (event) {
            // Sends the event to Google Analytics
            gtag('event', 'FORGET_PASSWORD', {
                'event_category': 'PASSWORD_RESET_SCREEN',
                'event_action': 'FORGET_PASSWORD'
            })
        });
    </script>



@endsection
