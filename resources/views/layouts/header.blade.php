<?php
$token = session('auth_token');
$district_id = session('district_id');

$headr = array();
$headr[] = 'Authorization:' . $token;
$headr[] = 'district_id:' . $district_id;

$crl = curl_init();

curl_setopt($crl, CURLOPT_URL, 'http://163.172.33.245/goomla/api/user/wishlist');
curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

$rest = curl_exec($crl);
$xproducts = json_decode($rest);
?>
<style>
    .btn-danger {
    color: #fff !important;
    background-color: #ff7f00 !important;
    border-color: #ff7f00 !important;
}
</style>
<header class="header-area header-wrapper">
    <!-- header-top-bar -->
    <div class="header-top-bar plr-185">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <div class="call-us">
                        <p class="mb-0 roboto"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="top-link clearfix">
                        <ul class="link f-right">
                            @if(session('auth_token'))

                                <li>
                                    <a href="{{ url('/logout') }}">
                                        <i class="zmdi zmdi-lock-open"></i>
                                        الخروج
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/profile') }}">
                                        <i class="zmdi zmdi-account"></i>
                                        حسابي
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/wishlist') }}">
                                        <i class="zmdi zmdi-favorite"></i>
                                        المفضلة  <span id="wishlist_count">{{ count($xproducts) }}</span> )
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ url('/login') }}">
                                        <i class="zmdi zmdi-lock"></i>
                                        تسجيل الدخول
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle-area -->
    <div id="sticky-header" class="header-middle-area plr-185">
        <div class="container-fluid">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="logo" style="padding: 2px 0 1px 0">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('images/logo.jpeg') }}" style="width: 80px;height: 60px" alt="main logo">
                            </a>
                        </div>
                    </div>
                    <style>
                        .modal-dialog
                        {
                            margin: 70px auto;
                        }
                        #primary-menu
                        {
                            text-align: center
                        }
                        .main-menu
                        {
                            text-align: center;
                            margin: auto;
                            display: inline-block;
                        }
                        .main-menu li
                        {
                            float: right;
                        }
                        .main-menu li a
                        {
                            font-size: 18px;
                            font-weight: bold;
                        }
                        .single-mega-item li
                        {
                            float: none;
                        }
                        .cart-img a img
                        {
                            width: 290px;
                            height: 150px;
                            display: block;
                        }
                        .sticky .main-menu > li
                        {
                            padding: 8px 0;
                        }
                        .sticky .header-search
                        {
                            padding: 0;
                        }
                        .action-button > li
                        {
                            margin-right: 0;
                        }
                    </style>
                    <!-- primary-menu -->
                    <div class="col-md-8 hidden-sm hidden-xs">
                        <nav id="primary-menu" >
                            <ul class="main-menu text-center">
                                <li><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="mega-parent"><a href="{{ url('categories') }}">الاقسام</a>
                                    <div class="mega-menu-area clearfix">
                                        <div class="mega-menu-link f-left" style="width: 100%;">
                                            <?php
                                                $categories = json_decode(file_get_contents('http://163.172.33.245/goomla/api/categories'), true);
                                                $allCategories = array_chunk($categories, 5);
                                            ?>
                                            @foreach($allCategories as $pieces)
                                                    <ul class="single-mega-item">
                                                        @foreach($pieces as $cate)
                                                            @if($cate['hasSubCategories'] != null)
                                                                <li><a href="{{url('categories/'.$cate['id'])}}" title="{{$cate['name']}}">{{ $cate['name'] }}</a></li>
                                                            @else
                                                                <li><a href="{{url('products/'.$cate['id'])}}" title="{{$cate['name']}}">{{ $cate['name'] }}</a></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ url('/about-us') }}">من نحن</a>
                                </li>
                                <li><a href="{{ url('/contact-us') }}">تواصل معنا</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header-search & total-cart -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="search-top-cart  f-right">
                            <!-- header-search -->
                            <div class="header-search f-left">
                                <div class="header-search-inner">
                                    <button class="search-toggle">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                    <form action="{{url('/search')}}" id="formsearch" method="GET" class="navbar-form"
                                  role="search">
                                        <div class="top-search-box">
                                            <input type="text"  name="product" autocomplete="off" id="inputsearch" placeholder="ابحث عن منتجك">
                                            <button type="submit">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <script src="{{ asset('gomla/js/vendor/jquery-3.1.1.min.js') }}"></script>

                            <!-- total-cart -->
                            @if(session('auth_token'))
                                <div class="total-cart f-left">
                                    <div class="total-cart-in">
                                        <div class="cart-toggler">
                                            <a href="{{ url('/cart') }}">

                                            <span class="cart-quantity">
                                                <?php $cart = session('cart'); $total = 0;$count = 0  ?>
                                                @if($cart)
                                                @php
                                                    foreach($cart as $item)
                                                    {
                                                        $total += $item->qty * number_format((float)$item->standard_rate, 2, '.', '');
                                                        $count += $item->qty;
                                                    }
                                                    @endphp
                                                {{ $count }}
                                                @else
                                                    0
                                                @endif
                                            </span><br>
                                                <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                            </a>
                                        </div>
                                        <ul id="cart" style="overflow: auto;height: 500px">
                                            <li>
                                                <div class="top-cart-inner your-cart">
                                                    <h5 class="text-capitalize"><a href="{{ url('/cart') }}">سله المشتريات  </a></h5>
                                                </div>
                                            </li>
                                            <li>

                                                <div class="total-cart-pro">
                                                    @if(isset($cart))
                                                    @foreach($cart as $item)
                                                        <div class="single-cart clearfix licart{{$item->id}}">
                                                            <div class="cart-img f-left">
                                                                <a>
                                                                    <img src="http://163.172.33.245/goomla/storage/app/erpnext/{{ $item->image }}" alt="Cart Product" />
                                                                </a>
                                                               

                                                                        <input type="hidden" value="0"
                                                                               name="headerqty{{$item->id}}"
                                                                               id="headerqty{{$item->id}}">


                                                                        <input type="hidden" value="{{$item->id}}"
                                                                               name="headerid{{$item->id}}"
                                                                               id="headerid{{$item->id}}">

                                                                        <button id="deletecartheader{{$item->id}}"
                                                                                class="buttoncart" title="حذف"
                                                                                type="submit">
                                                                                <i class="zmdi zmdi-close"></i>


                                                                        </button>

                                           

                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a>{{ $item->name }}</a>
                                                                </h6>
                                                                <p>
                                                                    </strong>{{ $item->brand }} </strong>
                                                                </p>
                                                                <p>
                                                                    </strong><span>الكمية : </span>{{ $item->qty }} </strong>
                                                                </p>
                                                                <p>
                                                                    <span>السعر <strong>:</strong></span><span id="price{{$item->id}}">{{ number_format($item->standard_rate , 2, ".", ",") }}</span>
                                                                </p>

                                                            </div>
                                                        </div>
                                                        @php
                                                        @endphp
                                                    <script>
                                                        $(document).ready(function () {
                                                            $("#cart").on('click','#deletecartheader{{$item->id}}', function () {
                        
                                                                $.ajax({
                                                                    url: "{{url('deletecart/1')}}",
                                                                    crossDomain: true,
                                                                    contentType: 'application/json',
                                                                    type: 'POST',
                                                                    data: JSON.stringify({
                                                                        'id': $('input[name=headerid{{$item->id}}]').val(),
                                                                        'qty': $('input[name=headerqty{{$item->id}}]').val(),
                                                                        '_token': $('input[name=_token]').val()
                                                                    }),
                                                                    success: function (response) {
                                                                        $(".cart-quantity").html(response.count);
                                                                        $("#cart").html(response.cart);
                                                            
                                                                    },
                                            

                                                                });
                                                            });
                                                         
                                                        });
                                                    </script>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner subtotal">
                                                    <h4 class="text-uppercase g-font-2" >
                                                        الاجمالي  =
                                                        <span>جنيه : </span> <span id="cartTotalPrice">{{ $total }}</span>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner view-cart">
                                                    <h4 class="text-uppercase">
                                                        <a href="{{ url('cart') }}">سلة المشتريات</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner check-out">
                                                    <h4 class="text-uppercase">
                                                        <a href="{{ url('checkout') }}">اتمام الطلب</a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
