<?php

namespace App\Repositories\Categories;

interface CategoryRepositoryInterface
{

    public function getAll();

    public function create(array $attributes);

}
