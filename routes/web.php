<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
Route::get('/', [\App\Http\Controllers\PagesController::class, 'index']);

Route::get('/about', [\App\Http\Controllers\PagesController::class, 'about']);

Route::get('/services', [\App\Http\Controllers\PagesController::class, 'services']);
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
