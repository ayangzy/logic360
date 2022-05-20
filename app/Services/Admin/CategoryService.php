<?php

namespace App\Services\Admin;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService
{
    public function dataDatables()
    {
        return Category::query()->get();
    }

    public function upsert($id)
    {
        $category = new Category();
        if ($id != "new") {
            $category = Category::find($id);
        }
        return $category;
    }

    public function store(array $data)
    {
        return Category::create([
            'name' => $data['name'],
            'description' => $data['description']
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        return $category->update($request->all());
    }


    public function delete($id)
    {
        $category = Category::findOrFail($id);
        return $category->delete();
    }
}