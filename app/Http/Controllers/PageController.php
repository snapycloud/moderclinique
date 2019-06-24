<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getWelcome()
    {
        $slider = $this->api()->request('get', 'KnowledgeBaseArticle', [
            'where[0][attribute]' => 'categories',
            'where[0][type]'    =>  'linkedWith',
            'where[0][value][]' => '5ccc25026b4a0ad50',
            'where[1][type]' => 'in',
            'where[1][attribute]' => 'status',
            'where[1][value]' => 'Published'
        ]);

    	return view('welcome', [
            'slider' => $slider['list'],
            'data' => $this->getArticaleList() ?? false
        ]);
    }

    public function getFaq()
    {
        $cache_key = 'faq-list';
        $data = cache()->get($cache_key);

        if(!$data) {
             $data = $this->api()->request('get', 'KnowledgeBaseCategory/action/listTree', [
                'parentId' => '5cd5e79f22150f7c4',
                'maxDepth'    =>  1,
                'checkIfEmpty' => true,

            ]);

             foreach ($data['list'] as $key => $value) {
                  $list = $this->api()->request('get', 'KnowledgeBaseArticle', [
                        'where[0][attribute]' => 'categories',
                        'where[0][type]'    =>  'linkedWith',
                        'where[0][value][]' => $value['id']
                    ]);
                 $data['list'][$key]['faqs']  = $list;
             }

             cache()->put($cache_key, $data, 600);
        }


        return view('faq', [
            'data' => $data['list']
        ]);
    }

    public function getTerms()
    {
        return view('terms');
    }

    public function getContact()
    {
    	return view('contact');
    }

    public function getAbout()
    {
    	return view('about');
    }

    public function getServiceBySlug($slug)
    {
         $response = $this->api()->request('get', 'KnowledgeBaseArticle', [
            'where[0][type]' => 'startsWith',
            'where[0][attribute]' => 'slug',
            'where[0][value]' => $slug,
        ]);
        $service = $this->api()->request('get', 'KnowledgeBaseArticle/' . $response['list'][0]['id']);

        $service['body'] = str_replace(
            "?entryPoint=attachment&amp;id=",
            "https://modernclinique.com/image/",
            $service['body']
        );


        return view('service_slug', [
            'service' => $service
        ]);
    }

    public function getGalleryBySlug($slug)
    {
        $response = $this->api()->request('get', 'KnowledgeBaseArticle', [
            'where[0][type]' => 'startsWith',
            'where[0][attribute]' => 'slug',
            'where[0][value]' => $slug,
        ]);
        $gallery = $this->api()->request('get', 'KnowledgeBaseArticle/' . $response['list'][0]['id']);

        return view('gallery_slug', [
            'images' => $gallery
        ]);
    }

    public function getKnowledgeBaseArticleBySlug($slug)
    {

        $cache_key = 'article-list.' . $slug;
        $data = cache()->get($cache_key);

        if(!$data) {
             $response = $this->api()->request('get', 'KnowledgeBaseArticle', [
                'where[0][type]' => 'startsWith',
                'where[0][attribute]' => 'slug',
                'where[0][value]' => $slug,
            ]);
            $data = $this->api()->request('get', 'KnowledgeBaseArticle/' . $response['list'][0]['id']);

            cache()->put($cache_key, $data, 600);
        }

         $data['body'] = str_replace(
            "?entryPoint=attachment&amp;id=",
            "https://modernclinique.com/image/",
            $data['body']
        );

        return view('article_slug', [
            'article' => $data
        ]);
    }

    public function getKnowledgeBaseArticle()
    {
        return view('article', [
            'data' => $this->getArticaleList() ?? false
        ]);
    }
}

