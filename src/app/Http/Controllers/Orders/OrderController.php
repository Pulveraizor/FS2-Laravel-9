<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders(Request $request) {

        $list = [
            [
                'id' => '1',
                'created' => 'March 21',
                'name' => 'Harrient Santigo',
                'status' => 'authorized',
                'total' => '604.50'
            ],
            [
                'id' => '2',
                'created' => 'March 20',
                'name' => 'Sara Graham',
                'status' => 'paid',
                'total' => '574.50'
            ],
            [
                'id' => '3',
                'created' => 'March 20',
                'name' => 'Almer Macgee',
                'status' => 'paid',
                'total' => '723.00'
            ],
            [
                'id' => '4',
                'created' => 'March 16',
                'name' => 'Victor Scold',
                'status' => 'pending',
                'total' => '148.70'
            ]
        ];

        
        return view('Pages.orders', compact('list'));
    }
}
