<?php



Route::get('', function () {
    return view('index');
});

Auth::routes();

//User Login
Route::post('user/login','User\UserLoginController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@getLogout');

//Language
Route::get('locale/{locale?}',function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});

//employee
Route::any('employee/home','Product\ProductController@index');
