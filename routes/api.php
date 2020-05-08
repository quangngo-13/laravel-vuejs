<?php

Route::group(['namespace' => 'Api'], function () {

    //Route đăng nhập
    Route::post('/login','AuthController@login');

    //Route cần truyền token
    Route::group(['middleware' => 'auth.token'], function () {
        //Route get thông tin đăng nhập
        Route::get('/me', 'UserController@me');
    });
});
