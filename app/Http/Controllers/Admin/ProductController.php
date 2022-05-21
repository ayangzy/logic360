<?php

namespace App\Http\Controllers\Admin;

use App\Models\Market;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\ProductService;
use App\Http\Requests\CreateProductRequest;
use App\Models\Category;
use App\Models\Location;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    public function index()
    {
        return view('admin.products.index');
    }

    public function loadPartial()
    {
        $products = $this->productService->dataDatables();
        return view('admin.products.partials._table-data', compact('products'));
    }

    public function upsert($id)
    {
        $product = $this->productService->upsert($id);
        $locations = Location::query()->select('id', 'name')->get();
        $categories = Category::query()->select('id', 'name')->get();
        return view('admin.products.partials._upsert', compact('product', 'locations', 'categories'));
    }


    public function store(CreateProductRequest $request)
    {

        $this->productService->store($request->validated());

        return $this->successResponse('Product added successfully');
    }


    public function update(Request $request, $id)
    {
        $this->productService->update($request, $id);

        return $this->successResponse('Product updated successfully');
    }


    public function destroy($id)
    {
        $this->productService->delete($id);

        return $this->successResponse('Product deleted successfully');
    }
}
