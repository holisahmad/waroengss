<?php

Route::group(['middleware' => 'web', 'prefix' => 'adminkarir', 'namespace' => 'Modules\AdminKarir\Http\Controllers'], function()
{
    Route::get('/', 'AdminKarirController@index');
});
