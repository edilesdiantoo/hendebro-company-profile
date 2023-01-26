<?php

use App\Models\Hdr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    echo $exitCode;
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//master

Route::get('/master/user', [MasterController::class, 'user']);
Route::get('/showUser', [MasterController::class, 'showUser']);
Route::get('/tambahUser', [MasterController::class, 'tambahUser']);
Route::get('/simpanUser', [MasterController::class, 'simpanUser']);
Route::get('/show', [MasterController::class, 'show']);
Route::get('/fetch_data', [MasterController::class, 'fetch_data']);
Route::get('/editUser/{id}', [MasterController::class, 'editUser']);
Route::get('/simpanEditUser/{id}', [MasterController::class, 'simpanEditUser']);
Route::get('/deleteUser/{id}', [MasterController::class, 'deleteUser']);
Route::get('/getSearch/{id}', [MasterController::class, 'getSearch']);
Route::get('master/category', [MasterController::class, 'category']);
Route::get('/showCategory', [MasterController::class, 'showCategory']);
Route::get('/fetch_category', [MasterController::class, 'fetch_category']);
Route::get('/tambahCategory', [MasterController::class, 'tambahCategory']);
Route::get('/simpanCategory', [MasterController::class, 'simpanCategory']);
Route::get('/editCategory/{id}', [MasterController::class, 'editCategory']);
Route::get('/simpanEditCategory/{id}', [MasterController::class, 'simpanEditCategory']);
Route::get('/deleteCategory/{id}', [MasterController::class, 'deleteCategory']);
Route::get('/getSearchCategory/{id}', [MasterController::class, 'getSearchCategory']);


// management content
Route::get('/MngContent/hdr', [MNGContentController::class, 'hdr']);
Route::get('/showMenuHdr', [MNGContentController::class, 'showMenuHdr']);
Route::get('/tambahMenuHdr', [MNGContentController::class, 'tambahMenuHdr']);
Route::get('/simpanMenuHdr', [MNGContentController::class, 'simpanMenuHdr']);
Route::get('/editMenuHdr/{id}', [MNGContentController::class, 'editMenuHdr']);
Route::get('/simpanEditMenuHdr/{id}', [MNGContentController::class, 'simpanEditMenuHdr']);
Route::get('/deleteMenuHdr/{id}', [MNGContentController::class, 'deleteMenuHdr']);
Route::get('/MngContent/blog', [MNGContentController::class, 'blog']);
Route::get('/showBlog', [MNGContentController::class, 'showBlog']);
Route::get('/tambahBlog', [MNGContentController::class, 'tambahBlog']);
