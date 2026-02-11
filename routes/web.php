<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommonController;

Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('backend.loginpage.index');
})->name('login');

// backend routes define here 
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard.index');
    })->name('admin.dashboard');


    Route::get('/add-subject', function () {
        return view('backend.add-subject');
    })->name('admin.add-subject');

});

Route::post('fetch/{type}/{id?}/{returntype?}', [CommonController::class, 'fetchData']);
