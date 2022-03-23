<?php


use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('front.index');
}
);

// Route::group(['middleware' => 'usercheck:test', 'as' => 'user.'], function(){
//     Route::get('/user', [UserController::class, 'index'])->name('index'); 
//     Route::get('/user/{name}', [UserController::class, 'show'])->name('show'); 
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Controller
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}/destroy', [App\Http\Controllers\UserController::class, 'destroy']);

// Post Controller
include('post.php');
