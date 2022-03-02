<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $categories = [
            'Laptop',
            'Phone',
            'Tablet',
            'Smart watch',
            'Accessories'
        ];

        foreach ($categories as $category) {
            \App\Models\Category::updateOrcreate([
                'type' => $category
            ]);
        }
    }
}
