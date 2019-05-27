@include('layouts.head')

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
@include('layouts.header')

@include('layouts.nav')

    <div class="breadcrumbs-section plr-200 mb-80">
        <div class="breadcrumbs overlay-bg" style="background: url('{{ asset('gomla/images/coverphoto.jpg') }}') no-repeat scroll center center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title" style="color:#000;">عن جمله</h1>
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
        .par
        {
            padding: 10px 20px;
            font-weight: 600;
            font-size: 18px;
            margin: 0 0 10px;
            color: #000 !important;
            margin-bottom: 15px;
        }
        .pa
        {
            padding: 10px 20px;
            font-weight: 600;
            font-size: 18px;
            margin: 0 0 10px;
            color: #000 !important;
        }
        .header
        {
            padding: 10px 20px;
            font-weight: bold;
            font-size: 15px;
            margin: 0 0 10px;
            color: #000 !important;
        }
        .ul
        {
            list-style-type: circle;
        }
        .li
        {
            margin-right: 10px;
            font-size: 18px;
            font-weight: bold;
            font-family: 'Amiri';
            line-height: 38px;
            margin-bottom: 30px;
        }
        .zmdi
        {
            color:#901a1d;
            font-size: 12px;
        }
        .sub-item
        {
            margin-right: 20px;
        }
    </style>
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">
<?php

$crl2 = curl_init();

curl_setopt($crl2, CURLOPT_URL, 'http://163.172.33.245/goomla/api/districts');
curl_setopt($crl2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($crl2, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($crl2, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($crl2, CURLOPT_SSL_VERIFYPEER, false);

$rest2 = curl_exec($crl2);
$districts = json_decode($rest2);
?>
        <!-- ABOUT SECTION START -->
        <div class="about-section mb-80">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <div class="about-description mt-50" style="text-align: right; direction: rtl ; color: #000" >
                            <ul class="footer-menu">
                                <i class="zmdi zmdi-circle"></i> <span class="li" >جملة أونلاين gomla.online هو أول تطبيق من نوعه يهدف لبيع المنتجات الغذائية الجافة الرائدة بالجملة بأسعار مخفضة إلى المستهلك النهائي من خلال تطبيق إلكتروني مميز (مجاني) صمم ليكون فريد من نوعه، سهل الإستخدام، ويتمتع بعرض بسيط للمنتجات، مع توفر كافة المعلومات التي قد تحتاجها أثناء عملية الشراء بداخله.</span><br><div class="clearfix"></div>
                                <i class="zmdi zmdi-circle"></i> <span class="li"> يستهدف جملة أونلاين gomla.online توفير أفضل الأسعار التنافسية، والتي تقل بنسبة كبيرة عن أسعار تجارة التجزئة العادية (السوبر ماركت) و ذلك بإضافة هامش ربح بسيط لتقليل تكلفة وصول المنتج النهائي للعميل.</span><br><div class="clearfix"></div>
                                <i class="zmdi zmdi-circle"></i> <span class="li">يتيح جملة أونلاين gomla.online للمستهلك فرصة المقارنة، الاختيار، والشراء ما بين العديد من المنتجات المميزة، وإمكانية تحديد توقيت الاستلام حسب الرغبة. كما يوفر استخدام تطبيق جملة أونلاين gomla.online وسائل دفع متعددة للمستهلك؛ حيث يمكن الدفع نقداً عند التوصيل أوالدفع باستخدام بطاقات الائتمان عند الاستلام أو الدفع باستخدام بطاقات الائتمان عبر الإنترنت.</span><br><div class="clearfix"></div>
                                <br>

                                <i class="zmdi zmdi-circle"></i> <span class="li">  يهدف جملة أونلاين gomla.online إلى الإنتشار والتوسع خلال السنة الأولى من التشغيل في معظم مناطق القاهرة الكبرى و سيتم البدء بتغطية المناطق الآتية:</span><br><div class="clearfix"></div>
                                <i class="zmdi zmdi-circle"></i> <span class="li"> المناطق المستهدفة:</span><br><div class="clearfix"></div>
                                    @foreach($districts as $key => $val)

                                    <i class="zmdi zmdi-square-o sub-item"></i> <span class="li">   {{ $val->name }} </span><br>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SECTION END -->
    </section>
    <!-- End page content -->

@include('layouts.footer')
<!--style-customizer end -->
</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->
@include('layouts.endpage')