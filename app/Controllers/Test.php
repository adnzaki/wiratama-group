<?php namespace App\Controllers;

class Test extends BaseController
{
    public function commontTest()
    {
        $posts = wp()->setPerPage(2)->getPosts(1);
        $data = [
            'type' => gettype($posts['data'][0]),
            'result' => $posts
        ];

        return $this->response->setJSON($data);
    }
}