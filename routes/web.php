<?php

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


Route::group(["namespace" => "App\Http\Controllers\HomePage","middleware" => "auth"],function() {
    Route::get('/','IndexController')->name('homepage_index');
    Route::get('/post_comments/{post}','ShowPostCommentsController')->name('homepage_post_comments');
});

Route::group(["namespace" => "App\Http\Controllers\Admin","prefix" => "admin","middleware" => ["admin"]],function() {
    Route::get('/','IndexController')->name('admin_index');

    Route::group(["namespace" => "Posts",'prefix' => 'posts'],function() {
        Route::get('/','IndexController')->name('admin_posts_index');
        Route::get('/create','CreateController')->name('admin_posts_create');
        Route::get('/search','SearchController')->name('admin_posts_search');
        Route::get('/edit/{post}','EditController')->name('admin_posts_edit');
        Route::post('/store','StoreController')->name('admin_posts_store');
        Route::patch('/update/{post}','UpdateController')->name('admin_posts_update');
        Route::delete('/delete/{post}','DeleteController')->name('admin_posts_delete');
    });

    Route::group(["namespace" => "PostComments",'prefix' => 'posts_comments'],function() {
        Route::get('/','IndexController')->name('admin_post_comments_index');
        Route::get('/create','CreateController')->name('admin_post_comments_create');
        Route::get('/search','SearchController')->name('admin_post_comments_search');
        Route::get('/edit/{post_comment}','EditController')->name('admin_post_comments_edit');
        Route::post('/store','StoreController')->name('admin_post_comments_store');
        Route::patch('/update/{post_comment}','UpdateController')->name('admin_post_comments_update');
        Route::delete('/delete/{post_comment}','DeleteController')->name('admin_post_comments_delete');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
