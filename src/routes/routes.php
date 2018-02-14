<?php

Route::group(['prefix' => 'jumlah-penduduk-golongan-darah', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\JPGolonganDarah\Http\Controllers\JPGolonganDarahController@index',
        'create'     => 'Bantenprov\JPGolonganDarah\Http\Controllers\JPGolonganDarahController@create',
        'store'     => 'Bantenprov\JPGolonganDarah\Http\Controllers\JPGolonganDarahController@store',
        'show'      => 'Bantenprov\JPGolonganDarah\Http\Controllers\JPGolonganDarahController@show',
        'update'    => 'Bantenprov\JPGolonganDarah\Http\Controllers\JPGolonganDarahController@update',
        'destroy'   => 'Bantenprov\JPGolonganDarah\Http\Controllers\JPGolonganDarahController@destroy',
    ];

    Route::get('/',$controllers->index)->name('jumlah-penduduk-golongan-darah.index');
    Route::get('/create',$controllers->create)->name('jumlah-penduduk-golongan-darah.create');
    Route::post('/store',$controllers->store)->name('jumlah-penduduk-golongan-darah.store');
    Route::get('/{id}',$controllers->show)->name('jumlah-penduduk-golongan-darah.show');
    Route::put('/{id}/update',$controllers->update)->name('jumlah-penduduk-golongan-darah.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('jumlah-penduduk-golongan-darah.destroy');

});

