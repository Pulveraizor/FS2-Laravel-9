<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function products(Request $request) {

        $items = DB::table('product')->get();

        return view('Pages.products', compact('items'));
    }
}

