<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;

use App\Models\Product;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        return view('product.edit', compact('product'));
    }
}
