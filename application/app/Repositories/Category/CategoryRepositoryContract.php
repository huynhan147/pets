<?php

namespace App\Repositories\Category;

interface CategoryRepositoryContract
{

    /**
     * Insert data one category to database
     * @param array $category
     * @return bool
     */
    public function insert(array $category): bool;

    /**
     * Get all category
     * @return array
     */
    public function getAll(): array;
}
