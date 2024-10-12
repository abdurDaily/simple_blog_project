<?php

use App\Http\Controllers\Admin\Video\VideoController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Setting\SettingController;
use App\Http\Controllers\Frontend\Video\VideoController as VideoVideoController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->name('home.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});

/**
 * BLOG
 */
Route::prefix('/blog')->name('blog.')->group(function () {
    Route::get('/details/{id}', [HomeController::class, 'blogDetails'])->where('id', '[0-9]+')->name('details');
    Route::get('/blogs', [HomeController::class, 'allBlogsList'])->name('all.list');
    Route::get('/all-blogs/{id}', [HomeController::class, 'allBlogs'])->name('all');
    Route::get('/search-blog', [HomeController::class, 'searchBlog'])->name('search');
});


/**
 * BLOG
 */
Route::prefix('/video')->name('video.')->group(function () {
    Route::get('/all', [VideoVideoController::class, 'videoFetch'])->name('fetch');
});


// Route::any('/{any}', function(){
//     return view('error');
// });


Route::fallback(function(){
    return view('errors.404');
});



require __DIR__.'/auth.php';
