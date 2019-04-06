<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Controller
Route::get('', 'Controller@index')->name('index');
// Admin
Route::get('login', 'AuthAdmin@login')->name('login.form');
Route::post('loginattempt', 'AuthAdmin@loginattempt')->name('login.attempt');
Route::get('dashboard','Dashboard@dashboard')->name('dashboard');
Route::get('user','User@user')->name('user');
Route::get('hobi','Hobi@hobi')->name('hobi');
Route::get('kategori','Kategori@kategori')->name('kategori');
Route::get('link','Link@link')->name('link');
Route::get('logout', 'AuthAdmin@logout')->name('logout');
Route::get('user/list', function() {
    return DataTables(DB::table('user'))->toJson();
})->name('user.list');
Route::get('hobi/list', function() {
    return DataTables(DB::table('hobi'))->toJson();
})->name('hobi.list');
Route::get('kategori/list', function() {
    return DataTables(DB::table('kategori'))->toJson();
})->name('kategori.list');
Route::get('link/list', function() {
    return DataTables(DB::table('link'))->toJson();
})->name('link.list');
