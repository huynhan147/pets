<?php
namespace App\Services\Category;

use App\Repositories\Category\CategoryRepositoryContract;

class CategoryService
{
    private $category_repository;

    public function __construct(CategoryRepositoryContract $category_repository)
    {
        $this->category_repository = $category_repository;
    }

    public function insert(array $category) :bool
    {
        return $this->category_repository->insert($category);
    }

    public function getAll(): array
    {
        return $this->category_repository->getAll();
    }
}
