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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/event', function (){
    return view(('pages.event'));
});

Route::get('/product', function (){
    return view(('pages.product'));
});

Route::get('/payment', function (){
    return view(('pages.payment'));
});

Route::get('/blog', function (){
    return view(('pages.blog'));
});

Route::get('/contact', function (){
    return view(('pages.contact'));
});
