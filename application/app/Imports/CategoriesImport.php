<?php
namespace App\Imports;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CategoriesImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        return new Category([
            'name' => $row['name'],
            'description' => $row['description'],
        ]);
    }
}
