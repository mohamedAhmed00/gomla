@include('layouts.head')
<body style="font-family: 'Amiri'">

<style>
    .cate-img {
        background-color: #f6f6f6 no-repeat scroll center center;
        background-image: url('{{ $imglink }}');
        background-size: 100% 100%
    }
</style>
<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
@include('layouts.header')

@include('layouts.nav')
<!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section plr-200 mb-80">
        <div class="breadcrumbs overlay-bg cate-img" id="cate-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title" style="color:#000"><a href="{{url("/")}}"
                                                                                title="الذهاب إلي الرئيسيه">الرئيسية</a>
                            </h1>
                            <h1 class="breadcrumbs-title" style="color:#000;padding-top: 10px;padding-bottom: 30px">
                                @if(isset($catNames) && isset($catNames->mainCat))
                                    <a id="cate-link" href="{{url('categories/'.$catNames->mainCat->id)}}"><h2
                                                id="cate-h2" style="color:#000">{{$catNames->mainCat->name}}</h2></a>

                                @endif
                            </h1>

                        </div>
                        <div class="page-title">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS SETCTION END -->
    <input type="hidden" name="" id="category" value="{{ Request::url() }}">
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">
        <style>
            .pagination {
                padding: 10px;
                box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 88%;
                margin-left: 10%;
            }

            .pagination .page-item {
                display: inline-block;
                margin-right: 3px;
            }

            .pagination .page-item .page-link {
                border: 1px solid #eee;
                color: #999999;
                display: block;
                font-family: roboto;
                font-size: 13px;
                font-weight: 400;
                height: 40px;
                line-height: 28px;
                text-align: center;
                width: 40px;
            }

            .pagination .active .page-link, .pagination .page-item:hover a, .pagination .active:hover .page-link {
                border-color: #ff7f00;
                background-color: #ff7f00;
                color: #ccc
            }

            .pagination .active .page-link {
                background-color: #ff7f00;
                color: #ccc
            }
        </style>
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
                                    <script src="{{ asset('gomla/js/vendor/jquery-3.1.1.min.js') }}"></script>
                                    <!-- Bootstrap framework js -->
                                    <script src="{{ asset('gomla/js/bootstrap.min.js') }}"></script>
                                    <div class="row" id="data">
                                        <!-- product-item start -->
                                        <?php $products = $pageproducts->all() ?>
                                        @foreach($products as $product)
                                            @php


                                                    @endphp
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item product-item-2">
                                                    <div class="product-img">
                                                        <a style="cursor: pointer"
                                                           onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $product->id }}')">
                                                            @if(isset($product->image))
                                                                <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                                     style="height: 300px" alt="{{$product->name}}">
                                                            @else
                                                                <img src="{{asset('gomla/images/blog-banner.png')}}"
                                                                     alt="{{$product->name}}" style="height: 300px">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a style="cursor: pointer"
                                                               onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $product->id }}')">{{ $product->name }}</a>
                                                        </h6>
                                                        <h6 class="brand-name">{{ $product->brand }}</h6>
                                                        <h3 class="pro-price">{{number_format ($product->standard_rate , 2, '.', ',')}}
                                                            جنيه</h3>
                                                    </div>
                                                    <ul class="action-button">
                                                        <li>
                                                            <button title="Wishlist"
                                                                    onclick="wishlist( '{{$product->id}}' , '{{ $product->name  }}' )"
                                                                    id="addtofav1{{$product->id}}"><i
                                                                        class="zmdi zmdi-favorite"></i></button>
                                                        </li>
                                                        <li>
                                                            <a title="Quickview"><i class="zmdi zmdi-zoom-in"
                                                                                    onclick="view('{{ $product->name }}','{{number_format ($product->standard_rate , 2, ".",",")}}','http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}','{{ preg_replace('/[\s]/', '', $product->description) }} ','{{ $product->id }}')"></i></a>
                                                        </li>
                                                        <li>
                                                            <button title="Add to cart"
                                                                    onclick="addToCart('{{$product->id}}','1')"
                                                                    id="hpaddtocart1{{$product->id}}"><i
                                                                        class="zmdi zmdi-shopping-cart-plus"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button title="Add to cart" id="plus{{$product->id}}"><i
                                                                        class="zmdi zmdi-plus"></i></button>
                                                        </li>
                                                        <li>
                                                            <input id="qty{{$product->id}}" type="text"
                                                                   style="width:30px;height: 30px;padding: 0;text-align: center"
                                                                   value="1">
                                                        </li>
                                                        <li>
                                                            <button title="Add to cart" id="minus{{$product->id}}"><i
                                                                        class="zmdi zmdi-minus"></i></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <script>

                                                $("#minus{{$product->id}}").click(function () {
                                                    let x = $("#qty{{ $product->id }}").val();
                                                    --x;
                                                    if(x > 0)
                                                    {
                                                        $("#qty{{ $product->id }}").val(x);
                                                    }
                                                });
                                                $("#plus{{$product->id}}").click(function () {
                                                    let x = $("#qty{{ $product->id }}").val();
                                                    ++x;
                                                    $("#qty{{ $product->id }}").val(x)

                                                });
                                            </script>
                                        @endforeach


                                    </div>
                                </div>
                                <ul class="pagination" role="navigation">

                                    <li class="page-item">
                                        <a class="page-link" onclick="prev()" rel="prev"
                                           aria-label="prev &amp;raquo;"><</a>
                                    </li>
                                    @for($i = 1;$i<$count;$i++)
                                        @if($i == 1)
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">{{ $i }}</span>
                                            </li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                                     onclick="pagnation('{{ $i }}','{{ $item_group }}')">{{ $i }}</a>
                                            </li>
                                        @endif

                                    @endfor

                                    <li class="page-item">
                                        <a class="page-link" onclick="next()" rel="next"
                                           aria-label="Next &amp;raquo;">></a>
                                    </li>
                                </ul>

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
                    <style>
                        .custom-combobox {
                            position: relative;
                            display: inline-block;
                        }

                        .custom-combobox-toggle {
                            position: absolute;
                            top: 0;
                            bottom: 0;
                            margin-left: -1px;
                            padding: 0;
                        }

                        .custom-combobox-input {
                            margin: 0;
                            padding-top: 2px;
                            padding-bottom: 5px;
                            padding-right: 5px;
                        }

                        .ui-button .ui-icon {
                            margin-top: 6px;
                        }

                        .custom-combobox {
                            width: 100%;
                        }

                        .custom-combobox .custom-combobox-input {
                            width: 100%;
                            height: 30px;
                            background: none;
                        }

                        .pagination .page-item {
                            cursor: pointer;
                        }
                    </style>

                    {{--start foreach categories--}}
                    <div class="col-md-3 col-xs-12">
                        <!-- widget-categories -->
                        <aside class="widget widget-categories box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20" style="text-align: right;direction: rtl">
                                الاقسام</h6>
                            <div id="cat-treeview" class="product-cat">
                                <ul style="text-align: right;direction: rtl">
                                    @foreach($categories as $onecat)
                                        <li class="closed collapsable">
                                            @if($onecat->sub_categories != null )
                                                <a onclick="cate('{{url('products/'.$onecat->id)}}')"> <i
                                                            class="zmdi zmdi-plus"></i> {{$onecat->name}}</a>
                                            @else
                                                <a onclick="cate('{{url('products/'.$onecat->id)}}')">{{$onecat->name}}</a>
                                            @endif
                                            @if($onecat->sub_categories != null )
                                                <ul>

                                                    @foreach($onecat->sub_categories as $subcats)
                                                        <li style="margin-right:20px" style="cursor: pointer">
                                                            <a>
                                                                <input onclick="cate('{{url('products/'.$subcats->id)}}')"
                                                                       type="radio" name="categpry"/> {{$subcats->name}}
                                                            </a>
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

                        <aside class="widget shop-filter box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20">السعر</h6>
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input value="You range :" type="submit">
                                    <input id="amount" name="price" placeholder="Add Your Price" type="text">
                                </div>
                                <div id="slider-range"
                                     class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"
                                         style="left: 0%; width: 48.6667%;"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" id="slider-left"
                                          tabindex="0" style="left: 0%;"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" id="slider-right"
                                          tabindex="0" style="left: 48.6667%;"></span>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget shop-filter box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20">الشركه المصنعة</h6>
                            <div class="ui-widget">
                                <select id="combobox">

                                    @foreach($brands as $key => $brand)
                                        @if($key == 0)

                                            <option value="">-</option>
                                            <option value="{{ $brand['brand'] }}">{{ $brand['brand'] }}</option>
                                        @else
                                            <option value="{{ $brand['brand'] }}">{{ $brand['brand'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
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
<div class="modal fade" id="exampleModalType" style="top:100px" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="homeSkipLoginBtn">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="failTitle">الكميه نفذت لهذا المنتج</h5>

            </div>
            <div class="modal-body">
                <div id="responsetype-erorr" class="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        إغلاق
                    </button>
                    <a type="button" class=" btn-danger"> الكمية نفذت لهذا المنتج</a>
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

<!-- Placed JS at the end of the document so the pages load faster -->
<script src="{{ asset('gomla/js/vendor/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('gomla/js/bootstrap.min.js') }}"></script>
<!-- jquery.nivo.slider js -->
<script src="{{ asset('gomla/lib/js/jquery.nivo.slider.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDacJcoyPCr-jdlP9HK93h3YKNyf710J0"></script>
<script src="{{ asset('gomla/js/map.js') }}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('gomla/js/plugins.js') }}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('gomla/js/main.js') }}"></script>
<script>
    function view(title, price, img, desc, id) {
        var addtocart = "addToCart2('" + id + "','1')";
        var data = '<button onclick=' + addtocart + ' class="btn btn-danger">اضافة للسلة</button><button title="Add to cart" style="margin-left:15px;color:#fff;background:#ff7f00" id="pluss"><i class="zmdi zmdi-plus"></i></button><input id="qtys" type="text" style="border: solid 1px #ccc;width:30px;height: 30px;padding: 0;text-align: center" value="1"><button title="Add to cart" style="color:#fff;background:#ff7f00" id="minuss"><i class="zmdi zmdi-minus"></i></button>';
$('#productModal').modal('show');
$("#modal_img").attr('src',img);
$("#modal_desc").html(desc);
$("#modal_header_title").text(title);
$("#modal_button").html(data);
$("#modelPrice").text(price + " " + "جنية ");
}

</script>

<script>
$("#submenu").click(function (event) {
    event.preventDefault();
});
</script>
<script type="text/javascript" src="{{asset('js/parsley.js')}}"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $(".closed-hitarea:first").trigger('click');
    });
    $('form').parsley();

    var loadingimg = "{{ asset('images/loading5.gif') }}";
    $('#register').one('click', function () {

        $('#loading-img').html('<img style="height:100px;" src="' + loadingimg + '" />');
//            jQuery('#loading-img').hide(10000);


        $('form').submit(function (e) {
            e.preventDefault(e);

            $.ajax({
                url: "{{URL::to('register')}}",
                crossDomain: true,
                contentType: 'application/json',
                type: 'POST',
                data: JSON.stringify({
                    'name': $('input[name=name]').val(),
                    'email': $('input[name=UserEmail]').val(),
                    'phone': $('input[name=phone]').val(),
                    'address_phone': $('input[name=phone]').val(),
                    'password': $('input[name=UserPassword]').val(),
                    'floor_number': $('select[name=floor_number]').val(),
                    'apartment_number': $('input[name=apartment_number]').val(),
                    'building_number': $('input[name=building_number]').val(),
                    'street': $('input[name=street]').val(),
                    'nearest_landmark': $('input[name=nearest_landmark]').val(),
                    'region': $('select[name=region]').val(),
                    'city': "القاهره",
                    'lat': $('input[name=lat]').val(),
                    'lng': $('input[name=lng]').val(),
                    'address_title': $('input[name=address_title]').val(),
                    '_token': $('input[name=_token]').val()
                }),
                success: function (response) {
                    if (response == 1) {
                        $("#responseDone").html('<p>' + "تم التسجيل بنجاح" + '</p>');
                        window.scrollTo(0, 0);
                        $('.bs-example-modal-sm').modal('show');
                        $('#loading-img').hide();
                        window.setTimeout(function () {
                            window.location.href = '{{url('/')}}';
                        }, 1000);

                    } else {

                        $("#responseDone").html('<p>' + response + '</p>');
                        $("#responseDone p").css('color', 'red');
                        window.scrollTo(0, 0);

                        $('.bs-example-modal-sm').modal('show');
                        $('#loading-img').hide();
                    }


                },
                error: function (response) {
                    $("#responseDone").html('<p>' + response + '</p>');
                    $("#responseDone p").css('color', 'red');
                    window.scrollTo(0, 0);
                    $('.bs-example-modal-sm').modal('show');


                }
                ,
            });
        });
    })
    ;
</script>
<script>
    // Log LOGIN_NORMAL to Google Analytics
    var loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', function (event) {
        // Sends the event to Google Analytics
        gtag('event', 'LOGIN_NORMAL', {
            'event_category': 'LOGIN_SCREEN',
            'event_action': 'LOGIN_NORMAL'
        })
    });

    // Log LOGIN_NORMAL to Google Analytics
    var facebookLogin = document.getElementById('Facebook');
    facebookLogin.addEventListener('click', function (event) {
        // Sends the event to Google Analytics
        gtag('event', 'LOGIN_FACEBOOK', {
            'event_category': 'LOGIN_SCREEN',
            'event_action': 'LOGIN_FACEBOOK'
        })
    });
