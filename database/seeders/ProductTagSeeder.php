<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tmp = 1;
        while ($tmp <= 10):
            DB::table('product_tags')->insert([
                'tag_id' => Tag::all()->random()->id,
                'product_id' => Product::find($tmp++)->id,
            ]);

        endWhile;
    }
}
