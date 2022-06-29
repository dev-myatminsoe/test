<?php

namespace App\Repositories;

use App\Interfaces\CartItemRepositoryInterface;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CartItemRepository implements CartItemRepositoryInterface
{
    public function all()
    {
        return CartItem::with('product')->get();
    }

    public function addProduct()
    {
        $cartItem = new CartItem(request()->only('product_id'));
        $cartItem->save();
        return CartItem::findOrFail($cartItem->id);
    }

    public function removeItem($id)
    {
        $cartItem = CartItem::findOrFail($id);
        return ['deleted' => $cartItem->delete() == 1];
    }

    public function clearCart()
    {
        return ['deleted' => DB::table('cart_items')->delete() >= 0];
    }

}
