<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFileRequest;
use App\Imports\CategoriesImport;
use App\Services\Category\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    private $category_service;

    /**
     * CategoryController constructor.
     * @param CategoryService $category_service
     */
    public function __construct(CategoryService $category_service)
    {
        $this->category_service = $category_service;
    }

    public function index()
    {
        $categories = $this->category_service->getAll();
        return view('category.index', compact('categories'));
    }

    public function upload(UploadFileRequest $request)
    {
        try {
            Excel::import(new CategoriesImport, $request->file('file'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
        return back();
    }
}
