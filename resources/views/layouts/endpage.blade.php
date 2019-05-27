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
<div class="modal fade" id="bs-example-modal-sm1" style="top:200px" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="homeSkipLoginBtn">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="responseDone-erorr1" class="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        إغلاق
                    </button>
                    <a type="button" class=" btn-danger"> </a>
                </div>
            </div>
        </div>
    </div>




</div>
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

                        $("#responseDone-erorr1").html('<p>' + response+ '</p>');
                        $("#responseDone-erorr1 p").css('color','red');
                        window.scrollTo(0, 0);

                        $('#bs-example-modal-sm1').modal('show');
                        $('#loading-img').hide();
                    }


                },
                error: function (response) {
                    $("#responseDone").html('<p>' + response + '</p>');
                    $("#responseDone p").css('color','red');
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
    let quantity = $("#qty"+id).val();
    $.ajax({

        type:'POST',
        url:'{{url('addcart')}}',
        crossDomain: true,
        contentType: 'application/json',
        data:JSON.stringify({
            "_token": "{{ csrf_token() }}",
            'id': id,
            'qty': quantity
        }),
        success:function(data){
            if (data == 1) {

                $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                $('#exampleModalLong').modal('show');

            }
            else if(typeof data === 'string' || data instanceof String)
            {
                $("#responseType-erorr").html('<p style="color: red" >' + "هذا المنتج غير متوفر " + '</p>');
                $('#exampleModalType').modal('show');
            }
             else {
                $(".cart-quantity").html(data.count);
                $("#cart").html(data.cart);
                $("#order-price").html(data.total + "جنية");
                $("#order-total-price").html((data.total + 15) + 'جنية' );
                $("#order-total-price").html((data.total + 15) + 'جنية' );
                $("#cartTotalPrice").html(data.total  + 'جنية' );
                $("#tprice").html((data.total + 15) + 'جنية' );
                $("#final-price").html(data.total  + 'جنية' );
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
function addToCart2(id,qty) {
        let quantity = $("#qty1"+id).val();
        $.ajax({

            type:'POST',
            url:'{{url('addcart')}}',
            crossDomain: true,
            contentType: 'application/json',
            data:JSON.stringify({
                "_token": "{{ csrf_token() }}",
                'id': id,
                'qty': quantity
            }),
            success:function(data){
                if (data == 1) {

                    $("#responseDone-erorr").html('<p style="color: red" >' + "يجب عليك تسجيل الدخول اولاً" + '</p>');
                    $('#exampleModalLong').modal('show');

                }
                else if(typeof data === 'string' || data instanceof String)
                {
                    $("#responseType-erorr").html('<p style="color: red" >' + "هذا المنتج غير متوفر " + '</p>');
                    $('#exampleModalType').modal('show');
                }
                else {
                    $(".cart-quantity").html(data.count);
                    $("#cart").html(data.cart);
                    $("#order-price").html(data.total + "جنية");
                    $("#order-total-price").html((data.total + 15) + 'جنية' );
                    $("#order-total-price").html((data.total + 15) + 'جنية' );
                    $("#cartTotalPrice").html(data.total  + 'جنية' );
                    $("#tprice").html((data.total + 15) + 'جنية' );
                    $("#final-price").html(data.total  + 'جنية' );
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
</body>

</html>