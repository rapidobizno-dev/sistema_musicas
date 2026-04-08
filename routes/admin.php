<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TypeCategoryController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\RateController;
use App\Http\Controllers\Admin\ReportController;

/* Auth route */

Route::redirect('/home', '/admin');
Auth::routes();

Route::middleware(['auth', 'role:admin'])->group(function () {
    
    /* editorNews route */
    Route::get('news/editor/{news}', [NewsController::class, 'editorNews'])->name('news.editor');

    /* Dashboard routes */
    Route::redirect('admin', '/admin/dashboard');
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/analytics', function(){
        return view('admin.dashboard.Analytics.index');
    })->name('admin.analytics');

});

/* editor routes */

Route::middleware(['auth', 'role:admin,editor'])->group(function(){
        /* Category routes */
    Route::prefix('admin/categories')->name('admin.')->group(function () {
        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('categoryCreate', [CategoryController::class, 'create'])->name('category.create');
        Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('categoryView/{category}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('categoryEdit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('categoryUpdate/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('categoryDelete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
    });
    /*-------------------------------------------------------
                    user routes
-------------------------------------------------------*/

    Route::prefix('admin/users')->name('admin.')->group(function () {
        Route::get('list', [userController::class, 'index'])->name('user.index');
        Route::get('create', [userController::class, 'create'])->name('user.create');
        Route::post('store', [userController::class, 'store'])->name('user.store');
        Route::get('details/{user}', [userController::class, 'show'])->name('user.show');
        Route::get('edit/{user}', [userController::class, 'edit'])->name('user.edit');
        Route::put('update/{user}', [userController::class, 'update'])->name('user.update');
        Route::get('delete/{user}', [userController::class, 'destroy'])->name('user.delete');
    });


    /*-------------------------------------------------------
                    News routes
-------------------------------------------------------*/
    Route::prefix('admin/news')->name('admin.')->group(function () {
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('newsCreate', [NewsController::class, 'create'])->name('news.create');
        Route::post('newsStore', [NewsController::class, 'store'])->name('news.store');
        Route::get('newsEdit/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::get('newsViews/{news}', [NewsController::class, 'show'])->name('news.view');
        Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete');
        Route::resource('tags', TagController::class);
    });


    /*-------------------------------------------------------
                    Comment Routes
-------------------------------------------------------*/

    Route::prefix('admin/comments')->name('admin.')->group(function () {
        Route::get('comment', [CommentController::class, 'index'])->name('comments.index');
        /* Route::get('commentCreate', [CommentController::class, 'create'])->name('comment.create');
        Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store'); */
        Route::get('commentEdit/{comment}', [CommentController::class, 'edit'])->name('comment.edit');
        Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update');
        Route::get('commentView/{comment}', [CommentController::class, 'show'])->name('comment.view');
        Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete');
    });

    /*-------------------------------------------------------
                    Tags Routes
-------------------------------------------------------*/

    Route::prefix('admin/tags')->name('admin.')->group(function () {
        Route::get('tags', [TagController::class, 'index'])->name('tags.index');
        Route::get('tagCreate', [TagController::class, 'create'])->name('tag.create');
        Route::post('tagStore', [TagController::class, 'store'])->name('tag.store');
        Route::get('tagEdit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
        Route::put('tagUpdate/{tag}', [TagController::class, 'update'])->name('tag.update');
        Route::get('tagView/{tag}', [TagController::class, 'show'])->name('tag.view');
        Route::get('tagDelete/{tag}', [TagController::class, 'destroy'])->name('tag.delete');
    });

    /*-------------------------------------------------------
               TypeCategory Routes
-------------------------------------------------------*/

    Route::prefix('admin/typeCategories')->name('admin.')->group(function () {
        Route::get('typeCategory', [TypeCategoryController::class, 'index'])->name('typeCategories.index');
        Route::get('typeCategoryCreate', [TypeCategoryController::class, 'create'])->name('typeCategory.create');
        Route::post('typeCategories', [TypeCategoryController::class, 'store'])->name('typeCategories.store');
        Route::get('typeCategoryView/{typeCategory}', [TypeCategoryController::class, 'show'])->name('typeCategory.show');
        Route::get('typeCategoryEdit/{typeCategory}', [TypeCategoryController::class, 'edit'])->name('typeCategory.edit');
        Route::put('typeCategoryUpdate/{typeCategory}', [TypeCategoryController::class, 'update'])->name('typeCategory.update');
        Route::get('typeCategoryDelete/{typeCategory}', [TypeCategoryController::class, 'destroy'])->name('typeCategory.delete');
    });

    /* -----------------------------------------------
                    publication Routes
--------------------------------------------------*/
    Route::prefix('admin/publications')->name('admin.')->group(function () {
        Route::get('publication', [PublicationController::class, 'index'])->name('publication.index');
        Route::get('publicationCreate', [PublicationController::class, 'create'])->name('publication.create');
        Route::post('publicationStore', [PublicationController::class, 'store'])->name('publication.store');
        Route::get('publicationEdit/{publication}', [PublicationController::class, 'edit'])->name('publication.edit');
        Route::put('publicationUpdate/{publication}', [PublicationController::class, 'update'])->name('publication.update');
        Route::get('publicationView/{publication}', [PublicationController::class, 'show'])->name('publication.view');
        Route::get('publicationDelete/{publication}', [PublicationController::class, 'destroy'])->name('publication.delete');
    });
    /* -----------------------------------------------
                    video Routes
--------------------------------------------------*/
    Route::prefix('admin/videos')->name('admin.')->group(function () {
        Route::get('video', [VideoController::class, 'index'])->name('video.index');
        Route::get('videoCreate', [VideoController::class, 'create'])->name('video.create');
        Route::post('videoStore', [VideoController::class, 'store'])->name('video.store');
        Route::get('videoEdit/{video}', [videoController::class, 'edit'])->name('video.edit');
        Route::put('videoUpdate/{video}', [videoController::class, 'update'])->name('video.update');
        Route::get('videoView/{video}', [videoController::class, 'show'])->name('video.view');
        Route::get('videoDelete/{video}', [videoController::class, 'destroy'])->name('video.delete');
    });
    /* galery Routes */
    Route::prefix('admin/galeries')->name('admin.')->group(function () {
        Route::get('galery', [GaleryController::class, 'index'])->name('galery.index');
        Route::get('galeryCreate', [GaleryController::class, 'create'])->name('galery.create');
        Route::post('galeryStore', [GaleryController::class, 'store'])->name('galery.store');
        Route::get('galeryEdit/{galery}', [GaleryController::class, 'edit'])->name('galery.edit');
        Route::put('galeryUpdate/{galery}', [GaleryController::class, 'update'])->name('galery.update');
        Route::get('galeryView/{galery}', [GaleryController::class, 'show'])->name('galery.view');
        Route::get('galeryDelete/{galery}', [GaleryController::class, 'destroy'])->name('galery.delete');
    });
    
    /* Report Routes */
    Route::prefix('admin/reports')->name('admin.')->group(function () {
        Route::get('report', [ReportController::class, 'index'])->name('report.index');
        Route::get('historyReport', [ReportController::class, 'historyReport'])->name('report.history');
    });

    /* History Routes */
    Route::prefix('admin/history')->name('admin.')->group(function () {
        Route::get('history', [HistoryController::class, 'index'])->name('history.index');
    });

    /* Rate Routes */
    Route::prefix('admin/rate')->name('admin.')->group(function () {
        Route::get('list', [RateController::class, 'index'])->name('rate.list');
        Route::get('create', [RateController::class, 'Create'])->name('rate.create');
        Route::post('store', [RateController::class, 'Store'])->name('rate.store');
        Route::get('details/{rate}', [RateController::class, 'Show'])->name('rate.show');
        Route::get('edit/{rate}', [RateController::class, 'Edit'])->name('rate.edit');
        Route::put('update/{rate}', [RateController::class, 'Update'])->name('rate.update');
        Route::get('delete/{rate}', [RateController::class, 'Destroy'])->name('rate.delete');
    });
});
