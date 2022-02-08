<?php

namespace App\Services\Posts;

interface PostServiceInterface
{
    public function getAll();

    public function getAllDescId();

    public function getById($id);

    public function create($attributes);

    public function update($attributes, $id);


}
