<?php

use Illuminate\Support\Facades\Auth;
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


    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('Admin')->prefix('admin')->middleware('admin')->group(function (){
    Route::get('', 'AdminController@index')->name('admin.index');

    Route::namespace('Promo')->prefix('promos')->group( function (){
        Route::get('', 'PromoController')->name('admin.promo.index');
        Route::post('', 'StoreController')->name('admin.promo.store');
        Route::get('/create', 'CreateController')->name('admin.promo.create');
        Route::get('/{promo}', 'ShowController')->name('admin.promo.show');
        Route::get('/{promo}/edit', 'EditController')->name('admin.promo.edit');
        Route::patch('/{promo}', 'UpdateController')->name('admin.promo.update');
        Route::delete('/{promo}', 'DeleteController')->name('admin.promo.delete');
        Route::delete('', 'DeleteController@del')->name('admin.promo.del');
    });

    Route::namespace('Service')->prefix('services')->group( function (){
        Route::get('', 'ServiceController')->name('admin.service.index');
        Route::post('', 'StoreController')->name('admin.service.store');
        Route::get('/create', 'CreateController')->name('admin.service.create');
        Route::get('/{service}', 'ShowController')->name('admin.service.show');
        Route::get('/{service}/edit', 'EditController')->name('admin.service.edit');
        Route::patch('/{service}', 'UpdateController')->name('admin.service.update');
        Route::delete('/{service}', 'DeleteController')->name('admin.service.delete');
        Route::delete('', 'DeleteController@del')->name('admin.service.del');
    });

    Route::namespace('Work')->prefix('works')->group( function (){
        Route::get('', 'WorkController')->name('admin.work.index');
        Route::post('', 'StoreController')->name('admin.work.store');
        Route::get('/create', 'CreateController')->name('admin.work.create');
        Route::get('/{workRu}', 'ShowController')->name('admin.work.show');
        Route::get('/{workRu}/edit', 'EditController')->name('admin.work.edit');
        Route::patch('/{workRu}', 'UpdateController')->name('admin.work.update');
        Route::delete('/{workRu}', 'DeleteController')->name('admin.work.delete');
        Route::delete('', 'DeleteController@del')->name('admin.work.del');
    });

    Route::namespace('Price')->prefix('prices')->group( function (){
        Route::get('', 'PriceController')->name('admin.price.index');
        Route::post('', 'StoreController')->name('admin.price.store');
        Route::get('/create', 'CreateController')->name('admin.price.create');
        Route::get('/{priceRu}', 'ShowController')->name('admin.price.show');
        Route::get('/{priceRu}/edit', 'EditController')->name('admin.price.edit');
        Route::patch('/{priceRu}', 'UpdateController')->name('admin.price.update');
        Route::delete('/{priceRu}', 'DeleteController')->name('admin.price.delete');
        Route::delete('', 'DeleteController@del')->name('admin.price.del');
    });

    Route::namespace('Review')->prefix('reviews')->group( function (){
        Route::get('', 'ReviewController')->name('admin.review.index');
        Route::post('', 'StoreController')->name('admin.review.store');
        Route::get('/create', 'CreateController')->name('admin.review.create');
        Route::get('/{reviewRu}', 'ShowController')->name('admin.review.show');
        Route::get('/{reviewRu}/edit', 'EditController')->name('admin.review.edit');
        Route::patch('/{reviewRu}', 'UpdateController')->name('admin.review.update');
        Route::delete('/{reviewRu}', 'DeleteController')->name('admin.review.delete');
        Route::delete('', 'DeleteController@del')->name('admin.review.del');
    });


    Route::namespace('Vacancy')->prefix('vacancies')->group( function (){
        Route::get('', 'VacancyController')->name('admin.vacancy.index');
        Route::post('', 'StoreController')->name('admin.vacancy.store');
        Route::get('/create', 'CreateController')->name('admin.vacancy.create');
        Route::get('/{vacancyRu}', 'ShowController')->name('admin.vacancy.show');
        Route::get('/{vacancyRu}/edit', 'EditController')->name('admin.vacancy.edit');
        Route::patch('/{vacancyRu}', 'UpdateController')->name('admin.vacancy.update');
        Route::delete('/{vacancyRu}', 'DeleteController')->name('admin.vacancy.delete');
        Route::delete('', 'DeleteController@del')->name('admin.vacancy.del');
    });
});







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
