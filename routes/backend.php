<?php

use App\Http\Controllers\Admin\Approve\ApproveController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Profile\ProfileController as ProfileProfileController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Video\VideoController;
use Illuminate\Support\Facades\Route;


Route::middleware('admin')->
prefix('admin/profile/')->name('profile.')->group(function () {
    Route::get('index', [ProfileProfileController::class, 'profileIndex'])->name('index');
    Route::put('update_profile', [ProfileProfileController::class, 'updateProfile'])->name('update');
    Route::get('sign_out', [ProfileProfileController::class, 'signOut'])->name('signout');
    Route::post('profile_active/{id}', [ProfileProfileController::class, 'profileActive'])->name('active');
});

/**
 * APPROVE 
 * */
Route::middleware('admin')->
prefix('admin/approve/')->name('approve.')->group(function () {
    Route::get('index', [ApproveController::class, 'approveIndex'])->name('index');
    Route::get('approve/{id}', [ApproveController::class, 'isApprove'])->name('is.approve');
    Route::get('delete/{id}', [ApproveController::class, 'approveDelete'])->name('is.delete');
});
//** PANDDING REQUEST */
Route::get('pandding', [ApproveController::class, 'pandding'])->name('pandding');


/**
 * ADD CATEGORY 
 */
Route::middleware('admin')->
prefix('admin/category/')->name('category.')->group(function () {
    Route::get('index', [CategoryController::class, 'categoryIndex'])->name('index');
    Route::post('add-category', [CategoryController::class, 'addCategory'])->name('add');
    Route::get('edit-category/{id?}', [CategoryController::class, 'categoryIndex'])->name('edit');
    Route::put('update-category/{id}', [CategoryController::class, 'updateCategory'])->name('update');
    Route::get('active-category/{id}', [CategoryController::class, 'activeCategory'])->name('active');
    Route::get('delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete');
});


/**
 * BLOG
 */
Route::middleware('admin')->
prefix('admin/blog/')->name('blog.')->group(function () {
    Route::get('index', [BlogController::class, 'blogIndex'])->name('index');
    Route::post('add', [BlogController::class, 'addBlog'])->name('add');
    Route::get('list', [BlogController::class, 'blogList'])->name('list');
    Route::get('edit/{id}', [BlogController::class, 'editBlog'])->name('edit');
    Route::put('update/{id}', [BlogController::class, 'updateBlog'])->name('update');
    Route::get('delete/{id}', [BlogController::class, 'deleteBlog'])->name('delete');
    Route::get('active/{id}', [BlogController::class, 'activeBlog'])->name('active');
    Route::post('search-blog', [BlogController::class, 'blogSearch'])->name('search.blog');
});


/**
 * VIDEO    
 */
Route::middleware('admin')->
prefix('admin/video/')->name('video.')->group(function () {
    Route::get('index', [VideoController::class, 'videoIndex'])->name('index');
    Route::post('index', [VideoController::class, 'storeVedio'])->name('store');
    Route::get('list', [VideoController::class, 'videoList'])->name('list');
    Route::get('edit/{id}', [VideoController::class, 'editVideo'])->name('edit');
    Route::put('update/{id}', [VideoController::class, 'updateVideo'])->name('update');
    Route::get('delete/{id}', [VideoController::class, 'deleteVideo'])->name('delete');
});

/**
 * SETTING    
 */
Route::middleware('admin')->
prefix('admin/setting/')->name('setting.')->group(function () {
    Route::get('setting', [SettingController::class, 'setting'])->name('index');
    Route::post('setting', [SettingController::class, 'storeSocial'])->name('store');
    
});


/**
 * DASHBOARD    
 */
Route::middleware(['admin', 'verified'])->name('dashboard')->
prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
require __DIR__.'/auth.php';
