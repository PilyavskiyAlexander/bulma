@extends('layouts.app')

@section('content')
    <section class="columns" style="margin-top: 30px;">
        <div class="column is-6 is-offset-3">
            <form action="{{route('search', ['subdomain' => app()->getLocale()])}}" method="get">
                <div class="field has-addons">
                    <p class="control is-expanded">
                        <input class="input is-primary is-large" type="search" name="search" id="searchInput"
                               placeholder="{{trans('translates.what_do_you_search')}}" value="{{$search}}">
                    </p>
                    <p class="control">
                        <button type="submit" class="button is-primary is-large">
                            {{trans('translates.search')}}
                        </button>
                    </p>
                </div>
            </form>
        </div>
        <div class="column is-2">
            <form action="{{route('search_brand', ['subdomain' => app()->getLocale()])}}" method="get">
                <input type="hidden" value="{{$search}}" name="search" id="search_product_brand">
                <button type="submit" class="button is-primary is-outlined is-large">{{trans('translates.search_brand')}}</button>
            </form>
        </div>
    </section>
    <section class="container is-fluid" style="margin: 40px;">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                @foreach($products as $product)
                <div class="columns">
                        <div class="column">
                            @include('product.show.slim3')
                        </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="columns">
            <div class="column is-8 is-offset-2">
                {{ $products->appends(['search' => $search])->links() }}
            </div>
        </div>
    </section>

@endsection