<div class="pagination-custom" style="
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 24px;
    border-top: 1px solid var(--border);
    background: var(--card);
    border-radius: 0 0 var(--radius) var(--radius);
    flex-wrap: wrap;
    gap: 12px;
">
    <div style="font-size: 0.85rem; color: var(--text-secondary);">
        Showing {{ $from ?? 1 }} to {{ $to ?? 10 }} of {{ $total ?? 0 }} entries
    </div>

    <div style="display: flex; align-items: center; gap: 4px;">
        <button class="btn btn-sm btn-ghost" {{ ($currentPage ?? 1) == 1 ? 'disabled' : '' }} onclick="window.location.href='{{ $previousUrl ?? '#' }}'">
            <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
            Previous
        </button>

        @if(isset($pages))
            @foreach($pages as $page)
                <button class="btn btn-sm {{ $page['active'] ? 'btn-primary' : 'btn-ghost' }}"
                        onclick="window.location.href='{{ $page['url'] ?? '#' }}'">
                    {{ $page['label'] }}
                </button>
            @endforeach
        @endif

        <button class="btn btn-sm btn-ghost" {{ ($currentPage ?? 1) == ($lastPage ?? 1) ? 'disabled' : '' }} onclick="window.location.href='{{ $nextUrl ?? '#' }}'">
            Next
            <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;">
                <polyline points="9 18 15 12 9 6"/>
            </svg>
        </button>
    </div>
</div>
