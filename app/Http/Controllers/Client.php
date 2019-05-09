<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Client extends Controller
{
    public function postConsultation(Request $req)
    {
    	dd($req->all());
    }
}
