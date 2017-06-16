@extends('layouts.app')

@section('content')
    @include('product.show.one')

    @include('product.brand_products')

    @include('product.latest')

    @include('product.random')

    @include('brand.show.big')

    @include('brand.random')
@endsection