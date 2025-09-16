<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'brand'])->paginate(12);
        return view('store.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('store.show', compact('product'));
    }
    public function listings()
    {
        return view('store.listings');
    }
    public function categories()
    {
        // Later you can fetch real categories from DB
        return view('store.categories');
    }
    public function shopList()
    {
        // Later this will return products, for now just static
        return view('store.shop-list');
    }
}
