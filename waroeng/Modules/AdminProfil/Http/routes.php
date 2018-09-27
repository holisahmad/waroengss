<?php

Route::group(['middleware' => 'web', 'prefix' => 'adminprofil', 'namespace' => 'Modules\AdminProfil\Http\Controllers'], function()
{
    Route::get('/', 'AdminProfilController@index');
    Route::get('sejarah', 'AdminProfilController@sejarah');
});
