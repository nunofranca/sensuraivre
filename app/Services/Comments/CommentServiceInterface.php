<?php

namespace App\Services\Comments;

interface CommentServiceInterface
{
    public function getAll();
    public function orderByDesc($key);
    public function create($attributes);
}