</script>
<script>
    // Log LOGIN_SKIP to Google Analytics
    var skipLogin = document.getElementById('homeSkipLoginBtn');
    skipLogin.addEventListener('click', function (event) {
        // Sends the event to Google Analytics
        gtag('event', 'LOGIN_SKIP', {
            'event_category': 'HOME_SCREEN',
            'event_action': 'LOGIN_SKIP'
        })
    });
</script>
<script>
    $("#slider-range").slider({
        range: true,
        min: 1,
        max: 300,
        values: [1, 300],
        slide: function (event, ui) {
            $("#amount").val("" + ui.values[0] + "-" + ui.values[1]);
        }
    });
    $("#amount").val($("#slider-range").slider("values", 0) +
        "-" + $("#slider-range").slider("values", 1));
    let category = $('#category').val();

    $(".ui-state-default").mouseup(function () {
        $.ajax({
            type: 'POST',
            url: '/pagenation',
            data: {
                "_token": "{{ csrf_token() }}",
                'amount': $("#amount").val(),
                'cate': category,
                'pageNumber': '{{$pageNumber}}',
                'itemGroup': '1',
                'brand': $(".custom-combobox-input").val()
            },
            success: function (data) {
                $("#cate-h2").html(data.name);
                $("#cate-link").attr('href', '{{ url("/categories/") }}' + data.cateId + '');
                $("#cate-img").css('background-image', 'url("http://163.172.33.245/goomla/storage/app/erpnext/' + data.img + '")');
                $(".pagination").html(data.data);
                $("#data").html(data.products);
            }
        });
    });
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $.widget("custom.combobox", {
            _create: function () {
                this.wrapper = $("<span>")
                    .addClass("custom-combobox")
                    .insertAfter(this.element);

                this.element.hide();
                this._createAutocomplete();
                this._createShowAllButton();
            },

            _createAutocomplete: function () {
                var selected = this.element.children(":selected"),
                    value = selected.val() ? selected.text() : "";

                this.input = $("<input>")
                    .appendTo(this.wrapper)
                    .val(value)
                    .attr("title", "")
                    .addClass("custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left")
                    .autocomplete({
                        delay: 0,
                        minLength: 0,
                        source: $.proxy(this, "_source")
                    })
                    .tooltip({
                        classes: {
                            "ui-tooltip": "ui-state-highlight"
                        }
                    });

                this._on(this.input, {
                    autocompleteselect: function (event, ui) {
                        ui.item.option.selected = true;
                        this._trigger("select", event, {
                            item: ui.item.option
                        });
                    },

                    autocompletechange: "_removeIfInvalid"
                });
            },


            _source: function (request, response) {
                var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");
                response(this.element.children("option").map(function () {
                    var text = $(this).text();
                    if (this.value && (!request.term || matcher.test(text)))
                        return {
                            label: text,
                            value: text,
                            option: this
                        };
                }));
            },


            _destroy: function () {
                this.wrapper.remove();
                this.element.show();
            }
        });

        $("#combobox").combobox();
        $("#toggle").on("click", function () {
            $("#combobox").toggle();
        });
    });
    $(".ui-widget").focusout(function () {
        let combobox = $(".custom-combobox-input").val();
        let amount = $('#amount').val();
        let category = $('#category').val();
        $.ajax({
            type: 'POST',
            url: '/pagenation',
            data: {
                "_token": "{{ csrf_token() }}",
                'pageNumber': '{{$pageNumber}}',
                'itemGroup': '1',
                'amount': amount,
                'brand': combobox,
                'cate': category
            },
            success: function (data) {
                $("#cate-h2").html(data.name);
                $("#cate-link").attr('href', '{{ url("/categories/") }}' + data.cateId + '');
                $("#cate-img").css('background-image', 'url("http://163.172.33.245/goomla/storage/app/erpnext/' + data.img + '")');
                $(".pagination").html(data.data);
                $("#data").html(data.products);
            }
        });
    });

    function pagnation(pageNumber, itemGroup) {
        let amount = $('#amount').val();
        let combobox = $('#combobox').val();
        let category = $('#category').val();
        $.ajax({
            type: 'POST',
            url: '/pagenation',
            data: {
                "_token": "{{ csrf_token() }}",
                'pageNumber': pageNumber,
                'itemGroup': itemGroup,
                'amount': amount,
                'brand': combobox,
                'cate': category

            },
            success: function (data) {
                $("#cate-h2").html(data.name);
                $("#cate-link").attr('href', '{{ url("/categories") }}/' + data.cateId + '');
                $("#cate-img").css('background-image', 'url("http://163.172.33.245/goomla/storage/app/erpnext/' + data.img + '")');
                $(".pagination").html(data.data);
                $("#data").html(data.products);
            }
        });
    }

    function next() {
        let num = parseInt($('.pagination .active .page-link').html()) + 1;
        let max = parseInt($('.pagination .page-link').length) - 2;
        if (max > num) {
            pagnation(num, 0);
        }
    }

    function prev() {
        let num = parseInt($('.pagination .active .page-link').html()) - 1;
        if (num >= 0) {
            pagnation(num, 0);
        }
    }

    function cate(cate) {
        $('#category').val(cate);
        let amount = $('#amount').val();
        let combobox = $('#combobox').val();
        $.ajax({
            type: 'POST',
            url: '/pagenation',
            data: {
                "_token": "{{ csrf_token() }}",
                'pageNumber': 1,
                'itemGroup': 1,
                'amount': amount,
                'brand': combobox,
                'cate': cate

            },
            success: function (data) {
                $("#cate-h2").html(data.name);
                $("#cate-link").attr('href', '{{ url("/categories/") }}' + data.cateId + '');
                $("#cate-img").css('background-image', 'url("http://163.172.33.245/goomla/storage/app/erpnext/' + data.img + '")');
                $(".pagination").html(data.data);
                $("#data").html(data.products);
            }
        });
    }
