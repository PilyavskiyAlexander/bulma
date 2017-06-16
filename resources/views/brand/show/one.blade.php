<section class="columns" style="margin: 40px;">
    <div class="column is-4 is-offset-1">
        <figure class="image">
            <img src="{{asset($brand->big())}}" class="main-image">
        </figure>
        @if(!empty($brand->images))
            @foreach($brand->images as $image)
                <img src="{{asset($image->image)}}" class="image is-64x64 make-main-image">
            @endforeach
        @endif
    </div>
    <div class="column is-6">
        <h1 class="title"><a>{{$brand->name}}</a></h1>
        <div>
            {{$brand->sentence(5)}}
        </div>
    </div>
</section>