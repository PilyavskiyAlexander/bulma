@extends('layouts.app')
@section('title', trans('translates.contact_title'))
@section('content')

    @include('contacts.map')

    @include('contacts.about')

    @include('product.latest')

    @include('product.random')

    @include('brand.show.big')

    @include('brand.random')
@endsection