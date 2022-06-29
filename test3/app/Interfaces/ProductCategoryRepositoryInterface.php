<?php

namespace App\Interfaces;

interface ProductCategoryRepositoryInterface
{
    public function all();
    public function get($id);
    public function create();
    public function update($id);
    public function delete($id);
}
