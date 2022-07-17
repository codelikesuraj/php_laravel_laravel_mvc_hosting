<?php

use App\Http\Controllers\UserController;
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

// user routes
Route::get('/users', [UserController::class, 'getUsers'])->name('user.all');
Route::get('/users/create', [UserController::class, 'createUser'])->name('user.create');
Route::post('/users/store', [UserController::class, 'storeUser'])->name('user.store');
Route::get('/users/{user}/edit', [UserController::class, 'editUser'])->name('user.edit');
Route::put('/users/{user}/update', [UserController::class, 'updateUser'])->name('user.update');
Route::delete('/users/{user}/delete', [UserController::class, 'deleteUser'])->name('user.delete');
