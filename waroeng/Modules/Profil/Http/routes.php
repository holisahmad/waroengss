<?php

Route::group(['middleware' => 'web', 'prefix' => 'profil', 'namespace' => 'Modules\Profil\Http\Controllers'], function()
{
    Route::get('/sejarah-waroeng-ss', 'ProfilController@sejarah');
    Route::get('/visi-misi-waroeng-ss', 'ProfilController@misi');
    Route::get('/profil-waroeng-ss', 'ProfilController@profil');
    // Route::get('/', 'ProfilController@profil');
    Route::get('/jajaran-tinggi-manajemen-waroeng-ss', 'ProfilController@jajaran');
    Route::get('/galeri-waroeng-ss', 'ProfilController@galeri');
});
