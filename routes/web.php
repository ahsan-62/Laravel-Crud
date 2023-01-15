<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SubCategoryController;
use App\Models\Book;
use Illuminate\Http\Request;
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

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/contact-page', function () {
    return view('contact');
})->name('contact');


Route::get('/services-page', function () {
    return view('service');
})->name('service');

Route::resource('/category', CategoryController::class);
Route::resource('/subcategory', SubCategoryController::class);
Route::get('/category/{category_id}/restore',[CategoryController::class,'restore'])->name('category.restore');

Route::get('books',[FrontController::class,('books')]);
