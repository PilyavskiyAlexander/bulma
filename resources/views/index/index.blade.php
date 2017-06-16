@extends('layouts.index')

@section('content')
    @include('search')

    @include('product.latest')

    @include('product.random')

    @include('brand.show.big')

    @include('brand.random')

@endsection