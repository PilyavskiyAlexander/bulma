<?php

namespace App\Http\Controllers;

use App\Brand;
use App\ClientRequest;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $data['products'] = Product::where('name', 'like', '%' .$request->search. '%')->paginate(25);
        $data['search'] = $request->search;
        return view('search.product', $data);
    }

    public function search_brand(Request $request)
    {
        $data['brands'] = Brand::where('name', 'like', '%' .$request->search. '%')->paginate(25);
        $data['search'] = $request->search;
        return view('search.brand', $data);
    }
}