</script>

<script>
    function wishlist(id, name) {
        $.ajax({
            type: 'POST',
            url: '{{url('addwishlist')}}',
            data: {
                "_token": "{{ csrf_token() }}",
                'id': id,
                'name': name
            },
            success: function (data) {
                if (data == 2) {
                    $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                    $('#exampleModalLong').modal('show');
                } else if (data.num == 1) {
                    $('#wishlist_count').html(data.count);
                    $('#addtofav1' + id).css("color", "red");
                    $('#addtofav' + id).css("color", "red");
                } else {
                    $('#addtofav1' + id).css("color", "black");
                    $('#addtofav' + id).css("color", "black");
                }
            }
        });
    }

    function addToCart(id, qty) {
        let quantity = $("#qty" + id).val();
        $.ajax({

            type: 'POST',
            url: '{{url('addcart')}}',
            crossDomain: true,
            contentType: 'application/json',
            data: JSON.stringify({
                "_token": "{{ csrf_token() }}",
                'id': id,
                'qty': quantity
            }),
            success: function (data) {
                if (data == 1) {

                    $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                    $('#exampleModalLong').modal('show');

                } else if (typeof data === 'string' || data instanceof String) {
                    $("#responseType-erorr").html('<p style="color: red" >' + "هذا المنتج غير متوفر " + '</p>');
                    $('#exampleModalType').modal('show');
                } else {
                    $(".cart-quantity").html(data.count);
                    $("#cart").html(data.cart);
                    $("#order-price").html(data.total + "جنية");
                    $("#order-total-price").html((data.total + 15) + 'جنية');
                    $("#order-total-price").html((data.total + 15) + 'جنية');
                    $("#cartTotalPrice").html(data.total + 'جنية');
                    $("#tprice").html((data.total + 15) + 'جنية');
                    $("#final-price").html(data.total + 'جنية');
                    // $('#cart-sidebar').html('');
                    // $("#responseDone").html('<p>' + "تم اضافة المنتج بنجاح" + '</p>');
                    // $('.bs-example-modal-sm').modal('show');
                    // $("#countapp1").html(data.length);
                    // $("#countapp").html(data.length);
                    // getCart(response);
                }
            }
        });
    }
    function addToCart2(id, qty) {
        let quantity = $("#qtys").val();
        $.ajax({

            type: 'POST',
            url: '{{url('addcart')}}',
            crossDomain: true,
            contentType: 'application/json',
            data: JSON.stringify({
                "_token": "{{ csrf_token() }}",
                'id': id,
                'qty': quantity
            }),
            success: function (data) {
                if (data == 1) {

                    $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                    $('#exampleModalLong').modal('show');

                } else if (typeof data === 'string' || data instanceof String) {
                    $("#responseType-erorr").html('<p style="color: red" >' + "هذا المنتج غير متوفر " + '</p>');
                    $('#exampleModalType').modal('show');
                } else {
                    $(".cart-quantity").html(data.count);
                    $("#cart").html(data.cart);
                    $("#order-price").html(data.total + "جنية");
                    $("#order-total-price").html((data.total + 15) + 'جنية');
                    $("#order-total-price").html((data.total + 15) + 'جنية');
                    $("#cartTotalPrice").html(data.total + 'جنية');
                    $("#tprice").html((data.total + 15) + 'جنية');
                    $("#final-price").html(data.total + 'جنية');
                    // $('#cart-sidebar').html('');
                    // $("#responseDone").html('<p>' + "تم اضافة المنتج بنجاح" + '</p>');
                    // $('.bs-example-modal-sm').modal('show');
                    // $("#countapp1").html(data.length);
                    // $("#countapp").html(data.length);
                    // getCart(response);
                }
            }
        });
    }
    function addItemToCart(id) {
        var qty = $("#french-hens").val();
        $.ajax({
            type: 'POST',
            url: '{{url('addcart')}}',
            crossDomain: true,
            contentType: 'application/json',
            data: JSON.stringify({
                "_token": "{{ csrf_token() }}",
                'id': id,
                'qty': qty
            }),
            success: function (data) {
                if (data == 1) {
                    $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                    $('#exampleModalLong').modal('show');

                } else {
                    $('#productModal').modal('hide');
                    $(".cart-quantity").html(data.count);
                    $("#cart").html(data.cart);
                    // $('#cart-sidebar').html('');modal_button
                    $("#responseDone").html('<p>' + "تم اضافة المنتج بنجاح" + '</p>');
                    // $('.bs-example-modal-sm').modal('show');

                    // getCart(response);


                }
            }
        });
    }

    // function plus(id){
    //     addToCart(id,'1');
    // }
    // function minus(id){
    //     alert("asd");
    //
    // }

