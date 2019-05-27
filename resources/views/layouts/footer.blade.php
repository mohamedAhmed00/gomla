<style>
    .footer-social li
    {
        display: block !important;
        margin-left: 0 !important;
        margin-top: 10px !important;
    }

</style>
<!-- START FOOTER AREA -->
<footer id="footer" style="background: #f6f6f6;" class="footer-area">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="footer-top-inner gray-bg">
                    <div class="row" style="text-align: right;direction: rtl">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">راسلنا</h4>
                                <div class="footer-message">
                                    <form action="#">
                                        <input type="text" name="name" placeholder="ادخل الاسم . . .">
                                        <input type="text" name="email" placeholder="ادخل البريد الالكتروني">
                                        <textarea class="height-80" name="message" placeholder="ادخل الرساله"></textarea>
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">ارسال</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">حسابي</h4>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>حسابي</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>قائمه المفضله</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>السلة</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>تسجيل الدخول</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>حساب جديد</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>الشراء</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>تكمله الشراء</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 hidden-md hidden-sm">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">التواصل الاجتماعي</h4>
                                <ul class="footer-social ">
                                    <li>
                                        <a class="facebook social" href="https://www.facebook.com/GomlaOnline.eg/?ref=br_rs" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="facebook social" href="https://www.instagram.com/gomlaonlineegy/" title="instagram"><i class="zmdi zmdi-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="facebook social" href="https://www.youtube.com/watch?v=JnagYLFgd-w" title="youtube"><i class="zmdi zmdi-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a class="facebook social" href="https://play.google.com/store/apps/details?id=com.pam.gomla.android&hl=en" title="RSS"><i class="zmdi zmdi-android"></i></a>
                                    </li>
                                    <li>
                                        <a class="facebook social" href="https://itunes.apple.com/us/app/gomla-online/id1233850051?mt=8" title="RSS"><i class="zmdi zmdi-apple"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4">
                            <div class="single-footer footer-about">
                                <div class="footer-logo">
                                    <img src="{{ asset('images/logo1.jpeg') }} "  style="width: 100px;" alt="">
                                </div>
                                <div class="footer-brief">
                                    <p >يتيح جملة أونلاين gomla.online للمستهلك فرصة المقارنة، الاختيار، والشراء ما بين العديد من المنتجات المميزة، وإمكانية تحديد توقيت الاستلام حسب الرغبة. كما يوفر استخدام تطبيق جملة أونلاين gomla.online وسائل دفع متعددة للمستهلك؛ حيث يمكن الدفع نقداً عند التوصيل أوالدفع باستخدام بطاقات الائتمان عند الاستلام أو الدفع باستخدام بطاقات الائتمان عبر الإنترنت.</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom black-bg">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="copyright">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="copyright-text">
                                <p>&copy; <a href="#" target="_blank">Subas</a> 2018. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <ul class="footer-payment text-right">
                                <li>
                                    <a href="#"><img src="{{ asset('gomla/img/payment/1.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('gomla/img/payment/2.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('gomla/img/payment/3.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('gomla/img/payment/4.jpg') }}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER AREA -->

<!-- START QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product clearfix">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" id="modal_img" src="{{ asset('gomla/img/product/quickview.jpg') }}">
                            </div>
                        </div><!-- .product-images -->
                        <div class="product-info">
                            <h1 id="modal_header_title"></h1>
                            <div class="price-box-3">
                                <div class="s-price-box">
                                    <span class="new-price" id="modelPrice"></span>
                                </div>
                            </div>
                            <div class="quick-add-to-cart">
                                <span id="modal_button" style="margin-top:10px">
                                </span>
                                <script id="modal_script"></script>
                            </div>

                            <div class="quick-add-to-cart">
                                <span id="modal_desc" style="margin-top:10px">
                                </span>
                            </div>
                            </div>

                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->

<!--style-customizer start -->
<!-- Button trigger modal -->


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="homeSkipLoginBtn">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle">تسجيل الدخول</h5>

            </div>
            <div class="modal-body">
                <div id="responseDone-erorr" class="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        إغلاق
                    </button>
                    <a type="button" href="{{ url('login') }}" class=" btn-danger">تسجيل الدخول</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel">
        <div id="responseDone-erorr" class="modal-dialog modal-sm" role="document">

        </div>
    </div>
</div>


{{--<div id="success" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"--}}
     {{--aria-labelledby="mySmallModalLabel">--}}
    {{--<div class="modal-dialog modal-sm" role="document">--}}

        {{--<div id="responseDone" width="200px" class="popup modal-content">--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}