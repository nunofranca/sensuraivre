<?php

namespace App\Repositories\Posts;

interface PostRepositoryInterface
{
    public function getAll();

    public function getAllForHomePage();

    public function getById($id);

    public function getAllDescId();

    public function getBySlug($slug);

    public function update($attributes, $id);

    public function create($attributes);

    public function destroy($id);

}
