<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use \App\Http\Controllers\DbController;
use \App\Http\Controllers\Admin\CategoryDBcontroller;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

/**
 * Новости
 */
Route::group([
    'prefix' => 'news',
    'as' => 'news::'
], function () {

    Route::get('/', [NewsController::class, 'index'])
        ->name("categories");

    Route::get('/card/{news}', [NewsController::class, 'card'])
        ->where('news', '[0-9]+')
        ->name('card');

    Route::get('/{categoryId}', [NewsController::class, 'list'])
        ->where('id', '[0-9]+')
        ->name('list');

});

Route::match(['get', 'post'], '/feedback', [NewsController::class, 'feedback'])
    ->name('feedback');

Route::get('/db', [DbController::class, 'index']);

/** Админка новостей */

//Route::prefix('/admin/news')
//    ->as('admin::news')
//    ->group(function(){
//        Route::get('/', [AdminNewsController::class, 'index'])
//            ->name('index')->middleware('role:admin');
//        Route::match(['get', 'post'], '/create', [AdminNewsController::class, 'create'])
//            ->name('create')->middleware('role:admin');
//        Route::get('/update', [AdminNewsController::class, 'update'])
//            ->name('update')->middleware('role:admin');
//        Route::get('/delete', [AdminNewsController::class, 'delete'])
//            ->name('delete')->middleware('role:admin');
//        Route::get('/db', [CategoryDbController::class, 'index'])->middleware('role:admin');
//    });
Route::middleware('role:admin')->prefix('/adminPanel')
    ->group(function(){
        Route::match(['get','post'],'/', [AdminNewsController::class, 'index'])
            ->name('index');
        Route::resource( 'category', CategoryController::class);
        Route::get('/update', [AdminNewsController::class, 'update'])
            ->name('update')->middleware('role:admin');
        Route::get('/delete', [AdminNewsController::class, 'delete'])
            ->name('delete')->middleware('role:admin');
        Route::get('/db', [CategoryDbController::class, 'index'])->middleware('role:admin');
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
