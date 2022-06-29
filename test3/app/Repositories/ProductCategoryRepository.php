<?php

namespace App\Repositories;

use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Models\ProductCategory;

class ProductCategoryRepository implements ProductCategoryRepositoryInterface
{

    public function all()
    {
        $categories = ProductCategory::all();
        return $categories;
    }

    public function get($id)
    {
        $category = ProductCategory::findOrFail($id);
        return $category;
    }

    public function create()
    {
        $category = new ProductCategory(request()->only(['name']));
        $category->save();
        return $category;
    }

    public function update($id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->update(request()->only(['name']));
        return $category;
    }

    public function delete($id)
    {
        return ProductCategory::findOrFail($id)->delete();
    }
}
