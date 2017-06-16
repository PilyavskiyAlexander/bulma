@if ($paginator->hasPages())
    <ul class="pagination is-large">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled pagination-link"><span>&laquo;</span></li>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-link" rel="prev"><li>&laquo;</li></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled pagination-link"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-link is-current"><span>{{ $page }}</span></li>
                    @else
                        <a href="{{ $url }}"><li class="pagination-link"> {{ $page }}</li></a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-link"><li>&raquo;</li></a>
        @else
            <li class="pagination-link disabled"><span>&raquo;</span></li>
        @endif
    </ul>
@endif
