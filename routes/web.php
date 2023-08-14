<?php

use App\Http\Controllers\dashboard\DashboardPageController;
use App\Http\Controllers\dashboard\Products\CategoryController;
use App\Http\Controllers\dashboard\Products\ProductController;
use App\Http\Controllers\dashboard\Author\AuthorController;
use App\Http\Controllers\dashboard\Auditor\AuditorController;
use App\Http\Controllers\dashboard\ContactUs\ContactUsController;
use App\Http\Controllers\website\AboutUsPageController;
use App\Http\Controllers\website\ContactUsPageController;
use App\Http\Controllers\website\HomePageController;
use App\Http\Controllers\website\NewsPageController;
use App\Http\Controllers\website\ProductPageController;
use App\Http\Controllers\website\SolutionsPageController;
use Illuminate\Support\Facades\Route;

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

//---------------- Website ---------------- //
Route::get('/', [HomePageController::class, 'index'])->name('website.home');
Route::get('about', [AboutUsPageController::class, 'index'])->name('website.about');
Route::get('contact', [ContactUsPageController::class, 'index'])->name('website.contact');

//Route::get('/products', [ProductPageController::class, 'index'])->name('website.products');
Route::get('/Books', [ProductPageController::class, 'index'])->name('website.products.index');
Route::get('/Book/{id}', [ProductPageController::class, 'details'])->name('website.product.details');

Route::get('/solutions', [SolutionsPageController::class, 'index'])->name('website.solutions');
Route::get('/news', [NewsPageController::class, 'index'])->name('website.news');
//---------------- End of Website ---------------- //

//---------------- Dashboard ---------------- //



Route::group(['prefix' => 'dashboard'], function () {

Route::get('/index', [DashboardPageController::class, 'index'])->name('dashboard.home');

    Route::get('/Books/index', [ProductController::class, 'index'])->name('dashboard.products.index');
    Route::get('/Books/data', [ProductController::class, 'getProductsData'])->name('dashboard.products.data');
    Route::get('/Books/create', [ProductController::class, 'create'])->name('dashboard.product.create');
    Route::post('/Books/store', [ProductController::class, 'store'])->name('dashboard.product.store');
    Route::get('/Books/edit/{id}', [ProductController::class, 'edit'])->name('dashboard.product.edit');
    Route::put('/Books/update/{id}', [ProductController::class, 'update'])->name('dashboard.product.update');
    Route::delete('/Books/destroy/{id}', [ProductController::class, 'destroy'])->name('dashboard.product.destroy');
    Route::delete('Books/media/delete/{id}', [ProductController::class, 'deleteImage'])->name('dashboard.product.deleteImage');

    Route::get('/categories/index', [CategoryController::class, 'index'])->name('dashboard.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('dashboard.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('dashboard.categories.store');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('dashboard.categories.edit');
    Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('dashboard.categories.update');
    Route::delete('/categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('dashboard.categories.destroy');



    Route::get('/author/index', [AuthorController::class, 'index'])->name('dashboard.author.index');
    Route::get('/author/create', [AuthorController::class, 'create'])->name('dashboard.author.create');
    Route::post('/author/store', [AuthorController::class, 'store'])->name('dashboard.author.store');
    Route::get('/author/edit/{id}', [AuthorController::class, 'edit'])->name('dashboard.author.edit');
    Route::put('/author/update/{id}', [AuthorController::class, 'update'])->name('dashboard.author.update');
    Route::delete('/author/destroy/{id}', [AuthorController::class, 'destroy'])->name('dashboard.author.destroy');


    Route::get('/auditor/index', [AuditorController::class, 'index'])->name('dashboard.auditor.index');
    Route::get('/auditor/create', [AuditorController::class, 'create'])->name('dashboard.auditor.create');
    Route::post('/auditor/store', [AuditorController::class, 'store'])->name('dashboard.auditor.store');
    Route::get('/auditor/edit/{id}', [AuditorController::class, 'edit'])->name('dashboard.auditor.edit');
    Route::put('/auditor/update/{id}', [AuditorController::class, 'update'])->name('dashboard.auditor.update');
    Route::delete('/auditor/destroy/{id}', [AuditorController::class, 'destroy'])->name('dashboard.auditor.destroy');

    Route::get('/contact-us/index', [ContactUsController::class, 'index'])->name('dashboard.contact-us.index');
    Route::get('/contact-us/create', [ContactUsController::class, 'create'])->name('dashboard.contact-us.create');



});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

