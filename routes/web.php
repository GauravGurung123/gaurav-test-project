<?php

// namespace App\Http\Controllers;

use App\Http\Controllers\UserController;

// use App\Http\Controllers\Category\CategoryController;
// use GuzzleHttp\Middleware;
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
}
);

Route::group(['middleware' => 'usercheck:test', 'as' => 'user.'], function(){
    Route::get('/user', [UserController::class, 'index'])->name('index'); 
    Route::get('/user/{name}', [UserController::class, 'show'])->name('show'); 
});

// Route::group(['namespace' => 'Category', 'prefix'=>'product'], function () {
//     Route::resource('categories', CategoryController::class); 
// }); 

// Assignment 2
Route::group(['namespace'=>'Category'], function(){
    Route::resources([
        'categories' => 'CategoryController',
        'products' => 'ProductController',
    ]);
});  
