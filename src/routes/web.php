<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'Lawdoc71\Contact\Http\controllers'], function (){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});
