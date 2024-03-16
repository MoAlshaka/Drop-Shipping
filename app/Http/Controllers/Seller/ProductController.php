<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('seller.product.index', compact('products'));
    }
    public function show($id)
    {
        $product = Product::findorfail($id);
        return view('seller.product.show', compact('product'));
    }
}
