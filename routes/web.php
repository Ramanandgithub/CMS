<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/redis-test', function () {
    Redis::set('name', 'Ramanand');
    return Redis::get('name');
});

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'default'])->name('frontend.default');
// Route::get('/',function(){
//      return view('frontend.default');
// });
// Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('subject/{slug}', [HomeController::class, 'home'])->name('subjects.show');
Route::get('subject/{slug}/{subtopic}', [HomeController::class, 'pageShow'])->name('subjects.page.show');

Route::get('{subject}/{slug}/{id}', [HomeController::class, 'subtopicShow'])
    ->name('subtopic.show');

Route::get('dashboard/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route::get('/admin/login', function(){
//     return view( 'backend.loginpage.index');
// })->name('login');

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
    Route::post('/subjects/store', [AdminController::class, 'storeSubjects'])
        ->name('subjects.store');
    Route::post('/subjects/update/{id}', [AdminController::class, 'updateSubject'])->name('admin.subjects.update');
    Route::post('/subjects/delete/{id}/{isActive}', [AdminController::class, 'deleteSubject'])->name('admin.subjects.delete');

    Route::get('/user-list', [AdminController::class, 'userList'])->name('user-list');
    Route::get('/user-profile', [AdminController::class, 'userProfile'])->name('user-profile');

    Route::get('/add-topics', [AdminController::class, 'addTopics'])->name('add-topics');
    Route::post('/topics/store', [AdminController::class, 'storeTopics'])->name('topics.store');
    Route::post('/topics/update/{id}', [AdminController::class, 'updateTopics'])->name('admin.topics.update');
    Route::post('/topics/delete/{id}/{isActive}', [AdminController::class, 'deleteTopic'])->name('admin.topics.delete');

    Route::get('/add-sub-topic', [AdminController::class, 'addSubTopic'])->name('add-sub-topic');
    Route::post('/sub-topics/store', [AdminController::class, 'storeSubTopics'])->name('sub-topics.store');
    Route::post('/sub-topics/update/{id}', [AdminController::class, 'updateSubTopics'])->name('admin.sub-topics.update');
    Route::post('/sub-topics/delete/{id}/{isActive}', [AdminController::class, 'deleteSubTopic'])->name('admin.sub-topics.delete');
    Route::get('/add-page', [AdminController::class, 'addPage'])->name('add-page');

    //add the content block route
    Route::post('/content-blocks/store', [AdminController::class, 'addBlocksContent'])->name('content-blocks.store');
    Route::post('/content-blocks/update/{id}', [AdminController::class, 'editBlocksContent'])->name('content-blocks.update');
    Route::post('/content-blocks/delete/{id}', [AdminController::class, 'deleteBlocksContent'])->name('content-blocks.delete');

});

/*
|--------------------------------------------------------------------------
| Common Routes
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
Route::post('fetch/{type}/{id?}/{returntype?}', [CommonController::class, 'fetchData'])
    ->name('fetch.data');
