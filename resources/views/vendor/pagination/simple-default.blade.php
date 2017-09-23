<!-- @if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>@lang('pagination.previous')</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="disabled"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif -->

@if ($paginator->hasPages())


    <nav class="pagination is-centered">
        {{--Previous Page Link --}}
        {{--@if ($paginator->onFirstPage())--}}
            {{--<a class="pagination-previous" disabled>上一页</a>--}}
        {{--@else--}}
            {{--<a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous">上一页</a>--}}
        {{--@endif--}}

        {{--Next Page Link --}}
        {{--@if ($paginator->hasMorePages())--}}
            {{--<a href="{{ $paginator->nextPageUrl() }}" class="pagination-next" >下一页</a>--}}
        {{--@else--}}
            {{--<a class="pagination-next" disabled>下一页</a>--}}
        {{--@endif--}}

        @foreach ($elements as $element)

            <ul class="pagination-list">

                {{--"Three Dots" Separator--}}
                @if (is_string($element))
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                @endif

                {{--Array Of Links--}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="pagination-link is-current">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" class="pagination-link">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            </ul>
        @endforeach
    </nav>

@endif
