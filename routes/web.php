<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;


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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});


Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin_logout');


// user management routes

Route::group(['prefix' => 'users','middleware' => ['auth:sanctum']], function() {


    Route::get('/view', [UserController::class, 'userView'])->name('user.view');
    Route::get('/add', [UserController::class, 'userAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'userStore'])->name('user.store');

    Route::get('/edit/{id}', [UserController::class, 'userEdit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'userUpdate'])->name('user.update');

    Route::get('/delete/{id}', [UserController::class, 'userDelete'])->name('user.delete');


});

// user management routes

// prfile routes

Route::group(['prefix' => 'profile','middleware' => ['auth:sanctum']], function() {

    Route::get('/view', [ProfileController::class, 'profileView'])->name('profile.view');

});