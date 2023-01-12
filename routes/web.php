<?php
use App\Http\Controllers\PostsController;
use \App\Http\Controllers\LocationController;
use \App\Http\Controllers\HouseTypeController;
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
//house_types
Route::group(['prefix' => 'house_types'], function () {
    Route::get('/', [HouseTypeController::class, 'index'])->name('house_types.index');
    Route::get('/create', [HouseTypeController::class, 'create'])->name('house_types.create');
    Route::post('/', [HouseTypeController::class, 'store'])->name('house_types.store');
    Route::get('edit/{id}', [HouseTypeController::class, 'edit'])->name('house_types.edit');
    Route::put('update/{id}', [HouseTypeController::class, 'update'])->name('house_types.update');
    Route::delete('/delete/{id}', [HouseTypeController::class, 'delete'])->name('house_types.delete');
});
