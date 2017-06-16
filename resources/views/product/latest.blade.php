<section class="container is-fluid" style="margin: 40px;">
    <div class="columns">
        <div class="column is-10 is-offset-1">
            <h2 class="title">{{trans('translates.latest_products')}}</h2>
            @foreach($latest_products as $product)
                @if($loop->iteration % 3 == 1)
                    <div class="columns">
                        @endif
                        <div class="column">
                            @include('product.show.slim')
                        </div>
                        @if($loop->iteration % 3 == 0)
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>