<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{

    public function retrieved(Product $product)
    {
        $product->price = $product->price / 100;
    }

    public function saving(Product $product)
    {
        $product->price = $product->price * 100;
    }
}
