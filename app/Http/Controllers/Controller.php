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
        $url = 'https://crm.modernclinique.com';
        $this->client = new SnapyClient($url);
        $this->client->setApiKey('3eb3a87d3d3eb2997e25bc414d47f63d');
        $this->client->setSecretKey('e5574e988c2d2f2a0582dd65cf146506');

        // https://5ccc0902cd2ca7d50.onpremise.snapycloud.com/api/v1/KnowledgeBaseArticle?select=name,status,createdAt&maxSize=20&offset=0&orderBy=order&order=asc&where[0][type]=in&where[0][attribute]=status&where[0][value][]=Published&where[1][attribute]=categories&where[1][type]=linkedWith&where[1][value][]=5ccc24e2d2fef7fcf
        // https://crm.modernclinique.com/api/v1/KnowledgeBaseArticle?select=name%2CcategoriesIds%2CcategoriesNames%2CorderView%2Cstatus%2CcreatedAt&maxSize=20&offset=0&orderBy=order&order=asc&where%5B0%5D%5Battribute%5D=categories&where%5B0%5D%5Btype%5D=linkedWith&where%5B0%5D%5Bvalue%5D%5B%5D=5ccc24e2d2fef7fcf
        $menu_services = $this->api()->request('get', 'KnowledgeBaseArticle', [
            'where[0][attribute]' => 'categories',
            'where[0][type]'    =>  'linkedWith',
            'where[0][value][]' => '5ccc24e2d2fef7fcf',
            'where[1][type]' => 'in',
            'where[1][attribute]' => 'status',
            'where[1][value]' => 'Published',
            'orderBy'=>'order',
            'order'=>'asc'
        ]);

        $main_service = $this->api()->request('get', 'KnowledgeBaseArticle', [
                        'select' => 'name,slug',
            'where[0][attribute]' => 'categories',
            'where[0][type]'    =>  'linkedWith',
            'where[0][value][]' => '5ccc24e2d2fef7fcf',
            'where[1][type]' => 'in',
            'where[1][attribute]' => 'status',
            'where[1][value]' => 'Published'
        ]);





        $listTree =   $this->api()->request('get', 'KnowledgeBaseCategory/action/listTree', [
                            'parentId' => '5ccc24e2d2fef7fcf',
                            'checkIfEmpty'    =>  'true'
                        ]);

        


        foreach ($listTree['list'] as $key => $value) {
            foreach ($value['childList'] as $key1 => $value1) {
             $result =   $this->getListTree($value1['id']);
             
             if(count($result['list'])) {
                foreach ($result['list'] as $key2 => $value2) {
                   $result['list'][$key2]['listTree']  = $this->getListTree($value2);
                }
                $listTree['list'][$key]['childList'][$key1]['listTree'] = $result;
                foreach ($listTree['list'][$key]['childList'][$key1]['listTree']['list'] as $key3 => $value3) {
                    $listTree['list'][$key]['childList'][$key1]['listTree']['list'][$key3]['links'] = $this->getBaseArticleById($value3['id']);
                }
                $listTree['list'][$key]['childList'][$key2]['links'] = $this->getBaseArticleById($value2['id']);
             }

            $listTree['list'][$key]['childList'][$key1]['links'] = $this->getBaseArticleById($value1['id']);
            }
            $listTree['list'][$key]['links'] = $this->getBaseArticleById($value['id']);
             
        }

        // dd($listTree);


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
        View::share('list_tree', $listTree);
        View::share('main_service', $main_service['list']);
        View::share('menu_gallery', $menu_gallery['list']);
    }

    public function getListTree($id)
    {
        return $this->api()->request('get', 'KnowledgeBaseCategory/action/listTree', [
                    'select' => 'name',
                    'parentId' => $id,
                    'checkIfEmpty'    =>  'true'
                ]);
    }

    public function getBaseArticleById($id)
    {
        return  $this->api()->request('get', 'KnowledgeBaseArticle', [
            'select' => 'name,slug',
            'where[0][attribute]' => 'categories',
            'where[0][type]'    =>  'linkedWith',
            'where[0][value][]' => $id,
            'where[1][type]' => 'in',
            'where[1][attribute]' => 'status',
            'where[1][value]' => 'Published'
        ]);
    }

	public function api()
    {
        return $this->client;
    }

    public function getArticaleList()
    {
        $cache_key = 'article-list';
        $data = cache()->get($cache_key);

        if(!$data) {
          $data = $this->api()->request('get', 'KnowledgeBaseArticle', [
                'where[0][attribute]' => 'categories',
                'where[0][type]'    =>  'linkedWith',
                'where[0][value][]' => '5ccc24f7daa85f6ea',
                'where[1][type]' => 'in',
                'where[1][attribute]' => 'status',
                'where[1][value]' => 'Published'
            ]);

          cache()->put($cache_key, $data, 129);
        }

        return $data['list'];
    }
}
