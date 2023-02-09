<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\TesGambarController;
use App\Http\Controllers\VisitController;

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

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('tes-admin', [TesGambarController::class, 'index'])->name('tes-admin');
Route::post('/tes-admin-tambah', [TesGambarController::class, 'store'])->name('tes-admin-tambah');
Route::resource('/visit', VisitController::class);
Route::resource('/news', NewsController::class);

Route::get('/', [UserPageController::class, 'home'])->name('home');

Route::post('/login/post', [AuthController::class, 'login_post']);
Route::get('/logout', [AuthController::class, 'logout']);



Route::get('/profile', [UserPageController::class, 'profile'])->name('profile');
Route::get('/structure-organization', [UserPageController::class, 'structure_organization'])->name('structure-organization');
Route::get('/page-structure-organization', [UserPageController::class, 'page_structure_organization'])->name('page-structure-organization');
Route::get('/facillitas', [UserPageController::class, 'facillitas'])->name('facillitas');
Route::get('/lecture', [UserPageController::class, 'lecture'])->name('lecture');
Route::get('/page-lecture', [UserPageController::class, 'page_lecture'])->name('page-lecture');
Route::get('/staff', [UserPageController::class, 'staff'])->name('staff');
Route::get('/page-staff', [UserPageController::class, 'page_staff'])->name('page-staff');


Route::get('/academic', [UserPageController::class, 'academic'])->name("academic");
Route::get('/press-release', [UserPageController::class, 'page_release'])->name("press-release");
Route::get('/publication-research', [UserPageController::class, 'publication_research'])->name('publication-research');
Route::get('/testimony', [UserPageController::class, 'testimony'])->name('testimony');




Route::get('/news', [UserPageController::class, 'news'])->name('news');
Route::get('/page-news', [UserPageController::class, 'page_news'])->name('page-news');



Route::get('/download', [UserPageController::class, 'download'])->name('download');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
