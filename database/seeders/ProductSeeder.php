<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Group;
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
        $array = array(
            "images/product/H60AWeqNADm4qt2nZku0pzhcgfFvNdB2fE4tI1Pk.jpg",
            "images/product/oxlQqsl9Qz5pOr4uLr4JRjahO1L8WQI2W3y92qQD.jpg",
            "images/product/e2gJ98RnDQ7ttyA02OqTrkNmF22bbmRQdp5EGYPh.jpg",
            "images/product/czAdDGlalOqzbxSp3X8z29BtCIfdQO5wfWeShEQ9.jpg",
            "images/product/EwbQCdjDIxBPe6kOVSuLB7j8hEVNOD1WQQMHmeix.jpg",
            "images/product/pWV0PhX4bC7vCQHHtpQg6L4HgfyxtIC0VHaVpkCe.jpg",
            "images/product/dg.jpg",
        );
        while ($tmp <= 84):
        DB::table('products')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
            'content' => Str::random(100),
            'preview_image' => array_rand(array_flip($array)),
            'price' => rand(50,9999),
            'old_price' => rand(50,9999),
            'count' => rand(0,100),
            'is_published' => 1,
            'category_id' => Category::all()->random()->id,
            'group_id' => Group::all()->random()->id,

        ]);
        $tmp++;
        endWhile;
    }
}
