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
        $title = array(
            "Косметика и уход",
            "Игрушки",
            "Продукты",
            "Электроника",
            "Книги",
        );
        while ($tmp <= 4):
        DB::table('categories')->insert([

            'title' => $title[$tmp],
        ]);
        $tmp++;
        endWhile;
    }
}
