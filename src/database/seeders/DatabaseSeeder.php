<?php

namespace Database\Seeders;

use App\Models\IdentifierType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
            IdentifierTypeSeeder::class,
            DiscountIdSeeder::class
        ]);

        \App\Models\Product::factory(10)->create();
    }
}
