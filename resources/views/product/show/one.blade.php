<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active"  id="about_tab">
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
            <div class="column is-6" style="position: relative;">
                <h1 class="title"><a>{{$product->name}}</a></h1>
                <h2 class="subtitle">
                    <a href="{{route('brand.show', ['subdomain' => app()->getLocale(), 'url' => $product->brand->url])}}" target="_blank">
                        {{trans('translates.brand')}}: {{$product->brand->name}}
                    </a>
                </h2>
                <div>
                    {{$product->sentence(5)}}
                </div>
                <div>
                    <a data-toggle="tab" href="#send_request_tab" class="button is-primary is-outlined" style="float: right; position: absolute; bottom: 10px; right: 20px;">
                        {{trans('translates.send_request')}}
                    </a>
                </div>
            </div>
        </section>
    </div>
        <div role="tabpanel" class="tab-pane fade" id="send_request_tab" >
            <section class="columns" style="margin: 40px;"  >
                <div class="column is-1 is-offset-1">
                    <a data-toggle="tab" href="#about_tab" class="button is-primary is-outlined">
                        <span class="glyphicon glyphicon-menu-left"></span>
                         Back
                    </a>
                </div>
                <div class="column is-8 ">
                    @include('contacts.form')
                </div>
            </section>
        </div>
    </div>
