@extends('layouts.index')
@section('title', trans('translates.main_title'))
@section('content')
    @include('search')

    @include('product.latest')

    @include('product.random')

    @include('brand.show.big')

    @include('brand.random')

    @include('contacts.pages')

@endsection