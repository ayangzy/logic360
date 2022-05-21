<?php

namespace App\Services\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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

        if (!is_null($data['image'])) {
            $fileName = $this->uploadFile($data);
        }
        return Product::create([
            'market_id' => $data['market_id'],
            'quantity' => $data['quantity'],
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'price' => $data['price'],
            'image_url' => $fileName,
            'description' => $data['description'],
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if (!is_null($request['image'])) {
            $fileName = $this->uploadFile($request);
            $request['image_url'] = $fileName;
        }
        return $product->update($request->except('location', 'image'));
    }


    public function delete($id)
    {
        $product = Product::findOrFail($id);
        return $product->delete();
    }


    private function uploadFile($image)
    {
        $fileName = time() + 1 . '.' . $image['image']->extension();
        $image['image']->storeAs('products', $fileName, 'public');
        return $fileName;
    }
}
