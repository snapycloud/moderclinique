<?php

Route::get('/', 'PageController@getWelcome')->name('welcome');
Route::get('contact', 'PageController@getContact')->name('contact');
Route::get('about', 'PageController@getAbout')->name('about');
Route::get('faq', 'PageController@getAbout')->name('faq');
Route::get('service/{slug}', 'PageController@getServiceBySlug')->name('service.slug');
Route::get('gallery/{slug}', 'PageController@getGalleryBySlug')->name('gallery.slug');



Route::get('image/{id}', function($id){
    $cache_key = 'slider-' . $id;
    $image = cache()->get($cache_key);
	$cat = App\Attachment::find($id);
    if(!$image) {
	    header('Pragma: public');
	    header('Cache-Control: max-age=360000, must-revalidate');
	    header('Content-Type: ' . $cat->type);

        echo $image;
    }
	$image = file_get_contents('/home/production/onpermise/5ccc0902cd2ca7d50/data/upload/' . $cat->id );
    cache()->put($cache_key, $image);
    header('Pragma: public');
	header('Cache-Control: max-age=360000, must-revalidate');
	header('Content-Type: ' . $cat->type);

    echo $image;
})->name('image');
