<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/send_email', [HomeController::class, 'send_email'])->name('send-email');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/page', [AdminController::class, 'page'])->name('page');
    Route::post('/save-section', [AdminController::class, 'save_section'])->name('save-section');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/addCat', [CategoryController::class, 'create'])->name('addCat');
    Route::post('/category-store', [CategoryController::class, 'store'])->name('category-store');
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/addProduct', [ProductController::class, 'create'])->name('addProduct');
    Route::post('/productStore', [ProductController::class, 'store'])->name('productStore');

    Route::get('/user_manage', [SettingsController::class, 'user_manage'])->name('user-manage');
    Route::get('/add_new_user', [SettingsController::class, 'open_user_form'])->name('add-new-user');
    Route::post('/save_user', [SettingsController::class, 'set_user'])->name('save-user');
    Route::get('/edit_user/{id}', [SettingsController::class, 'edit_user'])->name('edit-user');
    Route::post('/update_user/{id}', [SettingsController::class, 'update_user'])->name('update-user');
    Route::get('/delete_user/{id}', [SettingsController::class, 'delete_user'])->name('delete-user');
    Route::get('/user_details/{id}', [SettingsController::class, 'see_user'])->name('user-details');
    Route::post('/update_user_manage', [SettingsController::class, 'user_manage_update'])->name('update-user-manage');
});
