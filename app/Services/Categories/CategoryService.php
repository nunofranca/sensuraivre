<?php

namespace App\Services\Categories;

use App\Repositories\Categories\CategoryRepositoryInterface;

class CategoryService implements CategoryServiceInterface
{

    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        return $this->categoryRepository->getAll();
    }

    public function create(array $attributes)
    {
        return $this->categoryRepository->create($attributes);
    }


}
