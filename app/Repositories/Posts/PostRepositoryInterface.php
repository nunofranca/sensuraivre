<?php

namespace App\Repositories\Posts;

interface PostRepositoryInterface
{
    public function getAll();

    public function getAllDescId();

    public function create($attributes);
}
