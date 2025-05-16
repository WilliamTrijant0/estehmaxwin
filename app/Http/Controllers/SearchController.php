<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle search requests.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // If we have a Product model, we'll search for products
        $products = [];
        if (class_exists(Product::class)) {
            $products = Product::where('name', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->paginate(12);
        }
        
        return view('search-results', [
            'query' => $query,
            'products' => $products,
            'count' => count($products)
        ]);
    }
}
