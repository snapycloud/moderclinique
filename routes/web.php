<?php

Route::get('/', 'PageController@getWelcome')->name('welcome');
Route::get('contact', 'PageController@getContact')->name('contact');
Route::get('terms', 'PageController@getTerms')->name('terms');
Route::get('about', 'PageController@getAbout')->name('about');
Route::get('faq', 'PageController@getFaq')->name('faq');
Route::get('service/{slug}', 'PageController@getServiceBySlug')->name('service.slug');
Route::get('gallery/{slug}', 'PageController@getGalleryBySlug')->name('gallery.slug');

Route::get('article', 'PageController@getKnowledgeBaseArticle')->name('knowledgeBaseArticle');
Route::get('article/{slug}', 'PageController@getKnowledgeBaseArticleBySlug')->name('knowledgeBaseArticle.slug');
Route::get('article/tags/{tag}', 'PageController@getKnowledgeBaseArticleByTags')->name('tags');


Route::get('/sitemap', 'SitemapController@init')->name('sitemap');



Route::get('image/{id}', function($id){
    $cache_key = 'slider-' . $id;
    $image = cache()->get($cache_key);
	$cat = App\Attachment::find($id);
    //$size = filesize($image);
    if(false && $image) {

	    header('Pragma: public');
    header("Content-length: 22222");
	    header('Cache-Control: max-age=360000, must-revalidate');
	    header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));
	    header('Content-Type: ' . $cat->type);

	    echo $image;
	    return true;
    }
    $id = $cat->id;
    if($cat->source_id) {
        $id = $cat->source_id;
    }

	//$image = file_get_contents('/home/production/onpermise/5ccc0902cd2ca7d50/data/upload/' . $id );
	$image = file_get_contents('/home/apps/5ccc0902cd2ca7d50/data/upload/' . $id);
    
    $size = strlen($image);
    cache()->put($cache_key, $image);
    header('Pragma: public');
    header("Content-length: $size");
	header('Cache-Control: max-ag  e=360000, must-revalidate');
	header('Content-Type: ' . $cat->type);

    echo $image;
})->name('image');
