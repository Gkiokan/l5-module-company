<?php

Route::group(['middleware' => 'web', 'prefix' => 'company', 'namespace' => 'Gkiokan\Company\Http\Controllers'], function()
{
    Route::get('/', [
      'uses'  => 'CompanyController@index',
      'as'    => 'company.index'
    ]);

    // Route::get('/edit', [
    //   'uses'  => 'CompanyController@edit',
    //   'as'    => 'company.edit'
    // ]);

    Route::get('edit/{id?}', [
      'uses'  => 'CompanyController@edit',
      'as'    => 'company.edit'
    ]);

    Route::get('new', [
      'uses'  => 'CompanyController@create',
      'as'    => 'company.new'
    ]);

    Route::post('saveit', [
      'uses'  => 'CompanyController@store',
      'as'    => 'company.store'
    ]);


    Route::get('joined', [
      'uses'  => 'CompanyController@joined',
      'as'    => 'company.joined'
    ]);

    Route::get('created', [
      'uses'  => 'CompanyController@created',
      'as'    => 'company.created'
    ]);


});
