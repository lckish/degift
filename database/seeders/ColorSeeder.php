<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colors')->insert([
                'title' => 'e81807',
            ]);
        DB::table('colors')->insert([
            'title' => 'a211bf',
        ]);
        DB::table('colors')->insert([
            'title' => '1b23cc',
        ]);
        DB::table('colors')->insert([
            'title' => '22ba66',
        ]);
        DB::table('colors')->insert([
            'title' => '70ab29',
        ]);
        DB::table('colors')->insert([
            'title' => '16ccc9',
        ]);
        DB::table('colors')->insert([
            'title' => '600fd9',
        ]);
        DB::table('colors')->insert([
            'title' => 'f00a11',
        ]);
        DB::table('colors')->insert([
            'title' => 'f0c60a',
        ]);
        DB::table('colors')->insert([
            'title' => 'f0530a',
        ]);

//        $chars = '0123456789abdopqrst';
//        $tmp = 1;
//        while ($tmp <= 10):
//            DB::table('colors')->insert([
//
//                'title' => substr(str_shuffle($chars),0,5),
//            ]);
//            $tmp++;
//        endWhile;

    }
}
