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
        return $this->postRepository->getAllDescId();
    }

    public function create($attributes)
    {

        $post = $this->postRepository->create($attributes);
        $image = $this->imageService->moveImage($attributes['image']);

        $post->images()->create([
            'path' => $attributes['image']
        ]);
        return redirect()->back();

    }

    public function update($attributes, $id)
    {
        return $this->postRepository->update($attributes, $id);
    }
}

