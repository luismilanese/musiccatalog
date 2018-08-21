<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/artists', 'ArtistsController@index');
Auth::routes();


