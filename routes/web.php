<?php

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

Route::get('/',[\App\Http\Controllers\HomeController::class,'getAllArticles'])->name('home');

Route::prefix("/articles")->group(function (){
    Route::get('/create',[\App\Http\Controllers\ArticleController::class,'create'])->name('article.create');
    Route::get('/edit/{ma_bviet}',[\App\Http\Controllers\ArticleController::class,'edit'])->name('article.edit');
});



