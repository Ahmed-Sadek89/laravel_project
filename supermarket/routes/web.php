<?php

use App\Http\Controllers\ProductController;
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

//  Route::get('/', function () {
//      return view('welcome');
//  });

Route::prefix('')->group(function(){

    Route::get('/','ProductController@index')->name('Product');

    Route::post('/add','ProductController@add')->name('Product.add');

    Route::get('/create','ProductController@create')->name('Product.create');


    Route::get('/edit/{id}','ProductController@edit')->name('Product.edit');

    Route::post('/{id}/update','ProductController@update')->name('Product.update');

    Route::get('/delete/{id}','ProductController@delete')->name('Product.delete');

});




