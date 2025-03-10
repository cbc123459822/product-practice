<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CompleteController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\PaymentController;

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

// 誰都可以進
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/products', [FrontController::class, 'product'])->name('front.products');
Route::post('/fetch/test', [FrontController::class, 'fetchTest']);
Route::get('/message/index', [MessageController::class, 'index'])->name('messageIndex');

// 只有登入者可以進
Route::middleware('auth')->group(function() {
    Route::prefix('/message')->group(function() {
        Route::post('/replayStore/{id}', [MessageController::class, 'replayStore'])->name('replayStore');
        Route::post('/store', [MessageController::class, 'store'])->name('messageStore');
        Route::put('/update/{id}', [MessageController::class, 'update'])->name('messageUpdate');
        // 刪除
        Route::delete('/destroy/{id}', [MessageController::class, 'destroy'])->name('messageDestroy');
    });
    Route::prefix('/reply')->group(function () {
        Route::put('/update/{id}', [ReplyController::class, 'update'])->name('replyUpdate');
        // 刪除
        Route::delete('/destroy/{id}', [ReplyController::class, 'destroy'])->name('replyDestroy');
    });
    Route::middleware(['role.weight: 2'])->prefix('/user/infomation')->group(function () {
        Route::get('/', [FrontController::class, 'user_info'])->name('user.info');
        Route::post('/update', [FrontController::class, 'user_info_update'])->name('user.info.update');
    });

    Route::post('/products/add-carts', [FrontController::class, 'add_cart'])->name('front.addCart');
});

// 只有管理者可以進
Route::middleware(['auth', 'role.weight: 1'])->prefix('admin')->group(function () {
    Route::get('/', [BackendController::class, 'index'])->name('backend.index');

    Route::prefix('/product')->group(function () {
        Route::get('/list', [ProductController::class, 'index'])->name('product.index');

        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');

        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');

        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    });

    Route::resource('/type', TypeController::class);
    Route::get('/playground', [FrontController::class, 'test'])->name('test.step1');
    Route::post('/playground-step1/store', [FrontController::class, 'step1_store'])->name('test.step1Store');
    Route::get('/playground-step2', [FrontController::class, 'test2'])->name('test.step2');

});


require __DIR__.'/auth.php';

    Route::get('/step01',[shopController::class, 'shop'])->name('shop');
    Route::get('/step02',[shopController::class, 'delivery'])->name('delivery');
    Route::get('/step03',[shopController::class, 'payment'])->name('payment');
    Route::get('/step04',[shopController::class, 'thankyou'])->name('thankyou');
