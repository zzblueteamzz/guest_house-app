<?php
use App\Http\Controllers\PostsController;
use \App\Http\Controllers\LocationController;
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

//locations
Route::group(['prefix' => 'locations'], function () {
    Route::get('/', [LocationController::class, 'index'])->name('locations.index');
    Route::get('/create', [LocationController::class, 'create'])->name('locations.create');
    Route::post('/', [LocationController::class, 'store'])->name('locations.store');
    Route::get('edit/{id}', [LocationController::class, 'edit'])->name('locations.edit');
    Route::put('update/{id}', [LocationController::class, 'update'])->name('locations.update');
    Route::delete('/delete/{id}', [LocationController::class, 'delete'])->name('locations.delete');
});
