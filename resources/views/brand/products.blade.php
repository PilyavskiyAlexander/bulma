<section class="container is-fluid" style="margin: 40px;">
    <div class="columns">
        <div class="column is-10 is-offset-1">
            <article class="message is-primary">
                <div class="message-header">
                    <h3 class="title" style="color: #fff;">{{trans('translates.products_of_this_brand')}}</h3>
                </div>
                <div class="message-body">
                    @foreach($brand->products as $product)
                        @if($loop->iteration % 4 == 1)
                            <div class="columns">
                                @endif
                                <div class="column">
                                    <a href="{{route('product.show', ['subdomain' => app()->getLocale(), 'url' => $product->url])}}" style="text-decoration: none;">
                                        {{$product->name}}
                                        <span class="tag is-warning" style="float: right;">{{$product->brand->name}}</span>
                                    </a>
                                </div>
                                @include('layouts.align_column')
                                @if($loop->iteration % 4 == 0)

                            </div>
                        @endif
                    @endforeach
                </div>
            </article>
        </div>
    </div>
</section>