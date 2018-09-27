<?php

Route::group(['middleware' => 'web', 'prefix' => 'keluarga', 'namespace' => 'Modules\Keluarga\Http\Controllers'], function()
{
    Route::get('/medsil', 'KeluargaController@index');
    Route::get('/detail-keluarga-penebar-pedas-waroeng-ss', 'KeluargaController@data1');
});
