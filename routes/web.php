<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicesController;
use App\Providers\RouteServiceProvider;
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

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/zelosos-contactos',[App\Http\Controllers\HomeController::class,'contactos'])->name('contactos');
Route::get('/portfolio-details',[App\Http\Controllers\ContentController::class,'portfolio_details'])->name('portfolio_details');
Route::get('/services-details',[App\Http\Controllers\ContentController::class,'service_details'])->name('services-details');
Route::get('/blog',[App\Http\Controllers\ContentController::class,'blog'])->name('blog');
Route::get('/blog-details',[App\Http\Controllers\ContentController::class,'blog_details'])->name('blog-details');


Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function(){

    //dashboard
    Route::group(['prefix' => '', 'as' => 'dashboard.' ], function(){
        Route::get('/',[DashboardController::class, 'index'])->name('index');
    });

    //services
    Route::group(['prefix' => 'services', 'as' => 'services.' ], function(){
        Route::get('/',[ServicesController::class, 'index'])->name('index');
        Route::get('/create',[ServicesController::class, 'create'])->name('create');
        Route::post('/',[ServicesController::class, 'store'])->name('store');
        Route::get('/edit/{id?}',[ServicesController::class, 'edit'])->name('edit');
        Route::put('/update',[ServicesController::class, 'update'])->name('update');
        Route::delete('delete/{id?}',[ServicesController::class, 'destroy'])->name('delete');
    });

});


