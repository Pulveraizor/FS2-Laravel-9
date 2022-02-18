<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(Request $request) {

        $items = [
            [
                'Make' => 'Lenovo',
                'Model' => 'V15',
                'Memory' => '8 GB',
                'Storage' => '1 TB'
            ],
            [
                'Make' => 'Toshiba',
                'Model' => 'LifeBook',
                'Memory' => '4 GB',
                'Storage' => '512 GB'
            ],
            [
                'Make' => 'Asus',
                'Model' => 'VivoBook',
                'Memory' => '16 GB',
                'Storage' => '1 TB'
            ],
            [
                'Make' => 'Apple',
                'Model' => 'MacBook Air',
                'Memory' => '8 GB',
                'Storage' => '256 GB'
            ],
            [
                'Make' => 'Dell',
                'Model' => 'Inspiron',
                'Memory' => '8 GB',
                'Storage' => '512 GB'
            ],
            [
                'Make' => 'Huawei',
                'Model' => 'MateBook Pro',
                'Memory' => '16 GB',
                'Storage' => '1 TB'
            ]
        ];

        return view('Pages.products', compact('items'));
    }
}

