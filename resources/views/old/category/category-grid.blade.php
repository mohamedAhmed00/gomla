@extends ('layouts.app')

@section('metatitle') جملة أونلاين @stop

@section('metadescription') دلوقتي تقدر تشتري كل المنتجات الغذائية الجافة من خلال تطبيق جملة.أونلاين
حمله دلوقتي و وفر فلوسك ومجهودك @stop

@section('metaimage'){{url('/public/gomla/images/logo.jpg')}}@stop 


@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {{--<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        .image {
            max-width: 500px;
            max-height: 350px;
            width: auto;
            height: auto;
            /*padding-top: 10px;*/
            /*padding-bottom: 10px;*/
        }

        .popup {
            padding: 20px 0px 10px 0px;
            text-align: center;
            /* line-height: 40px; */
            font-size: 18px;
            /* font-weight: 600; */
            /* height: 35px; */
            color: green;
        }
    </style>
@endsection



@section('content')

    <div class="page-heading"
         {{--@if($imglink!=null) style="background-image: url({{$imglink}}); background-size: cover;--}}
                 {{--background-repeat: no-repeat;" @endif--}}
    >

        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home"><a href="{{url("/")}}" title="اذهب إلي الرئيسيه">الرئيسيه</a> <span>—› </span>
                            </li>
                            {{--<li class="category1599"><a href="grid.html" title="">Salad</a> <span>—› </span></li>--}}
                            {{--<li class="category1600"><a href="grid.html" title="">Bread Salad</a> <span>—› </span></li>--}}
                            {{--<li class="category1601"><strong>Dakos</strong></li>--}}
                        </ul>
                    </div>
                    <!--col-xs-12-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <div class="page-title">
            <h2>الأقسام</h2>
        </div>
    </div>
    <!--breadcrumbs-->
    <!-- BEGIN Main Container col2-left -->
    <section class="main-container col2-left-layout bounceInUp animated">
        <!-- For version 1, 2, 3, 8 -->
        <!-- For version 1, 2, 3 -->
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-9 col-sm-push-3 product-grid">
                    <div class="pro-coloumn">
                        <article class="col-main">
                            <div class="toolbar">
                                {{--<div class="sorter">--}}
                                {{--<div class="view-mode"><span title="Grid" class="button button-active button-grid">&nbsp;</span><a--}}
                                {{--href="list.html" title="List" class="button-list">&nbsp;</a></div>--}}
                                {{--</div>--}}

                                <div id="sort-by">
                                    {{--<label class="left">Sort By: </label>--}}
                                    <ul>
                                        {{--<li><a href="#">Position<span class="right-arrow"></span></a>--}}
                                        {{--<ul>--}}
                                        {{--<li><a href="#">Name</a></li>--}}
                                        {{--<li><a href="#">Price</a></li>--}}
                                        {{--<li><a href="#">Position</a></li>--}}
                                        {{--</ul>--}}
                                        {{--</li>--}}
                                    </ul>
                                    {{--<a class="button-asc left" href="#" title="Set Descending Direction"><span--}}
                                    {{--class="top_arrow"></span></a>--}}
                                </div>

                                <div class="pager">
                                    <div id="limiter">
                                        <label> </label>
                                        <ul>
                                            {{--<li><a href="#">15<span class="right-arrow"></span></a>--}}
                                            {{--<ul>--}}
                                            {{--<li><a href="#">20</a></li>--}}
                                            {{--<li><a href="#">30</a></li>--}}
                                            {{--<li><a href="#">35</a></li>--}}
                                            {{--</ul>--}}
                                            {{--</li>--}}
                                        </ul>
                                    </div>
                                    <div class="pages">
                                        <label></label>
                                        {{--<ul class="pagination">--}}

                                        {{$categories->setPath('categories')->render()}}
                                        {{--</ul>--}}
                                    </div>
                                </div>

                            </div>
                            <div class="category-products">
                                <ul class="products-grid">
                                    @foreach($categories as $category)
                                        <li class="item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class=" image item-img-info">
                                                        @if($category['hasSubCategories'] != null)
                                                            <a href="{{url('categories/'.$category['id'])}}"
                                                               title="{{$category['name']}}" class="product-image">

                                                            </a>
                                                        @else
                                                            <a href="{{url('products/'.$category['id'])}}"
                                                               title="{{$category['name']}}" class="product-image">
                                                            </a>
                                                        @endif
                                                            @if(isset($category['images']))
                                                                <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$category['images'][0]}}"
                                                                     alt="{{$category['name']}}">
                                                            @else
                                                                <img src="{{url('/public/gomla/')}}/images/blog-banner.png"
                                                                     alt="{{$category['name']}}">

                                                            @endif
                                                        </a>

                                                        <div class="item-box-hover">
                                                            <div class="box-inner">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            @if($category['hasSubCategories']== "true")
                                                                <a href="{{url('categories/'.$category['id'])}}"
                                                                   title="{{$category['name']}}">{{$category['name']}}</a>
                                                            @else
                                                                <a href="{{url('products/'.$category['id'])}}"
                                                                   title="{{$category['name']}}">{{$category['name']}}</a>
                                                            @endif
                                                        </div>
                                                        <div class="item-content">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                        </article>
                    </div>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>

            {{--yield aside bar --}}

            @include('category.sidebar')

            {{--end yield side bar--}}

            <!--col-right sidebar-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </section>
    <!--main-container col2-left-layout-->

@endsection