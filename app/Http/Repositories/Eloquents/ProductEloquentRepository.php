<?php


namespace App\Http\Repositories\Eloquents;


use App\Http\Repositories\Contracts\ProductRepositoryInterface;
use App\Product;

class ProductEloquentRepository extends EloquentRepository implements ProductRepositoryInterface
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        return Product::class;
    }
}
