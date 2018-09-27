<?php

Route::group(['middleware' => 'web', 'prefix' => 'adminberitanikmat', 'namespace' => 'Modules\AdminBeritanikmat\Http\Controllers'], function()
{
    Route::get('/', 'AdminBeritanikmatController@index');
});
