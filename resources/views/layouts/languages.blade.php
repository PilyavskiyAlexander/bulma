<div id="languages">
    @foreach($languages as $language)
            <form action="{{route('locale.change', ['subdomain' => $language->locale, 'language' => $language->locale ])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="route" value="{{request()->path()}}">
                <a class="image is-32x32" type="submit" onclick="$(this).parents('form').submit()">
                       <img src="{{asset($language->image)}}" alt="{{$language->title}}"
                          title="{{$language->title}}">
                </a>
            </form>
    @endforeach
</div>