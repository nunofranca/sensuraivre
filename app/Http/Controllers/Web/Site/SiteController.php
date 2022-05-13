<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use App\Services\Posts\PostServiceInterface;

class SiteController extends Controller
{
    private $postService;
    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {

        $posts = $this->postService->getAllDescId();
        return view('site.home.index', [
            'posts' => $posts
        ]);
    }

    public function show($slug)
    {
        $post = $this->postService->getBySlug($slug);
        return view('site.materia.index', [
            'post' => $post
        ]);
    }
}
