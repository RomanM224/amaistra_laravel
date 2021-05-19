<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/posts', 'App\Http\Controllers\Admin\PostController@showAll')->name('showAllPosts');

Route::get('/posts/{post_id}', 'App\Http\Controllers\Admin\PostController@showOne')->name('showOnePost');

Auth::routes();

Route::get('/reviews', 'App\Http\Controllers\Admin\ReviewController@showAll')->name('showAllReview');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');



Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin_panel/index', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_panel');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/admin_panel/post/create', function () {
        return view('admin.post.create');
    })->name('admin_panel_post_create');

    Route::post('/admin_panel/post/post-store', 'App\Http\Controllers\Admin\PostController@store')->name('postStore');

    Route::get('/admin_panel/post/showAll', 'App\Http\Controllers\Admin\PostController@showAllAdmin')->name('showAllPostsAdmin');

    Route::get('/admin_panel/post/{post_id}', 'App\Http\Controllers\Admin\PostController@showOneAdmin')->name('showOnePostAdmin');

    Route::get('/admin_panel/post_edit/{post_id}', 'App\Http\Controllers\Admin\PostController@edit')->name('editPostAdmin');

    Route::post('/admin_panel/post/postEdit', 'App\Http\Controllers\Admin\PostController@postEdit')->name('postEdit');

    Route::get('/admin_panel/post_delete/{post_id}', 'App\Http\Controllers\Admin\PostController@delete')->name('deletePost');

    Route::get('/admin_panel/review/create', function () {
        return view('admin.review.create');
    })->name('admin_panel_review_create');

    Route::post('/admin_panel/review/review-store', 'App\Http\Controllers\Admin\ReviewController@store')->name('reviewStore');

    Route::get('/admin_panel/review/showAll', 'App\Http\Controllers\Admin\ReviewController@showAllAdmin')->name('showAllReviewsAdmin');

    Route::get('/admin_panel/review_edit/{review_id}', 'App\Http\Controllers\Admin\ReviewController@edit')->name('editReviewAdmin');

    Route::post('/admin_panel/review/reviewEdit', 'App\Http\Controllers\Admin\ReviewController@reviewEdit')->name('reviewEdit');

    Route::get('/admin_panel/review_delete/{review_id}', 'App\Http\Controllers\Admin\ReviewController@delete')->name('deleteReview');

});
