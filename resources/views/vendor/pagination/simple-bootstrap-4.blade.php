@if ($paginator->hasPages())
    <ul class="pagination" style="margin-top: 20px">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="page-item disabled btn btn-default"><span>上一页</span></a>
        @else
            <a class="page-item btn btn-default" href="{{ $paginator->previousPageUrl() }}" rel="prev">上一页</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="page-item btn btn-default" class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" style="margin-left: 20px">下一页</a>
        @else
            <a class="page-item disabled btn btn-default" style="margin-left: 20px">下一页</a>
        @endif
    </ul>
@endif
