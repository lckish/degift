<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tmp = 1;
        while ($tmp <= 10):
        DB::table('users')->insert([
            'name' => Str::random(7),
            'surname' => Str::random(13),
            'patronymic' => Str::random(10),
            'age' => rand(16,70),
            'address' => Str::random(30),
            'gender' => rand(1,2),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ]);
            $tmp++;
        endWhile;
    }
}
