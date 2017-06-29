@extends('layouts.app')
@section('title', $product->name . ', ' . trans('translates.brand') .': '. $product->brand->name)
@section('content')
    @include('product.show.one')

    @include('product.brand_products')

    @include('product.latest')

    @include('product.random')

    @include('brand.show.big')

    @include('brand.random')

    @include('contacts.pages')
@endsection