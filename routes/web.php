<?php

use App\Http\Livewire\ProductLivewire;
use App\Http\Livewire\RolesLivewire;
use App\Http\Livewire\UsersLivewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Livewire\CategoriesLivewire;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyaccountController;
use App\Http\Controllers\Auth\LoginController;

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


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return "done ";
});



Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/about', [HomepageController::class, 'about'])->name('about');
Route::get('/contact', [HomepageController::class, 'contact'])->name('contact');
Route::get('/blog-list', [HomepageController::class, 'blogList'])->name('blog-list');
Route::get('/blog-details', [HomepageController::class, 'blogDetails'])->name('blog-details');
Route::get('/product-details', [ProductController::class, 'index'])->name('product-details');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::get('/my-account', [MyaccountController::class, 'index'])->name('my-account');
Route::get('/cart', [MyaccountController::class, 'cart'])->name('cart');
Route::get('/wish-list', [MyaccountController::class, 'wishList'])->name('wish-list');
Route::get('/check-out', [MyaccountController::class, 'checkOut'])->name('check-out');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/all-products', [DashboardController::class, 'allProducts'])->name('admin.products');
Route::get('/featured-products', [DashboardController::class, 'featuredProducts'])->name('featured-products');
Route::get('/popular-products', [DashboardController::class, 'popularProducts'])->name('popular-products');


//Admin Livewire Route
Route::get('users', UsersLivewire::class)->name('users');
Route::get('category', CategoriesLivewire::class)->name('categories');
Route::get('admin/product', ProductLivewire::class)->name('admin.product');
Route::get('roles', RolesLivewire::class)->name('roles');
