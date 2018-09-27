<?php

Route::group(['middleware' => 'web', 'prefix' => 'adminmedsil', 'namespace' => 'Modules\AdminMedsil\Http\Controllers'], function()
{
    Route::get('/', 'AdminMedsilController@index');
});
