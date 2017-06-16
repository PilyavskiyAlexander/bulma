<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::paginate(50);
        return view('product.index', $data);
    }

    public function show(Request $request)
    {
        $data['product'] = Product::where('url', $request->url)->get()->first();
        return view('product.show', $data);
    }
}
