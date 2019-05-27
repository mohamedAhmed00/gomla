@extends ('layouts.app')


@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {{--<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        span[dir]{
            unicode-bidi: bidi-override;
        }
        .image {
            height: 75px;
            width: 75px;
        }

        .imagetable {
            height: 80px;
            width: 80px;

        }

        .widthtable {
            width: 100px;
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

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>متابعه الشراء</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN Main Container -->

    <div class="main-container col1-layout wow bounceInUp animated">

        <div class="main">
            <div class="cart wow bounceInUp animated">

                <div class="table-responsive shopping-cart-tbl  container">
                    <form action="" method="post">
                        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                        <fieldset>
                            <table id="shopping-cart-table" class="data-table cart-table table-striped">
                                <colgroup>
                                    <col width="1">
                                    <col>
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">

                                </colgroup>
                                <thead>
                                <tr class="first last">
                                    <th rowspan="1"><span class="nobr">صوره المنتج</span></th>

                                    <th rowspan="1" class="a-center"><span class="nobr"></span></th>

                                    <th class="a-center" colspan="1"><span class="nobr">السعر</span></th>
                                    <th rowspan="1" class="a-center">الكميه</th>
                                    <th class="a-center" colspan="1">المجموع</th>
                                    <th rowspan="1" class="a-center">&nbsp;</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr class="first last">
                                    <td colspan="50" class="a-right last">


                                    </td>
                                </tr>
                                </tfoot>
                                <tbody>

                                @if(isset($carts))
                                    <?php $total = 0;
                                    //                                    number_format($total, 2, '.', ',');
                                    ?>
                                    @foreach($carts as $product)

                                        <?php  $total = number_format((float)$total, 2, '.', '');?>
                                        <?php  $standard_rate = number_format((float)$product->standard_rate, 2, '.', '');?>
                                        <?php $qty = number_format((float)$product->qty, 2, '.', '');?>

                                        <?php  $total = ($standard_rate * $qty) + $total?>

                                        <script type="text/javascript"
                                                src="{{url('/public/gomla/')}}/js/jquery.min.js"></script>

                                        <form action="{{url('deletecart/0')}}" method="post">

                                            <tr class="odd{{$product->item_code}}">
                                                <td class="image hidden-table">
                                                    <a href="{{url('product/'.$product->item_code)}}"
                                                       title="{{$product->name}}"
                                                       class="product-image">

                                                        @if(isset($product->image))
                                                            <img class="image"
                                                                 src="http://163.172.33.245/goomla/storage/app/erpnext/{{$product->image}}"
                                                                 alt="{{$product->name}}">
                                                        @else
                                                            <img class="image"
                                                                 src="{{url('/public/gomla/')}}/images/blog-banner.png"
                                                                 alt="{{$product->name}}">

                                                        @endif

                                                    </a>
                                                </td>
                                                <td>
                                                    <h2 class="product-name">
                                                        <a href="{{url('product/'.$product->item_code)}}">{{$product->name}}</a>
                                                    </h2>
                                                </td>

                                                <td class="a-right hidden-table">
                                          <span class="cart-price">
                                                <span class="price">{{number_format ($product->standard_rate , 2, '.', ',')}}
                                                    جنيه</span>
                                          </span>
                                                </td>

                                                <td class="a-center movewishlist">

                                                    <input type="text" disabled
                                                           value="{{number_format($product->qty, 2, '.', ',')}}"
                                                           name="qtyslider{{$product->item_code}}" aria-disabled="true"
                                                           id="{{$product->item_code}}" title="Quantity:"
                                                           class="input-text qty">


                                                    <input type="hidden" value="0" name="qty"
                                                           id="{{$product->item_code}}">


                                                    <input type="hidden" value="{{$product->id}}" name="id"
                                                           id="{{$product->item_code}}">

                                                </td>

                                                <td class="a-right movewishlist">
                                        <span class="cart-price"><span class="price">
                                                <?php echo number_format($product->standard_rate, 2, '.', ',') * number_format($product->qty, 2, '.', ',') ?>
                                                جنيه</span>
                                        </span>
                                                </td>


                                            </tr>

                                        </form>

                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </fieldset>
                    </form>

                    <form method="POST" action="{{url('/docheckout')}}">

                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-6">
                                    طريقة الدفع
                                    <select class="form-control" name="Paymentmethod" id="Paymentmethod">

                                        @foreach($payment_methods as $method)

                                            <option value="{{$method->type}}"><?php echo $method->type; ?></option>
                                        @endforeach
                                    </select> <br/>
                                </div>
                            </div>
                            @if($addresses!= null && is_array($addresses))

                                <div class="row">

                                    <div class="col-md-6">
                                        العنوان
                                        <select class="form-control" name="address" id="full_address" dir="">
                                            @foreach($addresses as $address)
                                                <option value="{{$address->id}}" dir="">
                                                    {{$address->title}} - {{$address->building_no}} {{$address->street}},
                                                    {{$address->regoin}},
                                                    {{$address->city}},
                                                    {{$address->apartment_no}},
                                                    {{$address->floor_no}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <a style="margin-top: 20px;" href="{{url('addnewaddress')}}"
                                           class="btn-danger btn-xs"> أضف عنوان جديد </a>

                                    </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-6">

                                                <select class="form-control" name="address" id="address">

                                                    <option value="">لايوجد عنوان مسجل لديك</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <a href="{{url('addnewaddress')}}" style="margin-top: 20px;"
                                               class="btn-danger btn-xs">أضف عنوان جديد </a>
                                        </div>

                                    @endif

                                </div>


                                وقت التوصيل
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-control" name="timesection" id="timesection">
                                            @foreach($timesections as $timesection)
                                                <option value="{{$timesection->id}}">من {{$timesection->from}}
                                                    الى {{$timesection->to}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="shipping" value="{{$shipping[0]->shipping_rule}}">

                        </div>
                        <div class="col-md-4" id="showAdress" dir="">

                        </div>
                        <div class="col-md-12">
                            <div style="margin-right: -10px;" class="col-sm-4">
                                <div class="totals">
                                    <h3>مجموع الحساب</h3>
                                    <div class="inner">

                                        <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                            <colgroup>
                                                <col>
                                                <col width="1">
                                            </colgroup>
                                            <tfoot>
                                            <tr>
                                                <td style="" class="a-left" colspan="1">
                                                    <strong>خدمه التوصيل </strong>
                                                </td>

                                                <td style="" class="a-right">
                                                    <strong><span class="price">  جنيه  </span> {{$shipping[0]->rate}}

                                                    </strong>

                                                </td>

                                            </tr>

                                            <tr>
                                                <td style="" class="a-left" colspan="1">
                                                    <strong>الحساب الكلي</strong>
                                                </td>
                                                <td style="" class="a-right">
                                                    <strong><span
                                                                class="price"> جنيه </span> <?php if (isset($total)) echo $total + $shipping[0]->rate;?>
                                                    </strong>
                                                </td>
                                            </tr>

                                            </tfoot>
                                            <tbody>
                                            <tr>
                                                <td style="" class="a-left" colspan="1">
                                                    الحساب
                                                </td>
                                                <td style="" class="a-right">
                                                    <span class="price"> جنيه </span> <?php if (isset($total)) echo $total;?>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <ul class="checkout">
                                            <li>
                                                <button type="submit" @if($addresses == null) disabled="disabled"
                                                        style="background-color:gray;"
                                                        @endif title="Proceed to Checkout"
                                                        class="button btn-proceed-checkout" onClick="">
                                                    <span>إتمام عمليه الشراء</span>
                                                </button>


                                            </li>
                                            <br>

                                            <br>
                                        </ul>
                                    </div><!--inner-->
                                </div><!--totals-->
                            </div> <!--col-sm-4-->

                        </div>
                    </form>

                </div>

                <!-- BEGIN CART COLLATERALS -->


            </div>  <!--cart-->

        </div><!--main-container-->

    </div>

    <!--col1-layout-->







@endsection

@section('javascript')
    <script>
        var address = jQuery("#full_address option:selected").text();
        jQuery('#showAdress').html(address);

        jQuery('#full_address').on('change',function () {
            var address = jQuery("#full_address option:selected").text();
            jQuery('#showAdress').html(address);
        });
    </script>
@endsection