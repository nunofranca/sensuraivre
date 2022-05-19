<?php

namespace App\Services\Posts;

use App\Models\Post;
use App\Repositories\Posts\PostRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class PostService implements PostServiceInterface
{
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        return $this->postRepository->getAll()->load('images', 'category');
    }

    public function getAllForHomePage()
    {
        return Cache::remember('postsHome', 1000000, fn () =>
            $this->postRepository->getAllForHomePage()
        );

    }

    public function getById($id)
    {
        return $this->postRepository->getById($id);
    }

    public function getBySlug($slug)
    {
        return Cache::remember('post', 10000, fn () =>
            $this->postRepository->getBySlug($slug)->load('images', 'category')
        );
    }

    public function getAllDescId()
    {
        return $this->postRepository->getAllDescId()->load('category');

    }

    public function create($attributes)
    {
        Cache::forget('postsHome');
        return $this->postRepository->create($attributes);
    }

    public function update($attributes, $id)
    {
        Cache::forget('postsHome');
        Cache::forget('post');
        return $this->postRepository->update($attributes, $id);
    }
}

