<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsControllerOld as AdminNewsController;
use \App\Http\Controllers\DbController;
use App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\NewsController;


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

    Route::get('/card/{newsOld}', [NewsController::class, 'card'])
        ->where('newsOld', '[0-9]+')
        ->name('card');

    Route::get('/{categoryId}', [NewsController::class, 'list'])
        ->where('id', '[0-9]+')
        ->name('list');

});

Route::match(['get', 'post'], '/feedback', [NewsController::class, 'feedback'])
    ->name('feedback');

Route::get('/db', [DbController::class, 'index']);

/** Админка новостей */

Route::middleware('role:admin')->prefix('/adminPanel')
    ->group(function(){
        Route::match(['get','post'],'/', [AdminNewsController::class, 'index'])
            ->name('index');
        Route::resource( 'category', CategoryController::class);
        Route::resource('news', NewsController::class);
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
