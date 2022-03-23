<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;

Route::get('/post', [PostController::class, 'index']);  
Route::get('/post/create', [PostController::class, 'create']); 
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{id}/edit', [PostController::class, 'edit']);
Route::put('/post/{id}', [PostController::class, 'update']);  
Route::delete('/post/{id}/destroy', [PostController::class, 'destroy']);