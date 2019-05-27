@extends('layouts.app')


@section('metatitle') جملة أونلاين @stop

@section('metadescription') دلوقتي تقدر تشتري كل المنتجات الغذائية الجافة من خلال تطبيق جملة.أونلاين
حملة دلوقتي و وفر فلوسك ومجهودك @stop

@section('metaimage'){{url('/public/gomla/images/logo.jpg')}}@stop


@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        .pargraph {
            padding: 10px 20px;
            font-weight: 600;
            font-size: 15px;
        }
        .heading{
            font-weight: 800;
        }
    </style>
@endsection

@section('content')


    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>عن جملة</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN Main Container -->

    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">

        <div class="main container">
            <div class="row">
                <div class="std">
                    <div class="wrapper_bl" style="margin-top: 1px;">
                        <div class="form_background">

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        جملة أونلاين gomla.online هو أول تطبيق من نوعه يهدف لبيع المنتجات الغذائية
                                        الجافة
                                        الرائدة
                                        بالجملة بأسعار مخفضة إلى المستهلك النهائي من خلال تطبيق إلكتروني مميز (مجاني)
                                        صمم ليكون
                                        فريد
                                        من نوعه، سهل الإستخدام، ويتمتع بعرض بسيط للمنتجات، مع توفر كافة المعلومات التي
                                        قد
                                        تحتاجها
                                        أثناء عملية الشراء بداخله.
                                    </p>
                                </div>
                            </div>

                            <br>
                            <br>
                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        يستهدف جملة أونلاين gomla.online توفير أفضل الأسعار التنافسية، والتي تقل بنسبة
                                        كبيرة عن
                                        أسعار تجارة التجزئة العادية (السوبر ماركت) و ذلك بإضافة هامش ربح بسيط لتقليل
                                        تكلفة وصول
                                        المنتج النهائي للعميل.
                                    </p>
                                </div>
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">

                                        يتيح جملة أونلاين gomla.online للمستهلك فرصة المقارنة، الاختيار، والشراء ما بين
                                        العديد من
                                        المنتجات المميزة، وإمكانية تحديد توقيت الاستلام حسب الرغبة. كما يوفر استخدام
                                        تطبيق جملة
                                        أونلاين gomla.online وسائل دفع متعددة للمستهلك؛ حيث يمكن الدفع نقداً عند التوصيل
                                        أوالدفع
                                        باستخدام بطاقات الائتمان عند الاستلام أو الدفع باستخدام بطاقات الائتمان عبر
                                        الإنترنت.
                                    </p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="heading">المناطق المستهدفة:</h2>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        يهدف جملة أونلاين gomla.online إلى الإنتشار والتوسع خلال السنة الأولى من التشغيل
                                        في معظم
                                        مناطق القاهرة الكبرى و سيتم البدء بتغطية المناطق الآتية:
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        1) المقطم
                                    <p class="pargraph">
                                        2) المعادي
                                    </p>
                                    <p class="pargraph">
                                        3) القاهرة الجديدة
                                    </p>

                                    <p class="pargraph">
                                        4) الرحاب

                                    </p>

                                    <p class="pargraph">
                                        5) مدينتي

                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="heading"> رحلة العميل:</h2>
                                </div>
                            </div>

                            <p class="pargraph">
                                1) تنزيل التطبيق او استخدام الموقع، وإنشاء حساب مجاني
                            </p>
                            <p class="pargraph">
                                2) استعراض وتحديد المنتجات المرغوبة
                            </p>
                            <p class="pargraph">
                                3) اختيار وسيلة الدفع:
                                1) نقداً عند الاستلام
                                2) بطاقات الائتمان عند الاستلام
                                3) بطاقات الائتمان عبر الانترنت
                            </p>

                            <p class="pargraph">

                                4) توصيل المشتريات والدفع: في خلال مدة أقصاها 3 ساعات على مدار اليوم
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--main-container-->

    </div> <!--col1-layout-->



    <!-- For version 1,2,3,4,6 -->


@endsection


@section('javascript')
    <script src="{{url('/public/')}}/prasley/parsley.js"></script>



@endsection