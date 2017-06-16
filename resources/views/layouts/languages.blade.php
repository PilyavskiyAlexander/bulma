<div id="languages">
    @foreach($languages as $language)
        <figure class="image is-32x32">
            <a href="{{route('locale.change', $language->locale)}}">
                <img src="{{asset($language->image)}}" alt="{{$language->title}}"
                     title="{{$language->title}}">
            </a>
        </figure>
    @endforeach
</div>