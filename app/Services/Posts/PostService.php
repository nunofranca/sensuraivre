<?php

namespace App\Services\Posts;

use App\Repositories\Posts\PostRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class PostService implements PostServiceInterface
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {

        return $this->postRepository->getAll()->load('images', 'category');
    }

    public function getById($id)
    {
        return $this->postRepository->getById($id);
    }

    public function getBySlug($slug)
    {
        return $this->postRepository->getBySlug($slug)->load('images', 'category');

    }

    public function getAllDescId()
    {
        return $this->postRepository->getAllDescId()->load('images', 'category');

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

