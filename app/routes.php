<?php

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::get('/', 'CollectionsController@index');
Route::resource('collections', 'CollectionsController');

Route::resource('collections.photos', 'PhotosController');


