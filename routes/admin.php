<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SubCateoryController;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('user',UserController::class);
    Route::resource('role',RoleController::class);
    Route::resource('permission',PermissionController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('bank',BankController::class);
    Route::resource('subcategory',SubCateoryController::class);
    Route::resource('collection',CollectionController::class);
    Route::resource('product',ProductController::class);
    Route::get('/get/subcategory',[ProductController::class,'getsubcategory'])->name('getsubcategory');
    Route::get('/remove-external-img/{id}',[ProductController::class,'removeImage'])->name('remove.image');
});
Route::group(['prefix' => 'BPV'], function () {
    Route::get('list', ['as' => 'BPV.list', 'uses' => 'BankPaymentVoucherController@index']);
    Route::get('create', ['as' => 'BPV.create', 'uses' => 'BankPaymentVoucherController@create']);
    Route::post('save', ['as' => 'BPV.save', 'uses' => 'BankPaymentVoucherController@store']);
    Route::get('edit/{id}', ['as' => 'BPV.edit', 'uses' => 'BankPaymentVoucherController@edit']);
    Route::post('update', ['as' => 'BPV.update', 'uses' => 'BankPaymentVoucherController@update']);
    Route::delete('delete/{id}', ['as' => 'BPV.delete', 'uses' => 'BankPaymentVoucherController@destroy']);
    Route::post('show/{id}', ['as' => 'BPV.show', 'uses' => 'BankPaymentVoucherController@show']);
    Route::get('search', ['as' => 'BPV.search', 'uses' => 'BankPaymentVoucherController@search']);
});
