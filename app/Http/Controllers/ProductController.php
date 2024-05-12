<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product.list', [
            'products' => Product::where('user_id', '1')->get()
        ]);
    }
}
