<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/', [PagesController::class,'index']);


// Demo routes
Route::get('/datatables', [PagesController::class,'datatables']);
Route::get('/ktdatatables', [PagesController::class,'ktDatatables']);
Route::get('/select2', [PagesController::class,'select2']);
Route::get('/jquerymask',  [PagesController::class,'jQueryMask']);
Route::get('/icons/custom-icons', [PagesController::class,'customIcons']);
Route::get('/icons/flaticon', [PagesController::class,'flaticon']);
Route::get('/icons/fontawesome',[PagesController::class,'fontawesome']);
Route::get('/icons/lineawesome', [PagesController::class,'lineawesome']);
Route::get('/icons/socicons',  [PagesController::class,'socicons']);
Route::get('/icons/svg',  [PagesController::class,'svg']);

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search',  [PagesController::class,'quickSearch'])->name('quick-search');


Route::prefix('config')->group(function(){
    route::get('province',[\App\Http\Controllers\Config\ProvinceController::class,'index'])->name('config.province');
});


