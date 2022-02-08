<?php

namespace App\Repositories\Categories;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $category)
    {
        parent::__construct($category);
    }

}
