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

Route::group(['namespace' => 'Design'], function(){


//----> Home Page
Route::get('/', 'LinksNavController@home');

//----> About
Route::get('about', 'LinksNavController@about');
Route::get('total', 'OrdersController@index');
//----> Shop
Route::get('shop', 'LinksNavController@shop');
Route::get('shop', 'ShopController@shop');
Route::get('orders', 'OrdersController@index');
Route::get('get/orders', 'OrdersController@edit');
Route::post('order/store', 'OrdersController@order_products');
Route::any('edit/order/{id}', 'OrdersController@update');
Route::delete('ordar/delete/{id}', 'OrdersController@destroy');
Route::any('checkout', 'OrdersController@check_out');

//----> Contact US
Route::get('contact', 'LinksNavController@contact');
Route::post('contact/create', 'LinksNavController@create_contact');
//----> Form
Route::resource('form', 'ReigsterController');
Route::post('form/store', 'ReigsterController@store');

//-----> Login And Logout And Forget_Password
Route::post('login/user', 'LoginUserController@login_post');
Route::get('user/forget/password', 'LoginUserController@forget_password');
Route::post('user/forget/password', 'LoginUserController@forget_password_post');
Route::get('user/reset/password/{token}', 'LoginUserController@reset_password');
Route::post('user/reset/password/{token}', 'LoginUserController@reset_password_post');
Route::get('logout', 'LoginUserController@logout');

//================== Start All Laptop =================
//----> Acer Page
Route::get('Acer', 'LaptopPagesController@acer');

//----> Hp Page
Route::get('HP', 'LaptopPagesController@hp');

//----> Dell Page
Route::get('Dell', 'LaptopPagesController@dell');

//----> Lenovo Page
Route::get('Lenovo', 'LaptopPagesController@lenovo');

//----> Toshiba Page
Route::get('Toshiba', 'LaptopPagesController@toshiba');

//----> Apple Page
Route::get('Apple', 'LaptopPagesController@apple');

//----> Redirect To Desc Laptop
Route::get('laptop/buy/{id}', 'LaptopPagesController@laptop_buy');
//================== End All Laptop ===================
//================== Start All Tablet =================
//----> Huawei Page
Route::get('tablet/Huawei', 'TabletPagesControllers@huawei');

//----> Samasung Page
Route::get('tablet/Samsung', 'TabletPagesControllers@samsung');

//----> Lenovo Page
Route::get('tablet/Lenovo', 'TabletPagesControllers@lenovo');

//----> Apple Page
Route::get('tablet/Apple', 'TabletPagesControllers@apple');

//----> Redirect To Buy Tablet
Route::get('tablet/buy/{id}', 'TabletPagesControllers@tablet_buy');

//================== End All Tablet ===================

//================== Start All Mobile =================
//----> Huawei Page
Route::get('mobile/Huawei', 'MobilePagesController@huawei');

//----> Samasung Page
Route::get('mobile/Samsung', 'MobilePagesController@samsung');

//----> Lenovo Page
Route::get('mobile/Lenovo', 'MobilePagesController@lenovo');

//----> Apple Page
Route::get('mobile/Apple', 'MobilePagesController@apple');

//----> Oppo Page
Route::get('mobile/Oppo', 'MobilePagesController@oppo');

//----> Infinx Page
Route::get('mobile/Infinx', 'MobilePagesController@infinx');

//----> Redirect To Buy Tablet
Route::get('mobile/buy/{id}', 'MobilePagesController@mobile_buy');

//================== End All Mobile ===================



});