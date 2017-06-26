<div class="box">
    <article class="media">
        <div class="media-left">
            <figure class="image is-64x64">
                <img src="{{$brand->slime()}}" alt="{{$brand->name}}">
            </figure>
        </div>
        <div class="media-content">
            <div class="content">
                <p>
                    <a href="{{route('brand.show', ['subdomain' => app()->getLocale(), 'url' => $brand->url])}}" style="font-size: 18px;">
                        <strong>{{$brand->name}}</strong>
                    </a>
                    <br>
                    <small style="font-size: 14px;">
                        {{$brand->sentence(3)}}
                    </small>
                </p>
            </div>
        </div>
    </article>
</div>