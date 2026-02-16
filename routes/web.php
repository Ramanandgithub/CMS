<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// Route::view('/', 'frontend.index')->name('frontend.index');
Route::get('/',function(){
     return view('frontend.default');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::view('/login', 'backend.loginpage.index')->name('login');


/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/add-subject', [AdminController::class, 'addSubject'])->name('add-subject');

    Route::get('/user-list', [AdminController::class, 'userList'])->name('user-list');
    Route::get('/user-profile', [AdminController::class, 'userProfile'])->name('user-profile');

    Route::get('/add-topics', [AdminController::class, 'addTopics'])->name('add-topics');

    Route::get('/add-sub-topic', [AdminController::class, 'addSubTopic'])->name('add-sub-topic');
    Route::get('/add-page', [AdminController::class, 'addPage'])->name('add-page');
});


/*
|--------------------------------------------------------------------------
| Common Routes
|--------------------------------------------------------------------------
*/

Route::post('fetch/{type}/{id?}/{returntype?}', [CommonController::class, 'fetchData'])
    ->name('fetch.data');


    