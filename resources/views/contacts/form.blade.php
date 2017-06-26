<form action="{{route('send_request', ['subdomain' => app()->getLocale()])}}" method="post" enctype="multipart/form-data" >
    {{csrf_field()}}
<div class="columns">
    <div class="column is-6">
        <div class="field">
            <label for="product_name" class="label">{{trans('translates.product_name')}}</label>
            <p class="control">
                <input class="input is-primary" name="product_name" @if(!empty($product->name)) value="{{$product->name}}" @endif
                       type="text" placeholder="{{trans('translates.product_name')}}">
            </p>
        </div>
    </div>
    <div class="column is-6">
        <div class="columns">
            <div class="is-7 column">
                <div class="field">
                    <label for="product_name" class="label">{{trans('translates.quantity')}}</label>
                    <p class="control">
                        <input class="input is-primary" type="number" name="quantity" value="1"
                               placeholder="{{trans('translates.quantity')}}" style="color: #000 !important;">
                    </p>
                </div>
            </div>
            <div class="is-5 column">
                <div class="field">
                    <label class="label">{{trans('translates.unit_type')}}</label>
                    <p class="control">
                                <span class="select is-primary">
                                  <select name="unit_type">
                                      @foreach($unit_types as $unit)
                                          <option value="{{$unit->id}}">{{trans('translates.'.$unit->name)}}</option>
                                      @endforeach
                                  </select>
                                </span>
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="columns">
    <div class="column is-6">
        <div class="field">
            <label class="label">{{trans('translates.email')}}</label>
            <p class="control">
                <input class="input is-primary" type="email" name="email" required
                       placeholder="{{trans('translates.email')}}">
            </p>
        </div>
    </div>
    <div class="column is-6">
        <div class="field">
            <label class="label">{{trans('translates.phone')}}</label>
            <p class="control">
                <input class="input is-primary" type="tel" name="phone"
                       placeholder="{{trans('translates.phone')}}">
            </p>
        </div>
    </div>
</div>


<div class="columns">
    <div class="column">
        <div class="field">
            <label class="label">{{trans('translates.comment')}}</label>
            <p class="control">
                <textarea class="textarea is-primary" name="comment"
                          placeholder="{{trans('translates.comment')}}"></textarea>
            </p>
        </div>
    </div>
</div>


<div class="columns" style="margin-bottom: 40px;">
    <div class="column" style="margin-bottom: 40px;">
        <div class="field">
            <label class="label">{{trans('translates.you_can_upload_file')}}</label>
            <p class="control upload-file">
                <label>
                    <input id="attach-project-file" class="attach-project-file" type="file" style="visibility: hidden;" name="file">
                    <i id="remove-project-file" class="close remove-project-file">x</i>
                    <div class="filename has-text-centered attached-project-file" id="attached-project-file">{{trans('translates.click_file')}}</div>
                </label>
            </p>
        </div>
    </div>
</div>
<div class="columns">
    <div class="column">
        <button type="submit" class="button is-primary is-fullwidth">{{trans('translates.send')}}</button>
    </div>
</div>
</form>