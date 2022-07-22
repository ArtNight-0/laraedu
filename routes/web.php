<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/','HomeController@index')->name('home.index');
    

    Route::group(['middleware' => ['guest']], function () {
        Route::get('login', 'LoginController@index')->name('login.index');
        Route::post('login', 'LoginController@login')->name('login.perform');

        Route::get('register', 'RegisterController@index')->name('register.index');
        Route::post('register', 'RegisterController@register')->name('register.perform');
 
    });
    Route::group(['middleware' => ['auth']], function () {
        Route::post('logout', 'LoginController@logout')->name('logout');

        Route::middleware(['isAdmin'])->group(function(){
            Route::get('/admin','AdminController@index')->name('v_admin.index');
        });
    });
});


