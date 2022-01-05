<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

Route::group(['prefix'=>'admin'],function () {
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login-process', [AuthController::class, 'loginProcess'])->name('login_process');
    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin_dashboard');

        //Category
        Route::get('/all-categories', [CategoryController::class, 'allCategories'])->name('admin_all_categories');
        Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('admin_add_category');
        Route::post('/store-category', [CategoryController::class, 'storeCategory'])->name('admin_store_category');
        Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('admin_edit_category');
        Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('admin_update_category');
        Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('admin_delete_category');

        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
