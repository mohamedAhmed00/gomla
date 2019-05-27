@extends ('layouts.app')

@section('metatitle') جملة أونلاين @stop

@section('metadescription') دلوقتي تقدر تشتري كل المنتجات الغذائية الجافة من خلال تطبيق جملة.أونلاين
حمله دلوقتي و وفر فلوسك ومجهودك @stop

@section('metaimage'){{url('/public/gomla/images/logo.jpg')}}@stop


@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
{{--
<link href="{{url('public/admin/css/parsley.css')}}" rel="stylesheet" type="text/css"/>
--}}
<link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
<style>
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
<?php $configration = json_decode(file_get_contents('http://163.172.33.245/goomla/api/configrations'), true); ?>
<div class="page-heading">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="page-title">
               <h2>سله الشراء</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- BEGIN Main Container -->
<div class="main-container col1-layout wow bounceInUp animated">
   <div class="main">
      @if(session()->has('message'))
      <div class="alert alert-success">
         {{ session()->get('message') }}
      </div>
      @endif
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
                        @if(isset($xproducts))
                        <?php $total = 0;?>
                        @foreach($xproducts as $product)
                        {{--script add to cart--}}
                        {{--End script add to cart--}}
                        <?php  $total = number_format((float)$total, 2, '.', '');?>
                        <?php  $standard_rate = number_format((float)$product->standard_rate, 2, '.', '');?>
                        <?php $qty = number_format((float)$product->qty, 2, '.', '');?>
                        <?php  $total = ($standard_rate * $qty) + $total?>
                        <script type="text/javascript"
                           src="{{url('/public/gomla/')}}/js/jquery.min.js"></script>
                        <tr class="odd{{$product->item_code}}">
                           <td class="image hidden-table">
                              <a href="{{url('product/'.$product->id)}}"
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
                                 <a href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                              </h2>
                           </td>
                           <td class="a-right hidden-table">
                              <span class="cart-price">
                              <span class="price">{{number_format ($product->standard_rate , 2, '.', ',')}}
                              جنيه</span>
                              </span>
                           </td>
                           <td class="a-center movewishlist">
                              <div class="add-to-cart">
	            <form id="sfs"></form>                
            <form data-parsley-validate method="POST"  id="updateformcart1{{$product->id}}">
	           
            <div class="custom " style="margin-bottom: 10px; min-width:190px;">
            <button onClick="var result = document.getElementById('hpqty1{{$product->id}}');
               var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
               class="increase items-count "
               type="button" style="float:right;">
            <i class="icon-plus">&nbsp;</i>
            </button>
            <input min="{{$product->min_order_qty}}"
               data-parsley-required="true"
               type="text"
               name="hpqty1{{$product->id}}"
               id="hpqty1{{$product->id}}"
               title="الكميه:"
               value="{{$product->qty}}"
               class="input-text" style="float:right; width: 40px;">
            <button onClick="var result = document.getElementById('hpqty1{{$product->id}}');
               var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 )
               result.value--;return false;"
               class="reduced items-count"
               type="button" style="float:right;">
            <i class="icon-minus">&nbsp;</i>
            </button>
            <input value="{{$product->id}}"
               data-parsley-required="true"
               type="hidden"
               name="hpid{{$product->id}}"
               id="hpid1{{$product->id}}"
               title="item_code"
               class="input-text item_code ">
            <button type="submit" id="updateaddtocart1{{$product->id}}"
               title="حفظ" class="button btn-save">
            <i class="fa fa-save"></i>
            </button>
            <!--custom pull-left-->
            <!--pull-left-->
            </div>
            </form>
            {{--script add to cart--}}
            <script>
               jQuery(document).ready(function () {
                   jQuery('#updateaddtocart1{{$product->id}}').on('click', function () {
               
                       jQuery('#updateformcart1{{$product->id}}').submit(function (e) {
                       
                           e.preventDefault(e);
               
                           jQuery.ajax({
                               url: "{{url('/addcart')}}",
                               crossDomain: true,
                               contentType: 'application/json',
                               type: 'POST',
                               data: JSON.stringify({
                                   'id': jQuery('input[name=hpid{{$product->id}}]').val(),
                                   'qty': jQuery('input[name=hpqty1{{$product->id}}]').val(),
                                   '_token': jQuery('input[name=_token]').val()
                               }),
                               success: function (response) {
                                   if (response == 1) {
                                       jQuery("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                                       jQuery('#exampleModalLong').modal('show');
               
                                   } else {
                                       //jQuery('#cart-sidebar').html('');
                                       //jQuery("#responseDone").html('<p>' + "تم اضافه المنتج بنجاح" + '</p>');
                                       //jQuery('.bs-example-modal-sm').modal('show');
                                       //jQuery("#countapp1").html(response.length);
                                      // jQuery("#countapp").html(response.length);
               
                                      // getCart(response);
//                                      alert("تم تحديث سلة الشراء");
               
               
                                   }
                               },
                               error: function (response) {
                                  // alert(50);
                               },
               
                           });
                       });
                   });
               });
               
            </script>
            {{--End script add to cart--}}
            </div>
            </td>
            <td class="a-right movewishlist">
            <span class="cart-price">
            <span class="price">
            <?php echo number_format($product->standard_rate, 2, '.', ',')  * number_format($product->qty, 2, '.', ',') ?>
            جنيه</span>
            </span>
            </td>
            <form action="{{url('deletecart/0')}}" method="post">
            <input type="hidden" value="{{$product->id}}" name="id"
               id="{{$product->item_code}}">
            <input type="hidden" value="0" name="qty"
               id="{{$product->item_code}}">
            <td class="a-center last">
            <button type="submit" title="حذف المنتج"
               class="button remove-item">
            <i class="fa fa-trash-o " aria-hidden="true"></i>
            </button>
            </td>
            </form>
            </tr>
            @endforeach
            @endif
            </tbody>
            </table>
            </fieldset>
            </form>
            <div class="col-sm-4">
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
                                 <strong>خدمه التوصيل  </strong>
                              </td>
                              <td style="" class="a-right">
                                 <strong><span class="price">  جنيه  </span> @if(isset($shipping[0]->rate)){{$shipping[0]->rate}}@endif
                                 </strong>
                              </td>
                           </tr>
                           <tr>
                              <td style="" class="a-left" colspan="1">
                                 <strong>الحساب الكلي</strong>
                              </td>
                              <td style="" class="a-right">
                                 <strong><span class="price">جنيه</span><?php if (isset($total)) echo $total + $shipping[0]->rate;?>
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
                                 <span class="price">جنيه</span><?php if (isset($total)) echo $total;?>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     @if(isset($total))
                     @if($total > 1000)
                     لأتمام عملية الشراء لابد ان يكون أجمالى سعر المشتريات أقل من المسموح  
                     @else
                     <ul class="checkout">
                        <li>
                           <?php $cart = json_encode($xproducts); ?>
                           {{--{{dd($cart)}}--}}
                              @if(count($xproducts)>0)
                                 <form method="POST" action="{{url('/checkout')}}">
                                    <input id="cart" type="hidden" name="cart" value="{{$cart}}">
                                    <button type="submit" title="إتمام عمليه الشراء"
                                       class="button btn-proceed-checkout" onClick="">
                                    <span>إتمام عمليه الشراء</span>
                                    </button>
                                </form>
                              @else
                                 <button disabled type="button" title="إتمام عمليه الشراء"
                                            class="button btn-proceed-checkout" onClick="">
                                    <span>إتمام عمليه الشراء</span>
                                 </button>

                              @endif
                        </li>
                        <br>
                        <br>
                     </ul>
                     @endif
                     @endif
                  </div>
                  <!--inner-->
               </div>
               <!--totals-->
            </div>
            <!--col-sm-4-->
         </div>
         <!-- BEGIN CART COLLATERALS -->
      </div>
      <!--cart-->
   </div>
   <!--main-container-->
</div>
<!--col1-layout-->

<!-- For version 1,2,3,4,6 -->
@endsection