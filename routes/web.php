<?php

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
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


Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/login', [UserAuthController::class, 'index'])->name('users.login');
Route::post('/users/authenticate', [UserAuthController::class, 'authenticate'])->name('users.authenticate');
Route::post('/send_mail', [ContactController::class, 'send_mail'])->name('send_mail');
Route::group(['middleware' => 'auth', 'prefix' => 'posts'], function () {
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/store', [PostController::class, 'store'])->name('posts.store');
    Route::post('/users/logout', [UserAuthController::class, 'logout'])->name('users.logout');
});
