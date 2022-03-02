<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DiscountId::updateOrcreate([
            'name' => 'no discount',
            'desc' => 'none',
            'discount_percent' => 0
        ]);
       
    }
}
