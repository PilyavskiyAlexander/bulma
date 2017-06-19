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
                    <a href="{{route('product.show', $product->url)}}">
                        <strong>{{$product->name}}</strong> <small>{{$product->brand->name}}</small>
                    </a>
                    <br>
                    <small style="font-size: 10px;">
                        {{$product->sentence(1)}}
                    </small>
                </p>
            </div>
        </div>
    </article>
</div>