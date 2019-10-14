<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Contracts\ProductRepositoryInterface;
use App\Http\Services\ProductServiceInterface;

class ProductService implements ProductServiceInterface
{
    protected $productRepo;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepo = $productRepository;
    }

    function getAll()
    {
        return $this->productRepo->getAll();
    }

    function findBySlug($slug)
    {
        return $this->productRepo->findBySlug($slug);
    }

    function findById($id)
    {
        return $this->productRepo->find($id);
    }
}
