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

//user manager
Route::prefix('/user')->middleware(['auth:web', 'User'])->group(function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

    //setting
    Route::group(['prefix' => 'setting'], function(){
        Route::get('/', [App\Http\Controllers\User\SettingController::class, 'index'])->name('user.setting.index');
        Route::get('/info', [App\Http\Controllers\User\SettingController::class, 'info'])->name('user.setting.info');
        Route::get('/edit_password', [App\Http\Controllers\User\SettingController::class, 'edit_password'])->name('user.setting.edit_password');
        Route::get('/edit_email', [App\Http\Controllers\User\SettingController::class, 'edit_email'])->name('user.setting.edit_email');
    });
    //Billing
    Route::group(['prefix' => 'billing'], function(){
        Route::get('/', [App\Http\Controllers\User\BillingController::class, 'index'])->name('user.billing.index');
    });
});

//admin manger
Route::prefix('/admin')->middleware(['auth:web', 'Admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
    Route::group(['prefix' => 'setting'], function(){
        Route::group(['prefix' => 'user'], function(){
            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
            Route::get('/detail/{id}', [App\Http\Controllers\Admin\UserController::class, 'detail'])->name('admin.user.detail');
        });
    });
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
