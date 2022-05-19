<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequestStore;
use App\Models\Category;
use App\Services\Categories\CategoryServiceInterface;
use App\Services\Images\ImageServiceInterface;
use App\Services\Posts\PostServiceInterface;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    private $postService, $categoryService, $imageService;

    public function __construct(PostServiceInterface     $postService,
                                CategoryServiceInterface $categoryService,
                                ImageServiceInterface    $imageService
    )
    {
        $this->postService = $postService;
        $this->categoryService = $categoryService;
        $this->imageService = $imageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        try {

            $posts = $this->postService->getAllDescId();

        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return view('painel.posts.index', [

            'posts' => $posts
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = $this->categoryService->getAll();

        return view('painel.posts.create', [
            'categories' => $categories,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequestStore $request)
    {


        try {
            $attributes = $request->validated();
            $post = $this->postService->create($attributes);
            $this->imageService->create($post, $request->image);
            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->postService->getById($id);
        $categories = $this->categoryService->getAll();
        return view('painel.posts.edit', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {
            $this->postService->update($request->all(), $id);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
