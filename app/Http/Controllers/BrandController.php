<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data['brands'] = Brand::paginate(50);
        return view('brand.index', $data);
    }

    public function show(Request $request)
    {
        $data['brand'] = Brand::where('url', $request->url)->get()->first();
        return view('brand.show', $data);
    }
}
