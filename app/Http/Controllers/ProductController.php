<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('product.list', [
            'products' => Product::where('user_id', $request->user()->id)->get()
        ]);
    }

    public function show(Product $product)
    {
        return view('product.show', [
            'product' => Product::where('id' , $product->id)->first()
        ]);
    }

    public function create()
    {
        return view('product.create', [
            'stores' => Store::all()
        ]);
    }
}
