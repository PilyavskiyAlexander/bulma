<?php

namespace App\Http\Controllers;

use App\Product;
use App\Services\IndexService;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    protected $service;


    public function __construct()
    {

        $this->service = new IndexService();

    }

    public function index()
    {
        $this->service->index();
//        $data['products'] = Product::take(12)->get();
        return view('index.index');
    }
}
