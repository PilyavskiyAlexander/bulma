<section class="columns" style="margin: 40px;">
    <div class="column is-4 is-offset-1">
        <figure class="image">
            <img src="{{asset($product->big())}}" class="main-image">
        </figure>
        @if(!empty($product->images))
            @foreach($product->images as $image)
                <img src="{{asset($image->image)}}" class="image is-64x64 make-main-image">
            @endforeach
        @endif
    </div>
    <div class="column is-6">
        <h1 class="title"><a>{{$product->name}}</a></h1>
        <h2 class="subtitle">
            <a href="{{route('brand.show', $product->brand->url)}}" target="_blank">
                {{$product->brand->name}}
            </a>
        </h2>
        <div>
            {{$product->sentence(5)}}
        </div>
    </div>
</section>