@include('layouts.head')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<link href="{{asset('prasley/parsley.js')}}" rel="stylesheet" type="text/css"/>
<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
@include('layouts.header')

@include('layouts.nav')
        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg" style="background: #f6f6f6 url('{{ asset("gomla/images/coverphoto.jpg") }}') no-repeat scroll center center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title" style="color: #000">تسجيل عنوان جديد</h1>
                                <ul class="breadcrumb-list">

                                </ul>
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
        .widget-title
        {
            color: #000;
            font-weight: bold;
            font-size: 20px;
        }
        .login-account label , registered-customers label
        {
            color:#333;
            font-weight: bold;
            font-size: 18px;

        }
        .login-account input,.login-account select,.registered-customers input
        {
            border: solid 2px #ccc;
            color: #333;
        }
        .registered-customers p
        {
            color: #000;
            font-size: 15px;
            font-weight: bold;

        }
    </style>
        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">

            <!-- LOGIN SECTION START -->
            <div class="login-section mb-80">
                <div class="container">
                    <div class="row">
                        <!-- new-customers -->
                        <div class="col-md-12">
                            <div class="new-customers">
                                <form data-parsley-validate action="" name="addaddress" method="post" id="form">
                                    @csrf
                                    <h6 class="widget-title border-left mb-50">تسجيل جديد</h6>
                                    <div class="login-account p-30 box-shadow">
                                        <div class="row">
                                                                                   <div class="col-sm-6">
                                                <label for="city">المحافظة<em class="required">*</em></label>
                                                <select name="city" id="city" class="custom-select"
                                                        title="المحافظة">
                                                    <option selected value="القاهره">القاهره</option>
                                                </select>
                                            </div>
                                            <?php
                                            $ch3 = curl_init();

                                            curl_setopt($ch3, CURLOPT_URL, 'http://163.172.33.245/goomla/api/districts');
                                            curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
                                            curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, true);
                                            curl_setopt($ch3, CURLOPT_SSL_VERIFYHOST, false);
                                            curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
                                            $rest3 = curl_exec($ch3);
                                            $res3 = json_decode($rest3);
                                            $destricts = $res3;
                                            ?>
                                            <div class="col-sm-6">
                                                <label for="city">المنطقة<em class="required">*</em></label>
                                                <select class="custom-select" name="region">
                                                    @foreach($destricts  as $desc)
                                                        <option value="{{$desc->id}}">{{$desc->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>رقم التليفون<em class="required">*</em></label>
                                                <input data-parsley-required="true" type="text" name="phone" class="input-text" id="phone" placeholder="ادخل رقم تليفونك">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="street">رقم المنزل<em class="required">*</em></label>
                                                <input data-parsley-required="true" type="text" name="building_number" maxlength="12" size="12"
                                                       class="input-text"
                                                       id="building_number"
                                                       placeholder="رقم المنزل">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="floor_number">رقم الطابق<em class="required">*</em></label>
                                                <select class="custom-select" name="floor_number">
                                                    @for($i=0 ; $i<50 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>

                                            </div>
                                            <div class="col-sm-6">
                                                <label for="region">رقم الشقة<em class="required">*</em></label>
                                                <input data-parsley-required="true" type="text"
                                                       name="apartment_number"
                                                       class="input-text "
                                                       id="apartment_number"
                                                       placeholder="رقم الشقة">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="street">الشارع<em class="required">*</em></label>

                                                <input data-parsley-required="true" type="text" name="street"
                                                       class="input-text" id="street"
                                                       placeholder="ادخل الشارع">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="street">أقرب علامة<em class="required">*</em></label>

                                                <input data-parsley-required="true" type="text" name="nearest_landmark"
                                                       class="input-text" id="street"
                                                       placeholder="ادخل أقرب علامة">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="street">إسم العنوان<em class="required">*</em></label>

                                                <input data-parsley-required="true" type="text" name="address_title"
                                                       class="input-text" id="street"
                                                       placeholder="ادخل إسم العنوان">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="submit-btn-1 mt-20 btn-hover-1" id="register" type="submit" value="register">تسجيل</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">تفريغ</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="lat" value="1.333" id="lat"
                                               class="input-text required-entry validate-lat"
                                               title="lat">

                                        {{--lang--}}
                                        <input type="hidden" name="lng" value="2.333" id="lng"
                                               class="input-text required-entry validate-lng"
                                               title="lng">
                                    </div>
                                </form>
                                <div style="vertical-align: middle; text-align: center;" class="col-md-12" id="loading-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGIN SECTION END -->             

        </div>
        <!-- End page content -->

@include('layouts.footer')




<!--style-customizer end -->
</div>
<!-- Body main wrapper end -->

<?php $register_url = 'http://163.172.33.245/goomla/api/register';?>
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
    function view(title,price,img,desc,button){
        $('#productModal').modal('show');
        $("#modal_img").attr('src',img);
        $("#modal_desc").html(desc);
        $("#modal_header_title").text(title);
        $("#modal_button").html(button);
        $("#modelPrice").text(price + " " + "جنية ");
    }

</script>


<script type="text/javascript" src="{{asset('js/parsley.js')}}"></script>
<script type="text/javascript">


    $('form').parsley();

    var loadingimg = "{{ asset('images/loading5.gif') }}";
    $('#register').one('click', function () {

        $('#loading-img').html('<img style="height:100px;" src="' + loadingimg + '" />');
//            jQuery('#loading-img').hide(10000);


        $('form').submit(function (e) {
            e.preventDefault(e);

            $.ajax({
                url: "{{URL::to('addnewaddress')}}",
                crossDomain: true,
                contentType: 'application/json',
                type: 'POST',
                data: JSON.stringify({
                    'address_phone': $('input[name=phone]').val(),
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
                        $("#responseDone").html('<p>' + "تم إضافه العنوان بنجاح" + '</p>');
                        window.scrollTo(0, 0);
                        window.setTimeout(function () {
                            window.location.href = "{{url('/cart')}}"; //redirection
                        }, 1000);
                    }
                }

                ,
                error: function (response) {
                    console.log(response.responseText);
                    alert(esponse.responseText);
                    window.scrollTo(0, 0);


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
    $( "#slider-range" ).slider({
        range: true,
        min: 5,
        max: 700,
        values: [ 5, 700 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "" + ui.values[ 0 ] + "-" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val(  $( "#slider-range" ).slider( "values", 0 ) +
        "-" + $( "#slider-range" ).slider( "values", 1 ) );
    $("#slider-range").mouseleave(function(){
        $.ajax({
            type:'POST',
            url:'/price',
            data:{
                "_token": "{{ csrf_token() }}",
                'value':$( "#amount" ).val(),
                'cate': "{{ Request::url() }}"
            },
            success:function(data){
                $("#data").html(data.data);
            }
        });
    });
</script>
<script>
    function wishlist(id,name){
        $.ajax({
            type:'POST',
            url:'{{url('addwishlist')}}',
            data:{
                "_token": "{{ csrf_token() }}",
                'id': id,
                'name': name
            },
            success:function(data){
                if (data == 2) {
                    $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                    $('#exampleModalLong').modal('show');
                }
                else if (data.num == 1) {
                    $('#wishlist_count').html(data.count);
                    $('#addtofav1'+id).css("color", "red");
                } else {
                    $('#addtofav1'+id).css("color", "black");
                }
            }
        });
    }
    function addToCart(id,qty) {
        $.ajax({
            type:'POST',
            url:'{{url('addcart')}}',
            crossDomain: true,
            contentType: 'application/json',
            data:JSON.stringify({
                "_token": "{{ csrf_token() }}",
                'id': id,
                'qty': qty
            }),
            success:function(data){
                if (data == 1) {
                    $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                    $('#exampleModalLong').modal('show');
                } else {
                    $(".cart-quantity").html(data.count);
                    $("#cart").html(data.cart);
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
            type:'POST',
            url:'{{url('addcart')}}',
            crossDomain: true,
            contentType: 'application/json',
            data:JSON.stringify({
                "_token": "{{ csrf_token() }}",
                'id': id,
                'qty': qty
            }),
            success:function(data){
                if (data == 1) {
                    $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                    $('#exampleModalLong').modal('show');

                } else {
                    $('#productModal').modal('hide');
                    $(".cart-quantity").html(data.count);
                    $("#cart").html(data.cart);
                    // $('#cart-sidebar').html('');
                    $("#responseDone").html('<p>' + "تم اضافة المنتج بنجاح" + '</p>');
                    $('.bs-example-modal-sm').modal('show');

                    // getCart(response);


                }
            }
        });
    }
</script>
</body>

</html>
