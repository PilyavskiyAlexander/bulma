<div class="big-brand" style="margin: 40px;">
    <div class="columns">
        <div class="column is-10 is-offset-1">
        <h2 class="title">{{trans('translates.brand')}}</h2>
        </div>
    </div>
    <div class="columns">
        <div class="column is-4 is-offset-1">
            <figure class="image is-4by3">
                <img src="{{$big_brand->big()}}" alt="{{$big_brand->name}}">
            </figure>
        </div>
        <div class="column is-6">
            <h1 class="title"><a href="{{route('brand.show',  ['subdomain' => app()->getLocale(), 'url' => $big_brand->url])}}">{{$big_brand->name}}</a></h1>
            <div>
                {{$big_brand->sentence(5)}}
            </div>
        </div>
    </div>
</div>