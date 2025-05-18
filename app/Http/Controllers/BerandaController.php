<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('beranda', compact('products'));
    }
    
    public function show(Product $product)
    {
        return view('product-details', compact('product'));
    }
}
