<?php

namespace App\Http\Controllers;

use App\Interfaces\CartItemRepositoryInterface;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $cartItemRepositoryInterface;

    public function __construct(CartItemRepositoryInterface  $cartItemRepositoryInterface)
    {
        $this->cartItemRepositoryInterface = $cartItemRepositoryInterface;
    }

    public function all()
    {
        return $this->cartItemRepositoryInterface->all();
    }

    public function addItem()
    {
        return $this->cartItemRepositoryInterface->addProduct();
    }

    public function removeItem($id)
    {
        return $this->cartItemRepositoryInterface->removeItem($id);
    }

    public function clear()
    {
        return $this->cartItemRepositoryInterface->clearCart();
    }
}
