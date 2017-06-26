@extends('layouts.app')
@section('title', trans('translates.brand') .': ' .$brand->name)
@section('content')
    @include('brand.show.one')

    @include('brand.products')

    @include('product.latest')

    @include('product.random')

    @include('brand.show.big')

    @include('brand.random')
@endsection