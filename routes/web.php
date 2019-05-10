<?php

Route::get('/', 'PageController@getWelcome')->name('welcome');
Route::get('contact', 'PageController@getContact')->name('contact');
Route::get('about', 'PageController@getAbout')->name('about');
Route::get('service/{slug}', 'PageController@getServiceBySlug')->name('service.slug');
Route::get('gallery/{slug}', 'PageController@getAbout')->name('gallery.slug');



Route::get('image/{id}', function($id){
	$cat = App\Attachment::find($id);
	header('Pragma: public');
	header('Cache-Control: max-age=360000, must-revalidate');
	header('Content-Type: ' . $cat->type);
	readfile('/home/production/onpermise/5ccc0902cd2ca7d50/data/upload/' . $cat->id );
})->name('image');