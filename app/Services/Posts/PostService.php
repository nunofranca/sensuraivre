<?php

namespace App\Services\Posts;

use App\Repositories\Posts\PostRepositoryInterface;
use App\Services\Images\ImageServiceInterface;
use Illuminate\Support\Facades\Cache;

class PostService implements PostServiceInterface
{
    private $postRepository, $imageService;

    public function __construct(PostRepositoryInterface $postRepository, ImageServiceInterface $imageService)
    {
        $this->postRepository = $postRepository;
        $this->imageService = $imageService;
    }

    public function getAll()
    {
        return Cache::remember('posts', 120, function () {
            return $this->postRepository->getAll()->load('images', 'category');
        });

    }

    public function getById($id)
    {
        return $this->postRepository->getById($id);
    }

    public function getBySlug($slug)
    {
        return Cache::remember('post', 300, function () use ($slug) {
            return $this->postRepository->getBySlug($slug)->load('images', 'category');
        });
    }

    public function getAllDescId()
    {
        return Cache::remember('postsHome', 120, function () {
            return $this->postRepository->getAllDescId()->load('images', 'category');
        });
    }

    public function create($attributes)
    {
        return $this->postRepository->create($attributes);
    }

    public function update($attributes, $id)
    {
        return $this->postRepository->update($attributes, $id);
    }
}

