<?php

Route::group(['namespace' => 'Admin'], function(){

    //-----> Dashboard
    Route::get('dashboard', 'DashboardController@index');

    //-----> Laptop
    Route::resource('laptop', 'LaptopContorller');
    Route::delete('laptop/delete/all', 'LaptopContorller@multi_delete');

    //-----> Tablet
    Route::resource('tablet', 'TabletContorller');
    Route::delete('tablet/delete/all', 'TabletContorller@multi_delete');

    //-----> Mobile
    Route::resource('mobile', 'MobileContorller');
    Route::delete('mobile/delete/all', 'MobileContorller@multi_delete');

    //-----> Departments
    Route::resource('departments', 'DepartmentController');

    //-----> Users
    Route::resource('users', 'UsersController');
    Route::delete('users/delete/all', 'UsersController@multi_delete');

     //-----> Settings
     Route::get('settings', 'SettingController@setting');
     Route::post('settings', 'SettingController@setting_save');

     //-----> Contact
     Route::resource('admin/contact', 'ContactController');
     Route::delete('admin/contact/delete/all', 'ContactController@multi_delete');
     Route::get('admin/contact/Not/Read', 'ContactController@contact_not_read');
});


Route::get('lang/{lang}', function($lang){

    session()->has('lang') ? session()->forget('lang') : '';

            if($lang == 'ar'){
    
                    session()->put('lang', 'ar');
            }else{
    
                    session()->put('lang', 'en');
            }
            return back();
    });