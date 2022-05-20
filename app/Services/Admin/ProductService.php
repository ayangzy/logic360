<?php

namespace App\Services\Admin;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    public function dataDatables()
    {
        return Product::query()->with(['category', 'market'])->get();
    }

    public function upsert($id)
    {
        $product = new Product();
        if ($id != "new") {
            $product = Product::find($id);
        }
        return $product;
    }

    public function store(array $data)
    {
        return Product::create([
            'market_id' => $data['market_id'],
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'price' => $data['price'],
            'image_url' => 'avatar.jpg',
            'description' => $data['description'],
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        return $product->update($request->all());
    }


    public function delete($id)
    {
        $product = Product::findOrFail($id);
        return $product->delete();
    }
}
