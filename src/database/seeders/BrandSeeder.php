<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            'Apple',
            'Samsung',
            'Asus',
            'Lenovo',
            'Huawei',
            'LG',
            'Xiaomi'
        ];

        foreach ($brands as $brand) {
            \App\Models\Brand::updateOrcreate([
                'name' => $brand
            ]);
        }
    }
}
