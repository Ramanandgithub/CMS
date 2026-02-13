<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommonController;

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

Route::prefix('admin')->name('admin.')->group(function () {

    Route::view('/dashboard', 'backend.dashboard.index')
        ->name('dashboard');

    Route::view('/add-subject', 'backend.add-subject')
        ->name('add-subject');
});


/*
|--------------------------------------------------------------------------
| Common Routes
|--------------------------------------------------------------------------
*/

Route::post('fetch/{type}/{id?}/{returntype?}', [CommonController::class, 'fetchData'])
    ->name('fetch.data');


    