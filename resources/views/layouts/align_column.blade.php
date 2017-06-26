@if ($loop->iteration > 4)
    @if ($loop->last)
        @if($loop->iteration % 4 == 1)
            <div class="column is-9"></div>
        @elseif($loop->iteration % 4 == 2)
            <div class="column is-half"></div>
        @elseif($loop->iteration % 4 == 3)
            <div class="column"></div>
        @endif
    @endif
@endif