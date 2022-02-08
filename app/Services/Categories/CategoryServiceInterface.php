<?php

namespace App\Services\Categories;

interface CategoryServiceInterface
{
    public function getAll();

    public function create(array $attributes);
}
