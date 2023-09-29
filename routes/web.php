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

Route::get('/', function () {
    return view('website_view.welcome');
});

Route::get('/about-us', function () {
    return view('website_view.about-us');
});

Route::get('/message-form-chairman', function () {
    return view('website_view.message-form-chairman');
});

Route::get('/message-form-principal', function () {
    return view('website_view.message-form-principal');
});

Route::get('/governing-body', function () {
    return view('website_view.governing-body');
});

Route::get('/approval-letter', function () {
    return view('website_view.approval-letter');
});

Route::get('/history', function () {
    return view('website_view.history');
});

Route::get('/vision-and-objectives', function () {
    return view('website_view.vision-and-objectives');
});

Route::get('/vision-and-objectives', function () {
    return view('website_view.vision-and-objectives');
});

Route::get('/activities', function () {
    return view('website_view.activities');
});