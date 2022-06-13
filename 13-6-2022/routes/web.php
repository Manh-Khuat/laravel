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

// Route::get('/', function () {
//     $mang = [
//         'ĐỒng', 'Phúc', 'Dũng',
//     ];
//     return view('welcome', compact('mang'));
// });
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/gioi-thieu', function () {
    $name = 'About page';
    return view('about', compact('name'));
});
