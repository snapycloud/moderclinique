<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Client extends Controller
{
    public function postConsultation(Request $req)
    {
    	$req->validate([
    		'name' => 'required|max:255',
    		'phoneNumber' => 'required|regex:/(۰۹)[۰-۹]{8}/|regex:/(09)[0-9]{8}/',
    		'emailAddress' => ''
    	]);
    	// get first and last name form name column
    	$data = $req->all();
    	$name = explode(" ", $data['name']);
    	if(count($name) == 2) {
    		$data['firstName'] = $name[0];
    		$data['lastName'] = $name[1];
    	}
    	
    	return $this->api()->request('POST', 'lead', $data);
    }

    public function postCotnact(Request $req)
    {
    	$req->validate([
    		'name' => 'required|max:255',
    		'phoneNumber' => 'required|regex:/(09)[0-9]{8}/',
    		'emailAddress' => ''
    	]);
    	// get first and last name form name column
    	$data = $req->all();
    	$name = explode(" ", $data['name']);
    	if(count($name) == 2) {
    		$data['firstName'] = $name[0];
    		$data['lastName'] = $name[1];
    	}

    	
    	return $this->api()->request('POST', 'Contact', $data);
    }

    public function postCase(Request $req)
    {
    	$req->validate([
    		'name' => 'required|max:255',
    		'emailAddress' => 'required|email',
    	]);
    	
    	return $this->api()->request('POST', 'case', $req->all());
    }

    public function traverseFarsi($str)
    {
    	$farsi_chars = [
			'۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'
		];
       	$latin_chars = [
       		'0', '1','2','3','4','5','6','7','8','9'
       	];

        return str_replace($farsi_chars, $latin_chars, $str);
    }

    public function postSms(Request $req)
    {
        
    }
}
