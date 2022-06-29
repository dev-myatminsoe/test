<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Repositories\ProductCategoryRepository;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{

    private $repository;

    public function __construct(ProductCategoryRepositoryInterface $repository)
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
