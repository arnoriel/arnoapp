<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
Route::get('/setting', function () {
    return view('setting.index');
});
Route::get('/main', function () {
    return view('main.index');
});
Route::get('/user', function () {
    return view('user.index');
});
Route::get('/creator', function () {
    return view('creator.index');
});
Route::get('/article', function () {
    return view('article.index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/artikel', function () {
    return view('main.article');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::resource('setting', SettingController::class);
route::resource('user', UserController::class);
route::resource('creator', CreatorController::class);
route::resource('article', ArticleController::class);
Route::get('/main', [App\Http\Controllers\SettingController::class, 'mainset']);
Route::get('/main/{id}', [App\Http\Controllers\ArticleController::class, 'baca']);
Route::get('/artikel', [App\Http\Controllers\ArticleController::class, 'menu']);
// Route::get('/main', [App\Http\Controllers\ArticleController::class, 'articlemain']);
// Route::get('/main', [App\Http\Controllers\CreatorController::class, 'creatormain']);
Route::get('/home', [App\Http\Controllers\ArticleController::class, 'articlehome']);