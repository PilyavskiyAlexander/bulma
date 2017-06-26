<div class="box">
    <article class="media">
        <div class="media-left">
            <figure class="image is-64x64">
                <img src="{{$product->slime()}}" alt="{{$product->name}}">
            </figure>
        </div>
        <div class="media-content">
            <div class="content">
                <p>
                    <a href="{{route('product.show', ['subdomain' => app()->getLocale(), 'url' => $product->url])}}" style="font-size: 18px;">
                        <strong>{{$product->name}}</strong> <small>{{$product->brand->name}}</small>
                    </a>
                    <br>
                    <small style="font-size: 14px;">
                        {{$product->sentence(3)}}
                    </small>
                </p>
            </div>
        </div>
    </article>
</div>