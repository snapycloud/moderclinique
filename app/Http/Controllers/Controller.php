<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use SnapyCloud\PhpApi\Client\SnapyClient;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $url = 'http://5ccc0902cd2ca7d50.onpremise.snapycloud.com';
        $this->client = new SnapyClient($url);
        $this->client->setApiKey('3eb3a87d3d3eb2997e25bc414d47f63d');
        $this->client->setSecretKey('e5574e988c2d2f2a0582dd65cf146506');
    }

	public function api()
    {
        return $this->client;
    }
}
