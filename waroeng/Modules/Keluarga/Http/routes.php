<?php

Route::group(['middleware' => 'web', 'prefix' => 'keluarga', 'namespace' => 'Modules\Keluarga\Http\Controllers'], function()
{
    Route::get('/keluarga-penebar-pedas-waroeng-ss', 'KeluargaController@index');
});
