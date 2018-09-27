<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index');
    Route::get('profil', 'AdminController@profil');
    Route::get('produk-dan-layanan', 'AdminController@produk');
    Route::get('karir', 'AdminController@karir');
    Route::get('berita', 'AdminController@berita');

    Route::get('sejarah', 'AdminController@sejarah');
    Route::get('visi-misi', 'AdminController@visimisi');
    Route::get('profil-perusahaan', 'AdminController@profilss');
    Route::get('jajaran-tinggi-manajemen', 'AdminController@jajaran');
    Route::get('galeri-dan-info-waroeng', 'AdminController@galeri');

    Route::get('daftar-menu', 'AdminController@menu');
    Route::get('layanan-takeaway', 'AdminController@takeaway');
    Route::get('layanan-nasi-dos', 'AdminController@nasidos');
    Route::get('kerjasama-produk', 'AdminController@kerjasama');
    Route::get('produk-mitra', 'AdminController@mitra');

    Route::get('karir-ss', 'AdminController@karirss');

    Route::get('berita-perusahaan', 'AdminController@beritass');
    Route::get('penyaluran-dansos', 'AdminController@dansos');
    Route::get('promo-produk-layanan', 'AdminController@promo');
    Route::get('event-kerjasama', 'AdminController@eventkerjasama');

    Route::get('berita-nikmat', 'AdminController@nikmat');

    Route::get('media-silaturrahmi', 'AdminController@medsil');

});
