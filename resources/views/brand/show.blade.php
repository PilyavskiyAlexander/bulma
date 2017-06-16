@extends('layouts.app')

@section('content')
    @include('brand.show.one')

    @include('product.latest')

    @include('product.random')

    @include('brand.show.big')

    @include('brand.random')
@endsection