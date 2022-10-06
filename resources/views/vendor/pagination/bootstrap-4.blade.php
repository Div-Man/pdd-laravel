@if ($paginator->hasPages())
   
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
           
                <a href="" class="page-link" aria-hidden="true">&lsaquo;</a>
            
        @else
           
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
               <a href="" class="page-link">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="" class=" active page-link">{{ $page }}</a>
                    @else
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
           
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            
        @else
           
                <a href="" class="page-link" aria-hidden="true">&rsaquo;</a>
            
        @endif
    
@endif
