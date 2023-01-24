<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

//GENERAL
Route::get('/login', [HomeController::class, 'login'])->name('home');
Route::post('/login-auth', [HomeController::class, 'auth_login'])->name('login');


Route::get('/register', [HomeController::class, 'register']);
Route::post('/register', [HomeController::class, 'reg_validate'])->name('register');

// Route::get('/about', [HomeController::class, 'about']);

Route::get('/detail-product/{id}', [ProductController::class, 'productDetail']);
Route::get('/store/{id}', [StoreController::class, 'store']);
Route::get('/store-detail/{id}', [StoreController::class, 'storeDetail']);
Route::get('/', [StoreController::class, 'showAllStore'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');



//ADMIN  DAHSBOARD
// Route::middleware('checklogin', 'checkrole')->group(function () {
Route::get('/admin-view-product', [ProductController::class, 'admin_view_product'])->name('view_product');
Route::get('/admin-view-store', [StoreController::class, 'admin_view_store'])->name('view_store');
Route::get('/admin-store-detail/{id}', [StoreController::class, 'admin_store_detail'])->name('store_detail');
Route::get('/delete-store/{id}', [StoreController::class, 'delete'])->name('delete');

Route::get('/admin-create-product', [ProductController::class, 'create_product']);
Route::post('/admin-add-product', [ProductController::class, 'add_product'])->name('add_product');

Route::get('/admin-insert-store', [StoreController::class, 'admin_insert_store'])->name('insert-store');
Route::post('/admin-add-store', [StoreController::class, 'add_store'])->name('add-store');

Route::get('/admin-create-category', [CategoryController::class, 'admin_create_category']);
Route::post('/add-category', [CategoryController::class, 'add_category'])->name('add-category');

Route::get('/admin-product-detail/{id}', [ProductController::class, 'admin_product_detail'])->name('product_detail');
Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');

Route::get('/admin/update/{id}', [ProductController::class, 'update'])->name('admin-update');
Route::post('/admin/update/{id}', [ProductController::class, 'update_product'])->name('admin-update-product');

Route::get('/admin/update-store/{id}', [StoreController::class, 'update_store'])->name('update-store');
Route::post('/admin/update-store/{id}', [StoreController::class, 'admin_update_store'])->name('admin-update-store');


Route::get('/admin-category', [CategoryController::class, 'admin_view_category']);
Route::get('/admin/update-category/{id}', [categoryController::class, 'update_category'])->name('update-category');
Route::post('/admin/update-category/{id}', [categoryController::class, 'admin_update_category'])->name('admin-update-category');

// });
