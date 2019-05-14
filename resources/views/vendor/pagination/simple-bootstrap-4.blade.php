<!--/*@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">@lang('pagination.previous')</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif */-->



@if ($paginator->hasPages())

    @if ($paginator->onFirstPage())
        <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Anterior</a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-white"><i class="ti-arrow-left fs-9 mr-4"></i> Anterior</a>

    @endif

    @if ($paginator->hasMorePages())
     
        <a class="btn btn-white" href="{{ $paginator->nextPageUrl() }}">Próxima <i class="ti-arrow-right fs-9 ml-4"></i></a>

    @else

    <a class="btn btn-white disabled" href="#">Próxima <i class="ti-arrow-right fs-9 ml-4"></i></a>
    @endif



    <nav class="flexbox mt-30">
           
            
    </nav>
@endif
