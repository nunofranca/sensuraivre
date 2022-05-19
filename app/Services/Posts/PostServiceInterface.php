<?php

namespace App\Services\Posts;

interface PostServiceInterface
{
    public function getAll();

    public function getAllForHomePage();

    public function getAllDescId();

    public function getById($id);

    public function getBySlug($slug);

    public function create($attributes);

    public function update($attributes, $id);




}
