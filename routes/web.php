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
Route::get('/profile-student-corner', [UserPageController::class, 'student_corner'])->name('profile-student-corner');
Route::get('/profile-student-corner-himahi', [UserPageController::class, 'himahi'])->name('profile-student-corner-himahi');
Route::get('/page-structure-organization', [UserPageController::class, 'page_structure_organization'])->name('page-structure-organization');
Route::get('/facillitas', [UserPageController::class, 'facillitas'])->name('facillitas');
Route::get('/profile-introduction', [UserPageController::class, 'introduction'])->name('profile-introduction');
Route::get('/page-lecture', [UserPageController::class, 'page_lecture'])->name('page-lecture');
Route::get('/profile-lecture-staff', [UserPageController::class, 'lecture_staff'])->name('profile-lecture-staff');
Route::get('/page-staff', [UserPageController::class, 'page_staff'])->name('page-staff');




Route::get('/academic', [UserPageController::class, 'academic'])->name("academic");
Route::get('/news-press-release', [UserPageController::class, 'press_release'])->name("news-press-release");
Route::get('/news-student', [UserPageController::class, 'student'])->name('news-student');
Route::get('/news-lecturer', [UserPageController::class, 'lecturer'])->name('news-lecturer');




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
