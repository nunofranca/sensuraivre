<?php

namespace App\Services\Posts;

use App\Repositories\Posts\PostRepositoryInterface;
use App\Services\Images\ImageServiceInterface;

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
        return $this->postRepository->getAll();
    }

    public function getById($id)
    {
       return $this->postRepository->getById($id);
    }

    public function getAllDescId()
    {
        $posts = $this->postRepository->getAllDescId();
        return $posts->load('images');
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

