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

//employee_product
Route::any('employee/home','Product\ProductController@index');

//employee_company_store
Route::any('/employee/company_store','Product\CompanystoreController@index');
Route::post('/employee/company_store/add','Product\CompanystoreController@create');
Route::any('/employee/company_store/view','Product\CompanystoreController@show');
Route::post('/employee/company_store/edit','Product\CompanystoreController@edit');
Route::post('/employee/company_store/edit/file','Product\CompanystoreController@update');
Route::post('/employee/company_store/delete','Product\CompanystoreController@destroy');