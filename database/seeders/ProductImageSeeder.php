<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tmp = 1;
        $id = 1;
        $array = array(
            "images/product/test.png",
        );
        while ($tmp <= 10):
            for ($i = 1; $i <= 3; $i++) {
                DB::table('product_images')->insert([
                    'product_id' => $tmp,
                    'file_path' => array_rand(array_flip($array)),
                ]);
            }
            $tmp++;
        endwhile;
    }
}
