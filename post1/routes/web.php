<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
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


Route::prefix('post')->group(function(){

    Route::get('/',[PostController::class,'index'])->name('Post');

    Route::post('/create',[PostController::class,'create'])->name('Post.create');

    Route::get('/show/{id}',[PostController::class,'showById'])->name('Post.show');

    Route::get('/edit/{id}',[PostController::class,'edit'])->name('Post.edit');

    Route::post('/update/{id}',[PostController::class,'update'])->name('Post.update');

    Route::get('/delete/{id}',[PostController::class,'delete'])->name('Post.delete');

});
