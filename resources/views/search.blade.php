<section id="search">
    <div class="level-item has-text-centered search-block">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{asset('images/search-background.png')}}" alt="..." style="min-width: 1500px !important;">
                    <div class="carousel-caption">
                        <div class="carousel-body">
                            <form action="{{route('search', ['subdomain' => session('lang')])}}" method="get">
                                <div class="field has-addons">
                                    <p class="control is-expanded">
                                        <input class="input is-primary is-large" name="search" type="search" placeholder="{{trans('translates.what_do_you_search')}}">
                                    </p>
                                    <p class="control">
                                        <button type="submit" class="button is-primary is-large">
                                            {{trans('translates.search')}}
                                        </button>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div>
                            {{trans('translates.about_index')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>