<?php

namespace App\Services\Posts;

use App\Repositories\Posts\PostRepositoryInterface;

class PostService implements PostServiceInterface
{
    private $postRepository;
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        return $this->postRepository->getAll();
    }
    public function getAllDescId()
    {
        return $this->postRepository->getAllDescId();
    }

    public function create($attributes)
    {
        return $this->postRepository->create($attributes);
    }
}
