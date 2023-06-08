<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tmp = 1;
        while ($tmp <= 10):
            DB::table('color_products')->insert([
                'color_id' => Tag::all()->random()->id,
                'product_id' => Product::find($tmp++)->id,
            ]);

        endWhile;
    }
}
