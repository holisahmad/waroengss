<?php

Route::group(['middleware' => 'web', 'prefix' => 'berita', 'namespace' => 'Modules\Berita\Http\Controllers'], function()
{
    Route::get('/berita-waroeng-ss', 'BeritaController@berita');
    Route::get('/berita-waroeng-ss/detail-berita-waroeng-ss', 'BeritaController@detailberita');

    Route::get('/penyaluran-dana-sosial-dan-genggam-jemari', 'BeritaController@dansos');
    Route::get('/penyaluran-dana-sosial-dan-genggam-jemari/detail-dansos-waroeng-ss', 'BeritaController@detaildansos');

    Route::get('/berita-produk-dan-layanan-waroeng-ss', 'BeritaController@produk');
    Route::get('/berita-produk-dan-layanan-waroeng-ss/detail-produk-waroeng-ss', 'BeritaController@detailproduk');

    Route::get('/event-kerjasama-khusus-waroeng-ss', 'BeritaController@event');
    Route::get('/event-kerjasama-khusus-waroeng-ss/detail-event-waroeng-ss', 'BeritaController@detailevent');

    Route::get('/berita-nikmat-waroeng-ss', 'BeritaController@buletin');
    Route::get('/berita-nikmat-waroeng-ss/detail-buletin-waroeng-ss', 'BeritaController@detailbuletin');

});
