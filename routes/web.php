<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
Route::get('/', [SanPhamController::class,'index']);
Route::get('/sp/{id}', [SanPhamController::class,'chitiet']);
Route::get('/loai/{id}', [SanPhamController::class,'sptrongloai']);
Route::get('/test/{a}/{b}', [SanPhamController::class,'test']);

Route::get('/themvaogio/{idsp}/{soluong}', [SanPhamController::class,'themvaogio']);
Route::get('/hiengiohang', [SanPhamController::class,'hiengiohang']);
Route::get('/xoasptronggio/{idsp}', [SanPhamController::class,'xoasptronggio']);
Route::get('/xoagiohang/', [SanPhamController::class,'xoagiohang']);
Route::get('/thanhtoan', [SanPhamController::class,'thanhtoan']);

Route::post('/luudonhang', [SanPhamController::class,'luudonhang']);
Route::get('/thongbao', [SanPhamController::class,'thongbao']);


use App\Http\Controllers\AdminController;
Route::group(['prefix' => 'admin'], function() {   
    Route::get('dangnhap', [AdminController::class,'dangnhap']);
    Route::post('dangnhap', [AdminController::class,'dangnhap_']);
    Route::get('thoat', [AdminController::class, 'thoat']);
});

use App\Http\Controllers\AdminLoaiController;
Route::group(['prefix' => 'admin' ,'middleware' => 'adminauth'], function() {
    Route::get('/', [AdminController::class,'index']);
    Route::resource('loai', AdminLoaiController::class);
    //routing quản lý sản phẩm
    //routing quản lý bình luận 
});
