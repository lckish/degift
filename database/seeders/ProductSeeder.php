<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tmp = 1;
        while ($tmp <= 10):
        DB::table('products')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'content' => Str::random(100),
            'preview_image' => '\images\product\H60AWeqNADm4qt2nZku0pzhcgfFvNdB2fE4tI1Pk.jpg',
            'price' => rand(50,9999),
            'old_price' => rand(50,9999),
            'count' => rand(0,100),
            'is_published' => 1,
            'category_id' => Category::all()->random()->id,
        ]);
        $tmp++;
        endWhile;
    }
}
