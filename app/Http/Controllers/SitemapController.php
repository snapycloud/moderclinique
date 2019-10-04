<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function init()
    {
    	// create new sitemap object
	$sitemap = \App::make('sitemap');

	// set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
	// by default cache is disabled
	$sitemap->setCache('laravel.sitemap', 60);

	// check if there is cached sitemap and build new only if is not
	if (!$sitemap->isCached()) {
		// add item to the sitemap (url, date, priority, freq)
		$sitemap->add(route('welcome'), Carbon::now(), '1.0', 'daily');
		$sitemap->add(route('about'), Carbon::now(), '0.9', 'monthly');
		$sitemap->add(route('faq'), Carbon::now(), '0.9', 'monthly');
		$sitemap->add(route('faq'), Carbon::now(), '0.9', 'monthly');
		// get all posts from db
		$posts = $this->api()->request('get', 'KnowledgeBaseArticle', [
			"where[1][type]" => "in",
			"where[1][attribute]" => "status",
			"where[1][value]" => 'Published',
			"maxSize" => 20,
			"where[0][attribute]" => "categories",
			"where[0][type]" => "linkedWith",
			"where[0][value][]" => "5ccc24f7daa85f6ea",
			"orderBy" => "createdAt",
			"order" => "desc"
		]);

		// add every post to the sitemap
		foreach ($posts['list'] as $post) {
			$sitemap->add(route('knowledgeBaseArticle.slug', $post['slug']), $post['modifiedAt'], '0.8', 'monthly', [
				['url' => route('image', $post['id']), 'title' => $post['name']]
			]);
		}

		$main_service = $this->api()->request('get', 'KnowledgeBaseArticle', [
                        'select' => 'name,slug',
            'where[0][attribute]' => 'categories',
            'where[0][type]'    =>  'linkedWith',
            'where[0][value][]' => '5ccc24e2d2fef7fcf',
            'where[1][type]' => 'in',
            'where[1][attribute]' => 'status',
            'where[1][value]' => 'Published'
        ]);

       foreach ($main_service['list'] as $post) {
			$sitemap->add(route('service.slug', $post['slug']), $post['modifiedAt'], '0.8', 'monthly', [
				['url' => route('image', $post['id']), 'title' => $post['name']]
			]);
		}

		// $products = $this->api()->request('get', 'product');

		// foreach ($products['list'] as $product) {
		// 	$sitemap->add(route('product.slug', $product['name']), $product['modifiedAt'], '0.8', 'daily');
		// }


	}

	// show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
	return $sitemap->render();
    }
}
