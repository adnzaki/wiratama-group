<?php namespace App\Controllers;

class Test extends BaseController
{
    public function commontTest()
    {
        $posts = wp()->setPerPage(2)->getPosts(1);

        return $this->response->setJSON($posts);
    }
}