<section class="container is-fluid" style="margin: 40px;">
    <div class="columns">
        <div class="column is-10 is-offset-1">
            <article class="message is-primary">
                <div class="message-header">
                    <h3 class="title" style="color: #fff;">{{trans('translates.random_brands')}}</h3>
                </div>
                <div class="message-body">
                    @foreach($random_brands as $brands)
                        @if($loop->iteration % 4 == 1)
                            <div class="columns">
                                @endif
                                <div class="column">
                                    <a href="{{route('brand.show', $brands->url)}}" style="text-decoration: none;">
                                        {{$brands->name}}
                                    </a>
                                </div>
                                @if($loop->iteration % 4 == 0)
                            </div>
                        @endif
                    @endforeach
                </div>
            </article>
        </div>
    </div>
</section>