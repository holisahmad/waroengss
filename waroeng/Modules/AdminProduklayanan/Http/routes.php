<?php

Route::group(['middleware' => 'web', 'prefix' => 'adminproduklayanan', 'namespace' => 'Modules\AdminProduklayanan\Http\Controllers'], function()
{
    Route::get('/', 'AdminProduklayananController@index');
});
