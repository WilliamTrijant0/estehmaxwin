@if ($paginator->hasPages())
    <nav class="pagination-nav">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>

    @once
    <style>
        .pagination-nav {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .page-item {
            margin: 0 5px;
        }
        
        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            width: 40px;
            background-color: #f6f6f6;
            color: #686a6f;
            border-radius: 50%;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
        }
        
        .page-item.active .page-link {
            background-color: #6cbc94;
            color: #ffffff;
        }
        
        .page-item.disabled .page-link {
            opacity: 0.5;
            pointer-events: none;
        }
        
        .page-link:hover {
            background-color: #6cbc94;
            color: #ffffff;
        }
    </style>
    @endonce
@endif
