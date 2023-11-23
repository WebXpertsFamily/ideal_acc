<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BanksController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@logout');

// Auth routes
require __DIR__.'/auth.php';
// Admin Routes
require('admin.php');

Route::group(['prefix' => 'category'], function () {
    Route::get('list', ['as' => 'category.list', 'uses' => 'CategoryController@index']);
    Route::get('create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
    Route::post('save', ['as' => 'category.save', 'uses' => 'CategoryController@store']);
    Route::get('edit/{id}', ['as' => 'category.edit', 'uses' => 'CategoryController@edit']);
    Route::post('update', ['as' => 'category.update', 'uses' => 'CategoryController@update']);
    Route::delete('delete/{id}', ['as' => 'category.delete', 'uses' => 'CategoryController@destroy']);
    Route::post('show/{id}', ['as' => 'category.show', 'uses' => 'CategoryController@show']);
    Route::get('search', ['as' => 'category.search', 'uses' => 'CategoryController@search']);
});

Route::group(['prefix' => 'permission'], function () {
    Route::get('list', ['as' => 'permission.list', 'uses' => 'PermissionController@index']);
    Route::get('create', ['as' => 'permission.create', 'uses' => 'PermissionController@create']);
    Route::post('save', ['as' => 'permission.save', 'uses' => 'PermissionController@store']);
    Route::get('edit/{id}', ['as' => 'permission.edit', 'uses' => 'PermissionController@edit']);
    Route::post('update', ['as' => 'permission.update', 'uses' => 'PermissionController@update']);
    Route::delete('delete/{id}', ['as' => 'permission.delete', 'uses' => 'PermissionController@destroy']);
    Route::post('show/{id}', ['as' => 'permission.show', 'uses' => 'PermissionController@show']);
    Route::get('search', ['as' => 'permission.search', 'uses' => 'PermissionController@search']);
    Route::get('user', ['as' => 'user.permission', 'uses' => 'PermissionController@getUserPermissions']);
});


Route::group(['prefix' => 'bank'], function () {
    Route::get('list', ['as' => 'bank.list', 'uses' => 'BanksController@index']);
    Route::get('create', ['as' => 'bank.create', 'uses' => 'BanksController@create']);
    Route::post('save', ['as' => 'bank.save', 'uses' => 'BanksController@store']);
    Route::get('edit/{id}', ['as' => 'bank.edit', 'uses' => 'BanksController@edit']);
    Route::post('update', ['as' => 'bank.update', 'uses' => 'BanksController@update']);
    Route::delete('delete/{id}', ['as' => 'bank.delete', 'uses' => 'BanksController@destroy']);
    Route::post('show/{id}', ['as' => 'bank.show', 'uses' => 'BanksController@show']);
    Route::get('search', ['as' => 'bank.search', 'uses' => 'BanksController@search']);
    Route::get('user', ['as' => 'user.bank', 'uses' => 'BanksController@getUserPermissions']);
});

    // // Route::prefix('bank')->group(function () {
    // //     Route::resource('bank',BanksController::class);
    // Route::get('/index', 'BanksController@index')->name('index');
    // Route::get('/create', 'BanksController@create')->name('create');

