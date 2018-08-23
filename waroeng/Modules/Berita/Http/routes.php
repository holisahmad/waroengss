<?php

Route::group(['middleware' => 'web', 'prefix' => 'berita', 'namespace' => 'Modules\Berita\Http\Controllers'], function()
{
    Route::resource('berita', 'Berita');
    //belum selesai
    Route::get('/berita-waroeng-ss', 'BeritaController@index');

    Route::get('/penyaluran-dana-sosial-dan-genggam-jemari', 'BeritaController@dansos');
    Route::get('/berita-produk-dan-layanan-waroeng-ss', 'BeritaController@produk');
    Route::get('/event-kerjasama-khusus-waroeng-ss', 'BeritaController@event');
    Route::get('/berita-nikmat-waroeng-ss', 'BeritaController@buletin');
});