</script>
<script>
    $("#modal_button").on('click','#minuss',function(){
        let x = $("#qtys").val();
        --x;
        if(x > 0)
        {
            $("#qtys").val(x);
        }

    });
    $("#modal_button").on('click','#pluss',function(){
        let x = $("#qtys").val();
        ++x;
        $("#qtys").val(x);
    });

</script>
</body>

</html>




{{--<script>--}}
    {{--$(".minus1").on("click",function() {--}}
        {{--alert("asd");--}}
        {{--let x = $(".qty1").val();--}}
        {{----x;--}}
        {{--$(".qty1").val(x);--}}
    {{--});--}}
    {{--$(".plus1").on('click',function(){--}}
        {{--let x = $(".qty1").val();--}}
        {{--++x;$(".qty1").val(x);--}}
    {{--});--}}
{{--</script>--}}
{{--<script>--}}
    {{--function view(title, price, img, desc, id) {--}}
        {{--$('#productModal').modal('show');--}}
        {{--$("#modal_img").attr('src',img);--}}
        {{--$("#modal_desc").html(desc);--}}
        {{--$("#modal_header_title").text(title);--}}
        {{--$("#modal_button").html(data);--}}
        {{--$("#modelPrice").text(price + " " + "جنية ");--}}
    {{--}--}}

{{--</script>--}}