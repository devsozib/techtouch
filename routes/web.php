<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/our-history', [FrontendController::class, 'ourHistory'])->name('ourHistory');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/shubho-shongo', [FrontendController::class, 'shubhoShongo'])->name('shubho_shongo');
Route::get('/what-we-do', [FrontendController::class, 'whatWeDo'])->name('what_we_do');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/news-single/{id}', [FrontendController::class, 'newsSingle'])->name('news_single');
Route::get('/single-history', [FrontendController::class, 'singleHistory'])->name('single_history');



Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::group(['middleware' => ['auth']], function () { 
    Route::resource('category',CategoryController::class);
    Route::resource('news',NewsController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

