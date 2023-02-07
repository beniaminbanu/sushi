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
    return view('pages.home');
});
Route::get('/projects', function () {
    return view('pages.projects');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/hire-us', function () {
    return view('pages.hire_us');
});
Route::get('/free-consulting', function () {
    return view('pages.free_consulting');
});
Route::get('/terms-and-conditions', function () {
    return view('pages.terms_and_conditions');
});
Route::get('/privacy-policy', function () {
    return view('pages.privacy_policy');
});