<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getWelcome()
    {
    	return view('welcome');
    }

    public function getContact()
    {
    	return view('contact');
    }

    public function getAbout()
    {
    	return view('about');
    }
}
