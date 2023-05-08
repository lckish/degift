<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tmp = 1;
        while ($tmp <= 10):
        DB::table('categories')->insert([

            'title' => Str::random(10),
        ]);
        $tmp++;
        endWhile;
    }
}
