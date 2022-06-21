<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/shop', 'App\Http\Controllers\HomeController@shop')->name('home.shop');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/','App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
    Route::resources([
        'category' => 'App\Http\Controllers\CategoryController',
        'product' => 'App\Http\Controllers\ProductController',
        'banner' => 'App\Http\Controllers\BannerController',
        'account' => 'App\Http\Controllers\AccountController',
        'blog' => 'App\Http\Controllers\BlogController',
        'order' => 'App\Http\Controllers\OrderController'
    ]);
});


