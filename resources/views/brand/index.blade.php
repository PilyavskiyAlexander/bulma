@extends('layouts.app')
@section('title', trans('translates.brands_title'))
@section('content')
    <section class="columns" style="margin-top: 30px;">
        <div class="column is-6 is-offset-3">
            <form action="{{route('search_brand', ['subdomain' => app()->getLocale()])}}" method="get">
                <div class="field has-addons">
                    <p class="control is-expanded">
                        <input class="input is-primary is-large" type="search" name="search"
                               placeholder="{{trans('translates.what_do_you_search')}}" >
                    </p>
                    <p class="control">
                        <button type="submit" class="button is-primary is-large">
                            {{trans('translates.search')}}
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </section>

    <section class="container is-fluid" style="margin: 40px;">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                @foreach($brands as $brand)
                    @if($loop->iteration % 2 == 1)
                        <div class="columns">
                            @endif
                            <div class="column is-half">
                                @include('brand.show.slim')
                            </div>
                            @if($loop->iteration % 2 == 0)
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
        <div class="columns">
            <div class="column is-8 is-offset-2">
                {{ $brands->links() }}
            </div>
        </div>

        @include('contacts.pages')
    </section>


@endsection