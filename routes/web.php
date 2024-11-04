<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\ContentDetailController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostImgController;
use App\Http\Controllers\Admin\SettingBannerController;
use App\Http\Controllers\Admin\SliderBarController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuestionController;
use App\Models\PostImg;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/ve-chung-toi', [AboutController::class, 'index']);
Route::get('/chinh-sach-bao-mat', [PrivateController::class, 'index']);
Route::get('/cau-hoi', [QuestionController::class, 'index']);
Route::get('/lien-he', [ContactController::class, 'index']);
Route::get('/du-an', [ProjectController::class, 'index']);
Route::get('/chi-tiet-du-an/{id}', [ProjectController::class, 'detail'])->name('project.detail');
Route::get('/tranh-phu-dieu-va-tuong', [ProductController::class, 'index']);
Route::get('/art-world-canh-quan', [ProductController::class, 'index2']);
Route::get('/thiet-bi-khu-vui-choi', [ProductController::class, 'index3']);
Route::get('/chi-tiet-san-pham-va-dich-vu/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/tin-tuc', [NewController::class, 'index']);
Route::get('/chi-tiet-tin-tuc/{id}', [NewController::class, 'detail'])->name('news.detail');
Route::post('/tin-tuc/binh-luan', [CommentController::class, 'ajaxcomment'])->name('news.comment');
Route::prefix('admin')->get('/dashboard', function () {
    return view('layouts/admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

    Route::get('contents', [ContentController::class, 'index'])->name('admin.contents.index');
    Route::get('contents/create', [ContentController::class, 'create'])->name('admin.contents.create');
    Route::post('contents', [ContentController::class, 'store'])->name('admin.contents.store');
    Route::get('contents/{content}/edit', [ContentController::class, 'edit'])->name('admin.contents.edit');
    Route::put('contents/{content}', [ContentController::class, 'update'])->name('admin.contents.update');
    Route::delete('contents/{content}', [ContentController::class, 'destroy'])->name('admin.contents.destroy');

    Route::get('setting-banner', [SettingBannerController::class, 'index'])->name('admin.setting_banner.index');
    Route::get('setting-banner/create', [SettingBannerController::class, 'create'])->name('admin.setting_banner.create');
    Route::post('setting-banner', [SettingBannerController::class, 'store'])->name('admin.setting_banner.store');
    Route::get('setting-banner/{setting_banner}/edit', [SettingBannerController::class, 'edit'])->name('admin.setting_banner.edit');
    Route::put('setting-banner/{setting_banner}', [SettingBannerController::class, 'update'])->name('admin.setting_banner.update');
    Route::delete('setting-banner/{setting_banner}', [SettingBannerController::class, 'destroy'])->name('admin.setting_banner.destroy');

    Route::get('content_detail', [ContentDetailController::class, 'index'])->name('admin.content_detail.index');
    Route::get('content_detail/create', [ContentDetailController::class, 'create'])->name('admin.content_detail.create');
    Route::post('content_detail', [ContentDetailController::class, 'store'])->name('admin.content_detail.store');
    Route::get('content_detail/{content_detail}/edit', [ContentDetailController::class, 'edit'])->name('admin.content_detail.edit');
    Route::put('content_detail/{content_detail}', [ContentDetailController::class, 'update'])->name('admin.content_detail.update');
    Route::delete('content_detail/{content_detail}', [ContentDetailController::class, 'destroy'])->name('admin.content_detail.destroy');

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');



    Route::get('post-img', [PostImgController::class, 'index'])->name('admin.postImgs.index');
    Route::get('post-img/create', [PostImgController::class, 'create'])->name('admin.postImgs.create');
    Route::post('post-img', [PostImgController::class, 'store'])->name('admin.postImgs.store');
    Route::get('post-img/{postImg}', [PostImgController::class, 'show'])->name('admin.postImgs.show');
    Route::get('post-img/{postImg}/edit', [PostImgController::class, 'edit'])->name('admin.postImgs.edit');
    Route::put('post-img{postImg}', [PostImgController::class, 'update'])->name('admin.postImgs.update');
    Route::delete('post-img/{postImg}', [PostImgController::class, 'destroy'])->name('admin.postImgs.destroy');




    Route::get('sliderbar', [SliderBarController::class, 'index'])->name('admin.sliderbar.index');
    Route::get('sliderbar/create', [SliderBarController::class, 'create'])->name('admin.sliderbar.create');
    Route::post('sliderbar', [SliderBarController::class, 'store'])->name('admin.sliderbar.store');
    // Route::get('sliderbar/{sliderbar}', [SliderBarController::class, 'show'])->name('admin.sliderbar.show');
    Route::get('sliderbar/{sliderbar}/edit', [SliderBarController::class, 'edit'])->name('admin.sliderbar.edit');
    Route::put('sliderbar/{sliderbar}', [SliderBarController::class, 'update'])->name('admin.sliderbar.update');
    Route::delete('sliderbar/{sliderbar}', [SliderBarController::class, 'destroy'])->name('admin.sliderbar.destroy');

    Route::get('comments', [CommentController::class, 'index'])->name('admin.comments.index');
    Route::get('comments/create', [CommentController::class, 'create'])->name('admin.comments.create');
    Route::post('comments', [CommentController::class, 'store'])->name('admin.comments.store');
    Route::get('comments/{comment}', [CommentController::class, 'show'])->name('admin.comments.show');
    Route::get('comments/{comment}/edit', [CommentController::class, 'edit'])->name('admin.comments.edit');
    Route::put('comments/{comment}', [CommentController::class, 'update'])->name('admin.comments.update');
    Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('admin.comments.destroy');

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
