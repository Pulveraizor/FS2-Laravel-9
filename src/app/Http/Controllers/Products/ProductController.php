<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models;


class ProductController extends Controller
{
    public function products(Request $request) {

        // $items = DB::table('product')->get();
        $products = Models\Product::query();
        if ($request->has('category')) {
            $products->orWhere('category_type', $request->category);
        }

        if ($request->has('brand')) {
            $products->orWhere('brand', $request->brand);
        }
        if ($request->has('search') && is_string($request->search)) {
            $products->where('brand', 'LIKE', '%' . $request->search . '%')
            ->orWhere('model', 'LIKE', '%' . $request->search . '%');
        }

        if ($request->order_by == 'price') {
            $products->orderBy('price');
        } elseif ($request->order_by == 'newest') {
            $products->orderBy('created_at');
        } elseif ($request->order_by == 'type') {
            $products->orderBy('category_type');
        }
        
        $items = $products->get();
        $categories = Models\Category::get();
        $brands = Models\Brand::get();

        $view = view('Pages.products', compact('items', 'categories', 'brands'));
        $view->with('category_type', $request->category);
        $view->with('brand', $request->brand);

        return $view;
    }

    public function show(Models\Product $product) {
        
        return view('Products.show', compact('product'));
    }

    public function create() {
        return view('Products.create');
    }
}

