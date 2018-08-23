<?php

Route::group(['middleware' => 'web', 'prefix' => 'karir', 'namespace' => 'Modules\Karir\Http\Controllers'], function()
{
    // Route::get('/', 'KarirController@index');
    Route::get('/lowongan-kerja-manajemen-waroeng-ss', 'KarirController@manajemen');
    Route::get('/lowongan-kerja-waroeng-ss', 'KarirController@waroeng');
});
