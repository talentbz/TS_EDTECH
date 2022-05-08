<?php

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
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front.index');
Route::prefix('/admin')->middleware(['auth:web', 'Admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
    
    //administration section
    Route::group(['prefix' => 'administration'], function(){
        //admin manager section
        Route::group(['prefix' => 'manager'], function(){
            Route::get('/', [App\Http\Controllers\ManagerController::class, 'index'])->name('manager.index');
            Route::post('/add', [App\Http\Controllers\ManagerController::class, 'add'])->name('manager.add');
            Route::get('/detail', [App\Http\Controllers\ManagerController::class, 'detail'])->name('manager.detail');
            Route::get('/edit', [App\Http\Controllers\ManagerController::class, 'edit'])->name('manager.edit');
            Route::get('/delete', [App\Http\Controllers\ManagerController::class, 'delete'])->name('manager.delete');
        });
    });
});

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
