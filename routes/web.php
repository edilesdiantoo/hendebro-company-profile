<?php

use App\Models\Hdr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MNGContentController;

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
    $title = "Home";
    $active    = "home";
    $get_hdr_data = Hdr::all();
    // dd($get_hdr_data);
    return view('home', compact('get_hdr_data', 'active'));
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
});

Route::controller(MasterController::class)->group(function () {
    //User Master
    Route::get('/master/user', 'user');
    Route::get('/showUser', 'showUser');
    Route::get('/tambahUser', 'tambahUser');
    Route::get('/simpanUser', 'simpanUser');
    Route::get('/fetch_data', 'fetch_data');
    Route::get('/editUser/{id}', 'editUser');
    Route::get('/simpanEditUser/{id}', 'simpanEditUser');
    Route::get('/deleteUser/{id}', 'deleteUser');
    Route::get('/getSearch/{id}', 'getSearch');

    //Category Master
    Route::get('/master/category', 'category');
    Route::get('/showCategory', 'showCategory');
    Route::get('/tambahCategory', 'tambahCategory');
    Route::get('/simpanCategory', 'simpanCategory');
    Route::get('/fetch_category', 'fetch_category');
    Route::get('/editCategory/{id}', 'editCategory');
    Route::get('/simpanEditCategory/{id}', 'simpanEditCategory');
    Route::get('/deleteCategory/{id}', 'deleteCategory');
    Route::get('/getSearchCategory/{id}', 'getSearchCategory');
});

Route::controller(MNGContentController::class)->group(function () {
    //Menu Conten Landing Page
    Route::get('/MngContent/menucontent', 'menucontent');
    Route::get('/showMenuContent', 'showMenuContent');
    Route::get('/tambahMenuContent', 'tambahMenuContent');
    Route::get('/simpanMenuContent', 'simpanMenuContent');
    Route::get('/editMenuContent/{id}', 'editMenuContent');
    Route::get('/simpanEditMenuContent/{id}', 'simpanEditMenuContent');
    Route::get('/deleteMenuConten/{id}', 'deleteMenuConten');
    Route::get('/getSearchMenu/{id}', 'getSearchMenu');

    //Blog
    Route::get('/MngContent/blog', 'blog');
    Route::get('/showBlog', 'showBlog');
    Route::get('/tambahBlog', 'tambahBlog');
    Route::post('/simpanBlog', 'simpanBlog');
    Route::get('/fetch_blog', 'fetch_blog');
    Route::get('/editBlog/{id}', 'editBlog');
    Route::get('/simpanBlogEdit/{id}', 'simpanBlogEdit');
    Route::get('/deleteBlog/{id}', 'deleteBlog');
    Route::get('/getSearchMenu/{id}', 'getSearchMenu');

    // Source Code
    Route::get('/MngContent/scode', 'scode');
    Route::get('/showScode', 'showScode');
    Route::get('/tambahScode', 'tambahScode');
    Route::get('/editScode/{id}', 'editScode');
    Route::post('/simpanScode', 'simpanScode');
    // Route::get('/fetch_blog', 'fetch_blog');
    // Route::get('/simpanBlogEdit/{id}', 'simpanBlogEdit');
    // Route::get('/deleteBlog/{id}', 'deleteBlog');
    // Route::get('/getSearchMenu/{id}', 'getSearchMenu');
});
