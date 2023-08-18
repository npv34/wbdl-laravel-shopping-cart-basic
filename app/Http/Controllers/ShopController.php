<?php

namespace App\Http\Controllers;

use App\Http\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    function addToCart($idProduct)
    {
        $product = Product::findOrFail($idProduct);
        $oldCart = session('cart');
        $newCart = new Cart($oldCart);
        $newCart->add($product);
        session()->put('cart', $newCart);
        session()->flash('add-to-cart-success', 'Add product to cart successfully');
        return back();
    }

    public function getCart()
    {
        $cart = session('cart');
        return view('cart', compact('cart'));
    }
}
