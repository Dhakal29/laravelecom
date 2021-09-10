<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontController::class,'index']);
Route::get('admin', [AdminController::class,'index']);
Route::post('admin/auth', [AdminController::class,'auth'])->name('admin.auth');
// Route::get('admin/updatepassword',[AdminController::class,'updatepassword'] );
// Route::group(['middleware'=>'admin_auth'], function(){
    Route::get('admin/dashboard',[AdminController::class,'dashboard'] );
    Route::get('admin/category',[CategoryController::class,'index'] );
    Route::get('admin/category/manage_category',[CategoryController::class,'manage_category'] );
    Route::post('admin/category/manage_category_process',[CategoryController::class,'manage_category_process'] )->name('category.manage_category_process');
    Route::get('admin/category/delete/{id}',[CategoryController::class,'delete'] );
    Route::get('admin/category/manage_category/{id}',[CategoryController::class,'manage_category']);
    Route::get('admin/logout', function(){
        session()->forget('ADMIN_LOGIN');
       session()->forget('ADMIN_ID');
        return redirect('admin');
    });
    // Route::get('admin/updatepassword',[AdminController::class,'updatepassword'] );
    Route::get('admin/coupon',[CouponController::class,'index'] );
    Route::get('admin/coupon/manage_coupon',[CouponController::class,'manage_coupon'] );
    Route::post('admin/coupon/manage_coupon_process',[CouponController::class,'manage_coupon_process'] )->name('coupon.manage_coupon_process');
    Route::get('admin/coupon/delete/{id}',[CouponController::class,'delete'] );
    Route::get('admin/coupon/manage_coupon/{id}',[CouponController::class,'manage_coupon']);
    
// Products
    Route::get('admin/product',[ProductController::class,'index'] );
    Route::get('admin/product/manage_product',[ProductController::class,'manage_product'] );
    Route::post('admin/product/manage_product_process',[ProductController::class,'manage_product_process'] )->name('product.manage_product_process');
    Route::get('admin/product/delete/{id}',[ProductController::class,'delete'] );
    Route::get('admin/product/manage_product/{id}',[ProductController::class,'manage_product']);
//  });

