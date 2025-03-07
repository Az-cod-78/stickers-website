<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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
    return view('welcome');
});
Route::get('store', [FrontendController::class, 'storepage']);
Route::get('cart', [FrontendController::class, 'cart']);
Route::get('about', [FrontendController::class, 'about']);
Route::get('contact', [FrontendController::class, 'contact']);

Route::get('login-register', [FrontendController::class, 'loginRegister']);
Route::get('dashboard', [FrontendController::class, 'dashboard']);
Route::get('create-page', [FrontendController::class, 'createPage'])->name('create');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

