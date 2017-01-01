<?php

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'company', 'namespace' => 'Gkiokan\Company\Http\Controllers'], function()
{
    Route::get('/', [
      'uses'  => 'CompanyController@index',
      'as'    => 'company.index'
    ]);

    Route::get('show/{company?}', [
      'uses'  => 'CompanyController@show',
      'as'    => 'company.show'
    ]);

    Route::get('edit/{company?}', [
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

    Route::patch('update/{id?}', [
      'uses'  => 'CompanyController@update',
      'as'    => 'company.update'
    ]);


    Route::get('delete/{id?}', [
      'uses'  => 'CompanyController@delete',
      'as'    => 'company.delete'
    ]);

    Route::delete('delete/{id?}/save', [
      'uses'  => 'CompanyController@destroy',
      'as'    => 'company.delete.final'
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
