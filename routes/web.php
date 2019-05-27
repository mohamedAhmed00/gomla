<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Home Page
Route::get('/','home\HomeController@getAll');

//Login
Route::get('/register','login\LoginController@showRegisterForm');
Route::post('/register','login\LoginController@register');


Route::get('/login','login\LoginController@showLoginForm');
Route::post('/login','login\LoginController@login');

Route::get('/logout','login\LoginController@logout');


//Facebook

Route::get('login/facebook', 'login\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'login\LoginController@handleProviderCallback');




Route::get('/about-us', function () {
    return view('about-us');
});


Route::get('/privacy', function () {
    return view('privacy');
});


//Reset Password

Route::get('/reset/password','user\UserController@showResetPasswrod');
Route::post('/reset/password','user\UserController@resetPasswrod');

//Get User Orders

Route::get('/history','user\UserController@getUserOrders');
Route::get('/history/{id}','user\UserController@getUserOrdersHistory');

//Get User Data

Route::get('/profile','user\UserController@getUserData');



//Ctas & products
Route::get('/categories','CategoryController@getCategories');
Route::get('/categories/{id}','CategoryController@getSubCategories');

Route::get('/products/{id}','product\ProductController@getProducts');
Route::get('/product/{id}','product\ProductController@getProduct');
Route::get('/search','product\ProductController@searcProducts');
Route::get('/products/brand/{brand}','product\ProductController@getBrandProducts');

Route::POST('/price','product\ProductController@searcByPrice');
Route::POST('/brand','product\ProductController@searcByBrand');
Route::POST('/pagenation','product\ProductController@pagenation');

//Favouriteis
Route::get('/wishlist','wishlists\WishlistsController@getAllWishlist');
Route::post('/addwishlist','wishlists\WishlistsController@addWishlist');
Route::post('/deletewishlist','wishlists\WishlistsController@deleteWishlist');

//Cart
Route::any('/cart','cart\CartController@getCart');
Route::post('/addcart','cart\CartController@addCart');
Route::post('/deletecart/{id}','cart\CartController@deleteCart');
Route::post('/deletecartItem/{id}','cart\CartController@deleteCartItem');
Route::post('/checkout','cart\CartController@checkout');
Route::get('/checkout',function(){
  return redirect('cart');
});
Route::post('/docheckout','cart\CartController@docheckout');

//promocode
Route::post('/promocodevalidation','cart\CartController@promocodevalidation');

//Add New Address
Route::get('/addnewaddress','user\UserController@addaddressform');
Route::post('/addnewaddress','user\UserController@addaddress');


//Contact-Us

Route::get('/contact-us', 'contact\ContactController@getContact');
Route::post('/contact-us', 'contact\ContactController@postContact');


//District

Route::get('/save_district_id', 'home\HomeController@gtDistrictId');

