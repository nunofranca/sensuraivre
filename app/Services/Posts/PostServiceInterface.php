<?php

namespace App\Services\Posts;

interface PostServiceInterface
{
    public function getAll();

    public function getAllDescId();

    public function create($attributes);
}
