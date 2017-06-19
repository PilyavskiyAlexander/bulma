<?php

namespace App\Http\Controllers;

use App\Brand;
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
        return view('index.index');
    }

    public function rand()
    {
        $products = Product::all();
        foreach ($products as $product)
        {
            $sequence[] = rand(SENTENCE_1_PRODUCT_MIN, SENTENCE_1_PRODUCT_MAX);
            $sequence[] = rand(SENTENCE_2_PRODUCT_MIN, SENTENCE_2_PRODUCT_MAX);
            $sequence[] = rand(SENTENCE_3_PRODUCT_MIN, SENTENCE_3_PRODUCT_MAX);
            $sequence[] = rand(SENTENCE_4_PRODUCT_MIN, SENTENCE_4_PRODUCT_MAX);
            $sequence[] = rand(SENTENCE_5_PRODUCT_MIN, SENTENCE_5_PRODUCT_MAX);

            $product->sequence = implode('#', $sequence);
            $product->save();

            unset($sequence);
        }

        return view('index.index');
    }

    public function randb()
    {
        $brands = Brand::all();
        foreach ($brands as $brand)
        {
            $sequence[] = rand(SENTENCE_1_BRAND_MIN, SENTENCE_1_BRAND_MAX);
            $sequence[] = rand(SENTENCE_2_BRAND_MIN, SENTENCE_2_BRAND_MAX);
            $sequence[] = rand(SENTENCE_3_BRAND_MIN, SENTENCE_3_BRAND_MAX);
            $sequence[] = rand(SENTENCE_4_BRAND_MIN, SENTENCE_4_BRAND_MAX);
            $sequence[] = rand(SENTENCE_5_BRAND_MIN, SENTENCE_5_BRAND_MAX);

            $brand->sequence = implode('#', $sequence);
            $brand->save();

            unset($sequence);
        }

        return view('index.index');
    }

    public function url()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $url = str_replace(['.', ',', ' ', '\\', '|', '/', ':', '"', "'", '@',  "?", "#", "[", "]", "@", "!", "$", "&",
                "(", ")", "*", "+", ";", "="], '-', $product->name);
            $product->url = str_replace(['----', '--', '---',], '-', $url);
            $product->save();
        }
    }

}
