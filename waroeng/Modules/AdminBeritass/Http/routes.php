<?php

Route::group(['middleware' => 'web', 'prefix' => 'adminberitass', 'namespace' => 'Modules\AdminBeritass\Http\Controllers'], function()
{
    Route::get('/', 'AdminBeritassController@index');
});
