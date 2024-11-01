<?php namespace App\Controllers;

class Blogs extends BaseController
{
    public function index($taxonomy = '', $filter = '')
    {
        $pager = \Config\Services::pager();
        $page = (int) ($this->request->getGet('page') ?? 1);
        $search = $this->request->getGet('search');
        $perPage = 10;
        $wp = wp()->setExcerptLength(100)->setPerPage($perPage)->setSinglePostUrl('blogs/read-post');
        $totalPost = count(wp()->call('posts'));

        $data = [
            'pageTitle'     => 'Blog - Wiratama Group',
            'posts'         => $wp->getPosts($page, $search, $taxonomy, $filter),
            'pageLinks'     => $pager->makeLinks($page, $perPage, $totalPost, 'wiratama_pager'),
            'getPage'       => $page,
            'count'         => $pager->getPageCount(),
            'allCategories' => wp()->getCategories(),
            'allTags'       => wp()->getTags(),
        ];

        return view('blogs/main', array_merge($this->commonData(), $data));
    }

    public function readPost($slug)
    {
        $getPost = wp()->readPost($slug);
        $content = $getPost['contents'];
        $post = $content['post'];

        $data = [
            'pageTitle'     => $getPost['pageTitle'] . ' - Wiratama Group',
            'post'          => $post,
            'recentPosts'   => $content['recentPosts'],
            'recentStatus'  => $content['recentStatus'],
            'categories'    => $post->categoriesArray,
            'tags'          => $post->tags,
            'allCategories' => wp()->getCategories(),
            'allTags'       => wp()->getTags(),
        ];

        return view('read-post/main', array_merge($this->commonData(), $data));
    }
}