@include('layouts.head')

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
@include('layouts.header')

@include('layouts.nav')
    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section plr-200 mb-80">
        <div class="breadcrumbs overlay-bg" style="background: #f6f6f6 url('{{ asset('gomla/images/coverphoto.jpg') }}') no-repeat scroll center center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title" style="color:#000">اقسامنا</h1>
                            <ul class="breadcrumb-list">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS SETCTION END -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- SHOP SECTION START -->
        <div class="shop-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-xs-12">
                        <div class="shop-content">
                            <!-- Tab Content start -->
                            <div class="tab-content">
                                <!-- grid-view -->
                                <div role="tabpanel" class="tab-pane active" id="grid-view">
                                    <div class="row">
                                        <!-- product-item start -->
                                        @foreach($categories as $category)
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a>
                                                            @if($category['hasSubCategories'] != null)
                                                                <a href="{{url('categories/'.$category['id'])}}">
                                                                    @if(isset($category['images']))
                                                                        <img style="height: 350px;width: 100%;"  src="http://163.172.33.245/goomla/storage/app/erpnext/{{$category['images'][0]}}" alt="{{$category['name']}}">
                                                                    @else
                                                                        <img style="height: 350px;width: 100%;" src="{{asset('gomla/images/blog-banner.png')}}" alt="{{$category['name']}}">
                                                                    @endif
                                                                </a>
                                                            @else
                                                                <a href="{{url('products/'.$category['id'])}}">
                                                                    @if(isset($category['images']))
                                                                        <img style="height: 350px;width: 100%;"  src="http://163.172.33.245/goomla/storage/app/erpnext/{{$category['images'][0]}}" alt="{{$category['name']}}">
                                                                    @else
                                                                        <img style="height: 350px;width: 100%;" src="{{asset('gomla/images/blog-banner.png')}}" alt="{{$category['name']}}">
                                                                    @endif
                                                                </a>
                                                            @endif

                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            @if($category['hasSubCategories'] != null)
                                                                <a href="{{url('categories/'.$category['id'])}}" title="{{$category['name']}}" class="product-image">{{$category['name']}}</a>
                                                            @else
                                                                <a href="{{url('products/'.$category['id'])}}" title="{{$category['name']}}" class="product-image">{{$category['name']}}</a>
                                                            @endif
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <!-- Tab Content end -->

                        </div>
                    </div>
                    <?php
                    $crl2 = curl_init();

                    curl_setopt($crl2, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categorytree');
                    curl_setopt($crl2, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($crl2, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($crl2, CURLOPT_SSL_VERIFYPEER, false);

                    $rest2 = curl_exec($crl2);
                    $categories = json_decode($rest2);
                    ?>


                    {{--start foreach categories--}}
                    <div class="col-md-3 col-xs-12">
                        <!-- widget-categories -->
                        <aside class="widget widget-categories box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20" style="text-align: right;direction: rtl">الاقسام</h6>
                            <div id="cat-treeview" class="product-cat">
                                <ul style="text-align: right;direction: rtl">
                                    @foreach($categories as $onecat)
                                    <li class="closed collapsable">
                                            @if($onecat->sub_categories != null )
                                            <a onclick="cate('{{url('products/'.$onecat->id)}}')" > <i class="zmdi zmdi-plus"></i> {{$onecat->name}}</a>
                                            @else
                                            <a onclick="cate('{{url('products/'.$onecat->id)}}')" >{{$onecat->name}}</a>
                                            @endif
                                        @if($onecat->sub_categories != null )
                                            <ul>
                                                
                                                    @foreach($onecat->sub_categories as $subcats)
                                                     <li style="margin-right:20px" style="cursor: pointer">
                                                            <a href="{{url('products/'.$subcats->id)}}"> {{$subcats->name}}</a>
                                                    </li>
                                                   @endforeach
                                                
                                            </ul>
                                    @endif

                                    <!--level0-->
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </section>
    <!-- End page content -->

@include('layouts.footer')
<!--style-customizer end -->
</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->
@include('layouts.endpage')

<script>
    $(document).ready(function() {
    $(".closed-hitarea:first").trigger('click');
});
</script>