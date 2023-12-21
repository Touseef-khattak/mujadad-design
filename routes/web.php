<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('home', function () {
    // $data['page_title'] = "Home - safehorizon";
    return view('home');
});

Route::get('/', function () {
    return view('home');
});
Route::get('case-2', function () {
    return view('wow');
});
Route::get('case-1', function () {
    return view('hilal-invest');
});
Route::get('hilal-audit', function () {
    return view('hilal-invest-audit');
});
Route::get('amal', function () {
    return view('amal');
});
Route::get('about-me', function () {
    return view('about');
});
// Route::get('home', function () {
//     return view('home');
// });
