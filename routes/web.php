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
Route::get('/', function () {
    return view('dashboard_master');
});
Route::get('/dashboard', function () {
    return view('dashboard_master');
});
Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::post('/supplier', 'SupplierController@store');
Route::get('/supplier/{id}','SupplierController@show');
Route::get('/supplier/{id}/edit', 'SupplierController@edit');
Route::put('/supplier/{id}', 'SupplierController@update');
Route::delete('/supplier/{id}', 'SupplierController@destroy');
Route::get('/buku', function () {
    return view('buku_master');
});
Route::get('/admin', function () {
    return view('admin_master');
});