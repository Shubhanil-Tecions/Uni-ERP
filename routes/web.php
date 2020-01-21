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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('register', 'Admin\AdminController@create')->name('admin.register');
    Route::post('register', 'Admin\AdminController@store')->name('admin.register.store');
    Route::get('login', 'Admin\LoginController@login')->name('admin.auth.login');
    Route::post('login', 'Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.auth.logout');

});

Route::post('addproductsStore','Admin\AdminController@addproductsStore')->name('addproductsStore');
Route::get('addproducts', 'Admin\AdminController@addproducts')->name('addproducts');
Route::get('allproducts', 'Admin\AdminController@allproducts')->name('allproducts');
Route::get('dropfactory/{id}', 'Admin\AdminController@dropFactory')->name('dropFactory');

Route::get('addfactory', 'Admin\AdminController@addManufacture')->name('addManufacture');
Route::get('allfactories', 'Admin\AdminController@allManufacture')->name('allManufacture');
Route::post('addfactory', 'Admin\AdminController@addManufactureStore')->name('addManufactureStore');

