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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('produk');

Route::get('/contact-us', ['App\Http\Controllers\ContactUsController', 'index'])->name('contact');
Route::post('/contact-us', ['App\Http\Controllers\ContactUsController', 'send'])->name('contact.send');


