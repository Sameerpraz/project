<?php



//-------Route added for Frontend-------------
Route::group(['namespace'=>'Frontend'],function(){
    Route::any('/','ApplicationController@index')->name('index');
    Route::any('login','UserLoginController@index')->name('login');
    Route::any('user-register','UserLoginController@add')->name('user-register');
    Route::any('password-reset','UserLoginController@passwordreset')->name('password-reset');


    Route::group(['prefix'=>'users','middleware'=>'auth:web'],function(){
        Route::any('user-info','UserLoginController@userdetails')->name('user-info');
        Route::group(['prefix'=>'user-dashboard'],function() {
            Route::any('myprofile', 'ProfileController@index')->name('myprofile');
        });



    });
    Route::any('logout','ProfileController@logout')->name('logout');
    Route::any('logout','UserLoginController@logout')->name('logout');

});


/*---------For Admin Log in ---------*/
Route::group(['namespace'=>'Backend'],function() {
    Route::any('admin-login', 'AdminLoginController@index')->name('admin-login');
});

//--------Route added for Backend -------------
Route::group(['namespace'=>'Backend','prefix'=>'admin','middleware'=>'auth:admin'],function(){
    Route::any('/','DashboardController@index')->name('admin-dashboard');
    Route::group(['prefix'=>'admin-users'],function() {
        Route::any('products', 'ProductController@index')->name('products');
        Route::get('product-search', 'ProductController@action')->name('product-search');
        Route::any('delete/{id}', 'ProductController@destroy')->name('delete');
    });

    Route::group(['prefix'=>'admin-users'],function(){
        Route::any('add-product','ProductController@add')->name('add-product');
        Route::any('/','AdminUserController@index')->name('admin-users');
        Route::any('add-admin','AdminUserController@add')->name('add-admin');
        Route::any('delete/{id}','AdminUserController@destroy')->name('delete');
        Route::any('users-search/{criteria?}','AdminUserController@search')->name('users-search');
        Route::any('users-details/{criteria?}','AdminUserController@details')->name('users-details');
        Route::any('users-update-status','AdminUserController@status')->name('users-update-status');
        Route::any('admin-users-type','AdminUserController@user_type')->name('admin-users-type');
        Route::any('admin-edit/{id}','AdminUserController@edit')->name('admin-edit');
        Route::any('changePassword','PasswordController@showChangePasswordForm')->name('changePassword');
      //  Route::any('password','@index')->name('password');
    });
   Route::any('admin-logout','AdminLoginController@logout')->name('admin-logout');
});





/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
