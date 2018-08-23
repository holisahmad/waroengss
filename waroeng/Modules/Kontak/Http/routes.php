<?php

Route::group(['middleware' => 'web', 'prefix' => 'kontak', 'namespace' => 'Modules\Kontak\Http\Controllers'], function()
{
    Route::get('/kontak-dan-alamat-waroeng-ss', 'KontakController@index');
});
