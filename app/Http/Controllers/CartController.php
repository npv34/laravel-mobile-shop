<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Services\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $cart = session('cart');
        return view('shop.cart.index', compact('cart'));
    }
    public function addToCart(Request $request, $productId)
    {
        $product = $this->productService->findById($productId);
        if (!$product) {
            return abort(404);
        }

        if (Session::has('cart')) {
            $oldCart = session('cart');
        } else {
            $oldCart = null;
        }
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        Session::put('cart', $cart);

        Session::flash('success', 'Thêm sản phẩm vào giỏ hàng thành công');
        return redirect()->route('cart.index');
    }
    public function removeProductIntoCart($productId)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->remove($productId);
                Session::put('cart', $cart);
                Session::flash('success', 'Xóa sản phẩm khỏi giỏ hàng thành công');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }
    public function updateProductIntoCart(Request $request, $productId)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->update($request, $productId);
                Session::put('cart', $cart);
                Session::flash('success', 'Cập nhật thành công!');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }
}
