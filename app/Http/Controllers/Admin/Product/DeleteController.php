<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        //Удаленте продуктов
        $data = $product;
        //Удаление картинки
        $data['preview_image'] = Storage::disk('public')->delete('/images/product/', $data['preview_image']);
        //Удаление остального
        $product->delete();
        return redirect()->route('product.index');
    }
}
