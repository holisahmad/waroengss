<?php

Route::group(['middleware' => 'web', 'prefix' => 'produk', 'namespace' => 'Modules\Produk\Http\Controllers'], function()
{
    Route::get('/produk-dan-layanan-waroeng-ss', 'ProdukController@index');
    // Route::get('/', 'ProdukController@index');
    Route::get('/layanan-bungkus-waroeng-ss', 'ProdukController@bungkus');
    Route::get('/layanan-nasi-dos-waroeng-ss', 'ProdukController@nasidos');
    Route::get('/layanan-kerjasama-produk-waroeng-ss', 'ProdukController@kerjasama');
    Route::get('/produk-mitra-waroeng-ss', 'ProdukController@mitra');
});
