<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/profile', 'ProfileController@index')->name('profile');
// Route::put('/profile', 'ProfileController@update')->name('profile.update');
// Route::get('/about', function () {
//     return view('about');
// })->name('about');

/////////////////////////////////////////////////////////////////////////////////

// Route::get('/superadmin/dashboard', 'C_SuperAdmin@index');

Route::get('login', 'AuthController@index')->name('login');
Route::post('login_process', 'AuthController@loginProcess')->name('login_process');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['logincheck:0']], function(){
        Route::get('superadmin/dashboard', 'C_SuperAdmin@index')->name('superadmin');
    });
    Route::group(['middleware' => ['logincheck:1']], function(){
        Route::get('adminpusat/dashboard', 'C_AdminPusat@index')->name('adminpusat');
    });
});
