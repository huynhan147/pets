<?php


namespace App\Repositories\Category;


use App\Models\Category;

class CategoryRepository implements CategoryRepositoryContract
{

    public function insert(array $category): bool
    {
        return Category::create($category);
    }

    public function getAll(): array
    {
        return Category::all()->toArray();
    }
}
