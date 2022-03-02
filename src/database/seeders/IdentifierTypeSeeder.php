<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentifierTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'IMEI',
            'EAN',
            'ISBN',
        ];

        foreach ($types as $type) {
            \App\Models\IdentifierType::updateOrcreate([
                'type' => $type
            ]);
        }
    }
}
