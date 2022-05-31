<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('layout.index');
});

Route::get('/daftarpengajuan', function () {
    return view('daftarpengajuan');
});

Route::get('/inputpengajuan', function () {
    return view('inputpengajuan');
});

Route::get('/daftaruser', function () {
    return view('user.daftaruser');
});

Route::get('/tambahuser', function () {
    return view('user.tambahuser');
});

Route::get('/daftarpenjabat', function () {
    return view('daftarpenjabat');
});

Route::get('/daftarrekening', function () {
    return view('daftarrekening');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/', 'LoginController@getLogin');

// Route::get('Login', 'BodyController@index');

// Route::get('/login', 'LoginController@index');
// Route::get('userdata', 'LoginController@user_session');
// Route::get('Login', 'LoginController@index');
// Route::get('logout', 'LoginController@logout');
// Route::post('setlogin', 'LoginController@setlogin');

// Route::group(['prefix' => 'Home', 'as' => 'Home.', 'middleware' => ['checklogin']], function () {

//     Route::get('/', ['as' => 'view', 'uses' => 'homeController@index']);
// });

