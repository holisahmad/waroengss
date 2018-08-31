<?php

Route::group(['middleware' => 'web', 'prefix' => 'kontak', 'namespace' => 'Modules\Kontak\Http\Controllers'], function()
{
    Route::get('/kontak-dan-alamat-waroeng-ss', 'KontakController@index');
    Route::get('/kontak-kerjasama-pengadaan-bahan-baku-waroeng-ss', 'KontakController@bahanbaku');
    Route::get('/kontak-kerjasama-konsinyasi-produk-waroeng-ss', 'KontakController@konsinyasi');
    Route::get('/kontak-kerjasama-event-waroeng-ss', 'KontakController@kerjasamaevent');
    Route::get('/hotline-service-waroeng-ss', 'KontakController@hotlineservice');
    Route::get('/hotline-order-waroeng-ss', 'KontakController@hotlineorder');
    Route::get('/kontak-sponsorship-event-waroeng-ss', 'KontakController@sponsorship');
    Route::get('/kontak-kantor-cabang-waroeng-ss', 'KontakController@cabang');
});
