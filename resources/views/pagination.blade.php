@if ($paginator->hasPages())
    <nav class="pgn" data-aos="fade-up">
        <ul>
        @if (!$paginator->onFirstPage())
            <li><a class="pgn__prev" href="{{ $paginator->previousPageUrl() }}"></a></li>
        @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><span class="pgn__num"><span>{{ $element }}</span></span></li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="pgn__num current">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}" class="pgn__num">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @if ($paginator->hasMorePages())
           <li><a class="pgn__next" href="{{ $paginator->nextPageUrl() }}" rel="next"></a></li>
        @endif
        </ul>
    </nav>
@endif
