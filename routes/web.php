<?php

use App\Http\Controllers\dashboard\Auditor\AuditorController;
use App\Http\Controllers\dashboard\Author\AuthorController;
use App\Http\Controllers\dashboard\ContactUs\ContactUsController;
use App\Http\Controllers\dashboard\DashboardPageController;
use App\Http\Controllers\dashboard\Products\CategoryController;
use App\Http\Controllers\dashboard\Products\ProductController;
use App\Http\Controllers\dashboard\Supplier\CityController;
use App\Http\Controllers\dashboard\Supplier\CountryController;
use App\Http\Controllers\dashboard\Supplier\SupplierController;
use App\Http\Controllers\website\AboutUsPageController;
use App\Http\Controllers\website\AuthorPageController;
use App\Http\Controllers\website\AuditorPageController;
use App\Http\Controllers\website\ContactUsPageController;
use App\Http\Controllers\website\FrontPageController;
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

Route::get('/home', [FrontPageController::class, 'index'])->name('home');
Route::get('/', [FrontPageController::class, 'index'])->name('website.home');
Route::get('about', [AboutUsPageController::class, 'index'])->name('website.about');
Route::get('contact', [ContactUsPageController::class, 'index'])->name('website.contact');
Route::post('contact/store', [ContactUsPageController::class, 'store'])->name('website.contact.store');

//Route::get('/products', [ProductPageController::class, 'index'])->name('website.products');
Route::get('/books', [ProductPageController::class, 'index'])->name('website.products.index');
Route::get('/books/category/{id}', [ProductPageController::class, 'categoryProducts'])->name('website.products.category.index');
Route::get('/books/author/{id}', [ProductPageController::class, 'authorProducts'])->name('website.products.author.index');
Route::get('/books/auditor/{id}', [ProductPageController::class, 'auditorProducts'])->name('website.products.auditor.index');
Route::get('/book/{id}', [ProductPageController::class, 'details'])->name('website.product.details');
Route::get('/solutions', [SolutionsPageController::class, 'index'])->name('website.solutions');
Route::get('/news', [NewsPageController::class, 'index'])->name('website.news');

Route::get('/authors', [AuthorPageController::class, 'index'])->name('website.authors.index');
Route::get('/auditors', [AuditorPageController::class, 'index'])->name('website.auditors.index');



Route::get('/suppliers', [FrontPageController::class, 'suppliersIndex'])->name('website.suppliers.index');
Route::get('/scientific', [FrontPageController::class, 'scientificIndex'])->name('website.scientific.index');

//---------------- End of Website ---------------- //

//---------------- Dashboard ---------------- //



Route::group(['prefix' => 'dashboard'], function () {

Route::get('/index', [DashboardPageController::class, 'index'])->name('dashboard.home');

    Route::get('/books/index', [ProductController::class, 'index'])->name('dashboard.products.index');
    Route::get('/books/data', [ProductController::class, 'getProductsData'])->name('dashboard.products.data');
    Route::get('/books/create', [ProductController::class, 'create'])->name('dashboard.product.create');
    Route::post('/books/store', [ProductController::class, 'store'])->name('dashboard.product.store');
    Route::get('/books/edit/{id}', [ProductController::class, 'edit'])->name('dashboard.product.edit');
    Route::put('/books/update/{id}', [ProductController::class, 'update'])->name('dashboard.product.update');
    Route::delete('/books/destroy/{id}', [ProductController::class, 'destroy'])->name('dashboard.product.destroy');
    Route::delete('/books/media/delete/{id}', [ProductController::class, 'deleteImage'])->name('dashboard.product.deleteImage');

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
    Route::get('/contact-us/create', [ContactUsController::class, 'createSubject'])->name('dashboard.contact-us.create');
    Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('dashboard.contact-us.store');
    Route::delete('/contact-us/destroy/{id}', [ContactUsController::class, 'destroySubject'])->name('dashboard.contact-us.destroy');

    Route::get('/supplier/index', [SupplierController::class, 'index'])->name('dashboard.supplier.index');
    Route::get('/supplier/create', [SupplierController::class, 'create'])->name('dashboard.supplier.create');
    Route::post('/supplier/store', [SupplierController::class, 'store'])->name('dashboard.supplier.store');
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit'])->name('dashboard.supplier.edit');
    Route::put('/supplier/update/{id}', [SupplierController::class, 'update'])->name('dashboard.supplier.update');
    Route::delete('/supplier/destroy/{id}', [SupplierController::class, 'destroy'])->name('dashboard.supplier.destroy');


    Route::get('/country/create', [CountryController::class, 'create'])->name('dashboard.country.create');
    Route::post('/country/store', [CountryController::class, 'store'])->name('dashboard.country.store');
    Route::delete('/country/destroy/{id}', [CountryController::class, 'destroy'])->name('dashboard.country.destroy');

    Route::get('/city/create', [CityController::class, 'create'])->name('dashboard.city.create');
    Route::post('/city/store', [CityController::class, 'store'])->name('dashboard.city.store');
    Route::delete('/city/destroy/{id}', [CityController::class, 'destroy'])->name('dashboard.city.destroy');


});


Auth::routes();


