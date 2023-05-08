<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Group;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ColorSeeder::class,
            UserSeeder::class,
            GroupSeeder::class,
            ProductSeeder::class,
            TagSeeder::class,
            ProductTagSeeder::class,
            ProductColorSeeder::class,
        ]);
    }
}
