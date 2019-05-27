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
                        <h2>إتصل بنا</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <!-- BEGIN Main Container col2-right -->
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-main col-sm-12 col-offset-2 wow bounceInUp animated animated" style="visibility: visible;">
                    <div id="messages_product_view"></div>
                    <form id="contactusForm" action="{{url('/contact-us')}}"  method="POST" data-parsley-validate>
                    <div class="static-contain">
                        <fieldset class="group-select">
                            <ul>
                                <li id="billing-new-address-form">
                                    <fieldset class="">
                                        <ul>
                                            <li>
                                                <div class="customer-name">
                                                     <div class="input-box name-firstname">
                                                        <label for="email"><em class="required">*</em>البريد الإلكتروني</label>
                                                        <br>
                                                        <input data-parsley-type="email" type="email" data-parsley-required="true"  name="email" id="email" title="Email"
                                                               class="input-text required-entry validate-email"
                                                               type="text">
                                                    </div>
                                                    <div class="input-box name-firstname">
                                                        <label for="name"><em class="required">*</em>الأسم</label>
                                                        <br>
                                                        <input data-parsley-required="true" name="name" id="name" title="Name"
                                                               class="input-text required-entry" type="text">
                                                    </div>

                                                </div>
                                            </li>
                                            <li>
                                                <label for="telephone">رقم الموبايل</label>
                                                <br>
                                                <input data-parsley-required="true" data-parsley-type="number" name="phone" id="phone" title="Telephone" value=""
                                                       class="input-text" type="text">
                                            </li>
                                            <li>
                                                <label for="comment"><em class="required">*</em>الرساله</label>
                                                <br>
                                                <textarea data-parsley-required="true" name="message" id="message" title="Comment"
                                                          class="required-entry input-text" cols="5"
                                                          rows="3"></textarea>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </li>
                                <p class="require"><em class="required">* </em>املإ البيانات المطلوبه</p>
                                <input type="text" name="hideit" id="hideit" value=""
                                       style="display:none !important;">
                                <div class="buttons-set">
                                    <button type="submit" title="Submit" class="button submit">
                                        <span><span>إرسال</span></span></button>
                                </div>
                            </ul>
                        </fieldset>
                    </div>
                    </form>
                </div>
                <!--col-right sidebar-->
            </div>
            <!--row-->
        </div>
        <!--main-container-inner-->
    </div>
    <!--main-container col2-left-layout-->


    <!-- For version 1,2,3,4,6 -->
@endsection


@section('javascript')
    <script src="{{url('/public/')}}/prasley/parsley.js"></script>


<script>
    // Log CONTACT_US to Google Analytics
    var contactUsForm = document.getElementById('contactusForm');
    contactUsForm.addEventListener('submit', function (event) {
        // Sends the event to Google Analytics
        gtag('event', 'CONTACT_US', {
            'event_category': 'CONTACT_US',
            'event_action': 'CONTACT_US'
        })
    });
</script>


@endsection
