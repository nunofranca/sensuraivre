<?php

namespace App\Services\Comments;

use App\Repositories\Comments\CommentRepositoryInterface;
use App\Services\Posts\PostServiceInterface;

class CommentService implements CommentServiceInterface
{
    private $commentRepository;
    private $postService;

    public function __construct(CommentRepositoryInterface $commentRepository, PostServiceInterface $postService)
    {
        $this->commentRepository = $commentRepository;
        $this->postService = $postService;
    }

    public function orderByDesc($key)
    {
        return $this->commentRepository->getOrderByDesc($key);
    }

    public function getAll()
    {
        return $this->commentRepository->getAll()->load('post');
    }

    public function create($attributes)
    {

        $postId = $this->postService->getBySlug($attributes['slug'])->id;

        $attributes['post_id'] = $postId;

        return $this->commentRepository->create($attributes);
    }
}
