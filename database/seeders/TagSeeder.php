<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tmp = 1;
        $title = array(
            "#длядетей",
            "#длянее",
            "#длянего",
            "#наособыйслучай",
            "#длядома",
            "#длялюбителейтехники",
            "#длялюбителеймоды",
            "#дляпутешествий",
            "#длягурманов",
            "#персонализированныеподарки",
        );
        while ($tmp <= 9):
            DB::table('tags')->insert([
                'title' => $title[$tmp],
            ]);
            $tmp++;
        endWhile;
    }
}
