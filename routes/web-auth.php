<?php

//Authentication
Route::prefix('auth')->group(function () {
    Route::get('/sso/login', function () { return redirect(route('auth.connect.login'), 301); })->middleware('guest')->name('auth.sso.login');
    Route::get('/connect/login', 'Auth\AuthController@connectLogin')->middleware('guest')->name('auth.connect.login');
    Route::get('/connect/validate', 'Auth\AuthController@validateConnectLogin')->middleware('guest');
    Route::get('/logout', 'Auth\AuthController@logout')->middleware('auth')->name('auth.logout');
});
