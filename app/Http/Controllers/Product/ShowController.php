<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Product $product)
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product.show', compact('product', 'categories', 'products'));
    }
}
