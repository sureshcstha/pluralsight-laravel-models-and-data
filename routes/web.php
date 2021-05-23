<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//Route::get('/', [
//    'uses' => 'PostController@getIndex',
//    'as' => 'blog.index'
//]);

// Use below for Laravel 8
Route::get('/', [PostController::class, 'getIndex'])->name('blog.index');

/*

Simpler possibility in choosing the controller:
Route::get('/', 'PostController@getIndex')->name('blog.index');

*/

//Route::get('post/{id}', [
//    'uses' => 'PostController@getPost',
//    'as' => 'blog.post'
//]);
Route::get('post/{id}', [PostController::class, 'getPost'])->name('blog.post');


// Route::get('post/{id}/like', [
//     'uses' => 'PostController@getLikePost',
//     'as' => 'blog.post.like'
// ]);

// error was here, "/like was missing"
Route::get('post/{id}/like', [PostController::class, 'getLikePost'])->name('blog.post.like');


Route::get('about', function () {
    return view('other.about');
})->name('other.about');


Route::group(['prefix' => 'admin'], function() {

//    Route::get('', [
//        'uses' => 'PostController@getAdminIndex',
//        'as' => 'admin.index'
//    ]);                                                       // old way
    Route::get('', [PostController::class, 'getAdminIndex'])->name('admin.index');  // Laravel 8


//    Route::get('create', [
//        'uses' => 'PostController@getAdminCreate',
//        'as' => 'admin.create'
//    ]);
    Route::get('create', [PostController::class, 'getAdminCreate'])->name('admin.create');


//    Route::post('create', [
//        'uses' => 'PostController@postAdminCreate',
//        'as' => 'admin.create'
//    ]);
    Route::post('create', [PostController::class, 'postAdminCreate'])->name('admin.create');


//    Route::get('edit/{id}', [
//        'uses' => 'PostController@getAdminEdit',
//        'as' => 'admin.edit'
//    ]);
    Route::get('edit/{id}', [PostController::class, 'getAdminEdit'])->name('admin.edit');


//    Route::post('delete', [
//        'uses' => 'PostController@postAdminDelete',
//        'as' => 'admin.delete'
//    ]);

    Route::get('delete/{id}', [PostController::class, 'getAdminDelete'])->name('admin.delete');


//    Route::post('edit', [
//        'uses' => 'PostController@postAdminUpdate',
//        'as' => 'admin.update'
//    ]);
    Route::post('edit', [PostController::class, 'postAdminUpdate'])->name('admin.update');

});



