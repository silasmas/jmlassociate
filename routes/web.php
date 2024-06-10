<?php

use App\Http\Controllers\Controller;
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
    return view('pages.index');
})->name("home");
Route::get('/about', function () {
    return view('pages.about');
})->name("about");
Route::get('/service', function () {
    return view('pages.service');
})->name("service");
Route::get('/contact', function () {
    return view('pages.contact');
})->name("contact");
Route::get('/blog', function () {
    return view('pages.blog');
})->name("blog");
Route::post('/sendMessage', [Controller::class, 'sendMessage'])->name('sendMessage');
