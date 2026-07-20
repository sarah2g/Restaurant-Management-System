<div class="table-container {{ $class ?? '' }}">
    @if(isset($header))
        <div class="table-header">
            {{ $header }}
        </div>
    @endif

    <div class="table-wrapper">
        <table class="table" data-sortable {{ $attributes ?? '' }}>
            @if(isset($columns))
                <thead>
                    <tr>
                        @foreach($columns as $column)
                            <th>
                                <div class="th-content">
                                    {{ $column }}
                                    <svg viewBox="0 0 24 24">
                                        <line x1="12" y1="5" x2="12" y2="19"/>
                                        <polyline points="9 8 12 5 15 8"/>
                                        <polyline points="9 16 12 19 15 16"/>
                                    </svg>
                                </div>
                            </th>
                        @endforeach
                    </tr>
                </thead>
            @endif

            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>

    @if(isset($pagination))
        <div class="pagination-wrapper" data-pagination="{{ $pagination['table'] ?? '' }}" data-per-page="{{ $pagination['perPage'] ?? 10 }}">
        </div>
    @endif
</div>

<style>
    .pagination-wrapper {
        padding: 16px 24px;
        border-top: 1px solid var(--border);
    }

    .pagination {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
    }

    .pagination-info {
        font-size: 0.85rem;
        color: var(--text-secondary);
    }

    .pagination-buttons {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .pagination-buttons .btn:disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }
</style>
