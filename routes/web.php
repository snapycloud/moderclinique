<?php

Route::get('/', 'PageController@getWelcome')->name('welcome');
Route::get('contact', 'PageController@getContact')->name('contact');
Route::get('about', 'PageController@getAbout')->name('about');


