<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        $products = Product::with('category')->get();
        return $products;
    }

    public function get($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return $product;
    }

    public function create()
    {
        $product = new Product(request()->only('name', 'price', 'category_id'));
        if(request()->file('image')) {
            $path = request()->file('image')->store('/public/products');
            $product->image_url = Storage::url($path);
        }
        $product->save();
        return Product::findOrFail($product->id);
    }

    public function update($id)
    {
        $product = Product::findOrFail($id);
        if(request()->file('image')) {
            Storage::delete(str_replace('/storage', '/public', $product->image_url));
            $path = request()->file('image')->store('/public/products');
            $product->image_url = Storage::url($path);
        }
        $product->save();
        return Product::findOrFail($product->id);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        Storage::delete(str_replace('/storage', '/public', $product->image_url));
        return ['deleted' => $product->delete() == 1];
    }


}
