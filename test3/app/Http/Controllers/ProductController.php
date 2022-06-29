<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function get($categoryId)
    {
        return $this->repository->get($categoryId);
    }

    public function create()
    {
        return $this->repository->create();
    }

    public function update($categoryId)
    {
        return $this->repository->update($categoryId);
    }

    public function delete($categoryId)
    {
        return $this->repository->delete($categoryId);
    }
}
