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
            'where[0][value][]' => '5ccc25026b4a0ad50'
        ]);
    	return view('welcome', [
            'slider' => $slider['list']
        ]);
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
            "http://dev.modernclinique.com/image/", 
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
        
    }

    public function getKnowledgeBaseArticle()
    {
        
    }
}

