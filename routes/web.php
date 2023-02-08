<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\TesGambarController;


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

Route::get('tes-admin', [TesGambarController::class, 'index'])->name('tes-admin');
Route::post('/tes-admin-tambah', [TesGambarController::class, 'store'])->name('tes-admin-tambah');


Route::get('/', [UserPageController::class, 'home'])->name('home');


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



// Route::get('', function () {
//     return view('page/user/home');
// });

// Route::get('profile', function () {
//     return view('page/user/profile/profile');
// });

// Route::get('page-lecture', function () {
//     return view('page/user/profile/page-lecture');
// });

// Route::get('lecture', function () {
//     return view('page/user/profile/lecture');
// });

// Route::get('staff', function () {
//     return view('page/user/profile/staff');
// });

// Route::get('page-staff', function () {
//     return view('page/user/profile/page-staff');
// });

// Route::get('page-news', function () {
//     return view('page/user/news/page-news');
// });

// Route::get('news', function () {
//     return view('page/user/news/news');
// });

// Route::get('download', function () {
//     return view('page/user/download');
// });

// Route::get('academic', function () {
//     return view('page/user/academic/academic');
// });

// Route::get('publication', function () {
//     return view('page/user/academic/publication-research');
// });
