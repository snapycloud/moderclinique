<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use SnapyCloud\PhpApi\Client\SnapyClient;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $url = 'https://5ccc0902cd2ca7d50.onpremise.snapycloud.com';
        $this->client = new SnapyClient($url);
        $this->client->setApiKey('3eb3a87d3d3eb2997e25bc414d47f63d');
        $this->client->setSecretKey('e5574e988c2d2f2a0582dd65cf146506');

        // https://5ccc0902cd2ca7d50.onpremise.snapycloud.com/api/v1/KnowledgeBaseArticle?select=name,status,createdAt&maxSize=20&offset=0&orderBy=order&order=asc&where[0][type]=in&where[0][attribute]=status&where[0][value][]=Published&where[1][attribute]=categories&where[1][type]=linkedWith&where[1][value][]=5ccc24e2d2fef7fcf
        $menu_services = $this->api()->request('get', 'KnowledgeBaseArticle', [
            'where[0][attribute]' => 'categories',
            'where[0][type]'    =>  'linkedWith',
            'where[0][value][]' => '5ccc24e2d2fef7fcf',
            'where[1][type]' => 'in',
            'where[1][attribute]' => 'status',
            'where[1][value]' => 'Published'
        ]);

        $menu_gallery = $this->api()->request('get', 'KnowledgeBaseArticle', [
            'select' => 'name,slug',
            'where[0][attribute]' => 'categories',
            'where[0][type]'    =>  'linkedWith',
            'where[0][value][]' => '5ccc2845562b42b31',
            'where[1][type]' => 'in',
            'where[1][attribute]' => 'status',
            'where[1][value]' => 'Published'
        ]);

        View::share('menu_services', $menu_services['list']);
        View::share('menu_gallery', $menu_gallery['list']);
    }

	public function api()
    {
        return $this->client;
    }
}
