<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\Category\CategoryController;
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
Auth::routes();

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'usercheck:test', 'as' => 'user.'], function(){
//     Route::get('/user', [UserController::class, 'index'])->name('index'); 
//     Route::get('/user/{name}', [UserController::class, 'show'])->name('show'); 
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'aboutMe'])->name('about');

// User Controller
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}/destroy', [App\Http\Controllers\UserController::class, 'destroy']);

// Post Controller
include('post.php');

// Category Controller
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create'); 
Route::post('/category', [CategoryController::class, 'store']); 

