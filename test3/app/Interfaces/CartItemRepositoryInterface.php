<?php

namespace App\Interfaces;

interface CartItemRepositoryInterface
{
    public function all();
    public function addProduct();
    public function removeItem($id);
    public function clearCart();
}
