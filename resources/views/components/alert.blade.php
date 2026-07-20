@if(session('success'))
    <div class="alert alert-success" style="
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 20px;
        border-radius: var(--radius-sm);
        margin-bottom: 20px;
        background: var(--success-light);
        color: var(--success);
        border: 1px solid rgba(42, 157, 143, 0.2);
        animation: slideDown 0.3s ease;
    ">
        <svg style="width: 20px; height: 20px; flex-shrink: 0; stroke: currentColor; fill: none; stroke-width: 2;" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
            <polyline points="22 4 12 14.01 9 11.01"/>
        </svg>
        <span style="flex: 1; font-size: 0.9rem;">{{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" style="background: none; border: none; cursor: pointer; color: inherit; display: flex;">
            <svg style="width: 16px; height: 16px; stroke: currentColor; fill: none; stroke-width: 2;" viewBox="0 0 24 24">
                <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" style="
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 20px;
        border-radius: var(--radius-sm);
        margin-bottom: 20px;
        background: var(--danger-light);
        color: var(--danger);
        border: 1px solid rgba(230, 57, 70, 0.2);
        animation: slideDown 0.3s ease;
    ">
        <svg style="width: 20px; height: 20px; flex-shrink: 0; stroke: currentColor; fill: none; stroke-width: 2;" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/>
        </svg>
        <span style="flex: 1; font-size: 0.9rem;">{{ session('error') }}</span>
        <button onclick="this.parentElement.remove()" style="background: none; border: none; cursor: pointer; color: inherit; display: flex;">
            <svg style="width: 16px; height: 16px; stroke: currentColor; fill: none; stroke-width: 2;" viewBox="0 0 24 24">
                <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-error" style="
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 20px;
        border-radius: var(--radius-sm);
        margin-bottom: 20px;
        background: var(--danger-light);
        color: var(--danger);
        border: 1px solid rgba(230, 57, 70, 0.2);
        animation: slideDown 0.3s ease;
    ">
        <svg style="width: 20px; height: 20px; flex-shrink: 0; stroke: currentColor; fill: none; stroke-width: 2;" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
        </svg>
        <div style="flex: 1; font-size: 0.9rem;">
            <strong>Please fix the following errors:</strong>
            <ul style="margin-top: 4px; padding-left: 16px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button onclick="this.parentElement.remove()" style="background: none; border: none; cursor: pointer; color: inherit; display: flex;">
            <svg style="width: 16px; height: 16px; stroke: currentColor; fill: none; stroke-width: 2;" viewBox="0 0 24 24">
                <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
@endif
