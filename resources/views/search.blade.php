<section id="search">
    <div class="level-item has-text-centered search-block">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{asset('images/search-background.png')}}" alt="..." style="min-width: 1500px !important;">
                    <div class="carousel-caption">
                        <div class="carousel-body">
                            <div class="field has-addons">
                                <p class="control is-expanded">
                                    <input class="input is-primary is-large" type="search" placeholder="{{trans('translates.what_do_you_search')}}">
                                </p>
                                <p class="control">
                                    <a class="button is-primary is-large">
                                        {{trans('translates.search')}}
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi dicta dolore facilis, impedit incidunt modi nisi, odio praesentium provident reiciendis rerum sapiente sequi soluta sunt voluptate voluptatem. Ex, nam!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--@push('scripts')--}}
    {{--<script>--}}

    {{--</script>--}}
{{--@endpush--}}