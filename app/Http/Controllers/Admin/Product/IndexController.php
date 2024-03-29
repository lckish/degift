<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Group;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();
        $categories = Category::all();
        $groups = Group::all();
        return view('product.index', compact('products', 'categories', 'groups'));
    }



}
