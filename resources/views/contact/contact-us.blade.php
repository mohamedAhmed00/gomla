@include('layouts.head')

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
@include('layouts.header')
<script src="{{ asset('gomla/js/vendor/jquery-3.1.1.min.js') }}"></script>
@include('layouts.nav')
    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section plr-200 mb-80">
        <div class="breadcrumbs overlay-bg" style="background: #f6f6f6 url('{{ asset('gomla/images/coverphoto.jpg') }}') no-repeat scroll center center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title" style="color:#000">اتصل بنا</h1>
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
</style>
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- ADDRESS SECTION START -->
        <div class="address-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-address box-shadow">
                            <i class="zmdi zmdi-pin"></i>
                            <h6>Cairo , </h6>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-address box-shadow">
                            <i class="zmdi zmdi-phone"></i>
                            <h6><a href="tel:0228462117">0228462117</a></h6>
                            <h6><a href="tel:0228462113">0228462113</a></h6>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-address box-shadow">
                            <i class="zmdi zmdi-email"></i>
                            <h6>support@gomla.online</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADDRESS SECTION END -->

        <!-- GOOGLE MAP SECTION START -->
        <div class="google-map-section">
            <div class="container-fluid">
                <div class="google-map plr-185">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
        <!-- GOOGLE MAP SECTION END -->

        <!-- MESSAGE BOX SECTION START -->
        <div class="message-box-section mt--50 mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="message-box box-shadow white-bg">
                            <form id="contact-form" action="{{url('/contact-us')}}"  method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="blog-section-title border-left mb-30">تواصل معنا</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="ادخل اسمك">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" placeholder="ادخل بريدك الالكتروني">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="ادخل رقم التليفون">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="custom-textarea" name="message" placeholder="نص الرسالة"></textarea>
                                        <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">ارسل الرسالة</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MESSAGE BOX SECTION END -->
    </section>
    <!-- End page content -->

@include('layouts.footer')
<!--style-customizer end -->
</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->
@include('layouts.endpage')
