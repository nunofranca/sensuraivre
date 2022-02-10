<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use App\Services\Posts\PostServiceInterface;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    private $postService;
    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $posts = $this->postService->getAllDescId();
        return view('site.home.index', [
            'posts' => $posts
        ]);
    }
}
