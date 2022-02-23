<?php

namespace App\Repositories\Comments;

interface CommentRepositoryInterface
{
    public function getAll();
    public function create($attributes);
    public function getOrderByDesc($key);
}
