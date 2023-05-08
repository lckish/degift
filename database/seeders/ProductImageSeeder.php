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
            "images/product/H60AWeqNADm4qt2nZku0pzhcgfFvNdB2fE4tI1Pk.jpg",
            "images/product/oxlQqsl9Qz5pOr4uLr4JRjahO1L8WQI2W3y92qQD.jpg",
            "images/product/e2gJ98RnDQ7ttyA02OqTrkNmF22bbmRQdp5EGYPh.jpg",
            "images/product/czAdDGlalOqzbxSp3X8z29BtCIfdQO5wfWeShEQ9.jpg",
            "images/product/EwbQCdjDIxBPe6kOVSuLB7j8hEVNOD1WQQMHmeix.jpg",
            "images/product/pWV0PhX4bC7vCQHHtpQg6L4HgfyxtIC0VHaVpkCe.jpg",
            "images/product/dg.jpg",
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
