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
         $service = $this->api()->request('get', 'KnowledgeBaseArticle/5ccc261f59cae274d');

        return view('service_slug', [
            'service' => $service
        ]);
    }
}
