<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('shop.home', compact('products'));
    }

    public function showProductDetail($slug)
    {
        $product = $this->productService->findBySlug($slug);
        if (!$product) {
            return abort(404);
        }

        return view('shop.products.detail', compact('product'));
    }
}
