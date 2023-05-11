<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;

class FilterListController extends Controller
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        $colors = Color::all();
        $tags = Tag::all();



        $result = [
            'categories' => $categories,
            'colors' => $colors,
            'tags' => $tags,
            'price' => [
                'max' => Product::max('price'),
                'min' => Product::min('price'),
            ],
        ];
        return response()->json($result);
    }
}
