<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\CategoryService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{   
    private $categoryService; 

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }


    public function index()
    {
        return view('admin.categories.index');
    }

    public function loadpartial()
    {
        $categories = $this->categoryService->dataDatables();
        return view('admin.categories.partials._table-data', compact('categories'));
    }

    public function upsert($id)
    {
        $category = $this->categoryService->upsert($id);
        return view('admin.categories.partials._upsert', compact('category'));
    }


    public function store(Request $request)
    {

        $this->categoryService->store($request->all());

        return $this->successResponse('Category added successfully');
        // Session::flash('success', 'Category created successfully');
        // return redirect()->back();
    }

   
    public function update(Request $request, $id)
    {
        $this->categoryService->update($request, $id);

        return $this->successResponse('Category updated successfully');
        // Session::flash('success', 'Category updated successfully');
        // return redirect()->back();
    }

   
    public function destroy($id)
    {
        $this->categoryService->delete($id);
        return $this->successResponse('Category deleted successfully');
    }
}
