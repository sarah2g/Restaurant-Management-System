@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Customers</h1>
            <p class="page-subtitle">View and manage your restaurant's customers.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                Add Customer
            </button>
        </div>
    </div>

    <div class="customer-grid">
        <div class="customer-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=John+Doe&background=1D3557&color=fff" alt="John Doe">
            </div>
            <h4>John Doe</h4>
            <div class="info">john@example.com</div>
            <div class="info" style="margin-bottom: 8px;">(555) 123-4567</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <strong style="color: var(--secondary);">24</strong> orders
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="customer-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Emily+Martinez&background=E63946&color=fff" alt="Emily Martinez">
            </div>
            <h4>Emily Martinez</h4>
            <div class="info">emily@example.com</div>
            <div class="info" style="margin-bottom: 8px;">(555) 234-5678</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <strong style="color: var(--secondary);">18</strong> orders
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="customer-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Michael+Kim&background=2A9D8F&color=fff" alt="Michael Kim">
            </div>
            <h4>Michael Kim</h4>
            <div class="info">michael@example.com</div>
            <div class="info" style="margin-bottom: 8px;">(555) 345-6789</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <strong style="color: var(--secondary);">31</strong> orders
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="customer-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Sophia+Lee&background=F4A261&color=fff" alt="Sophia Lee">
            </div>
            <h4>Sophia Lee</h4>
            <div class="info">sophia@example.com</div>
            <div class="info" style="margin-bottom: 8px;">(555) 456-7890</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <strong style="color: var(--secondary);">15</strong> orders
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="customer-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=David+Wilson&background=6c5ce7&color=fff" alt="David Wilson">
            </div>
            <h4>David Wilson</h4>
            <div class="info">david@example.com</div>
            <div class="info" style="margin-bottom: 8px;">(555) 567-8901</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <strong style="color: var(--secondary);">8</strong> orders
            </div>
            <span class="badge badge-inactive">Inactive</span>
        </div>

        <div class="customer-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Alice+Thompson&background=e17055&color=fff" alt="Alice Thompson">
            </div>
            <h4>Alice Thompson</h4>
            <div class="info">alice@example.com</div>
            <div class="info" style="margin-bottom: 8px;">(555) 678-9012</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <strong style="color: var(--secondary);">42</strong> orders
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="customer-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Robert+Chen&background=00b894&color=fff" alt="Robert Chen">
            </div>
            <h4>Robert Chen</h4>
            <div class="info">robert@example.com</div>
            <div class="info" style="margin-bottom: 8px;">(555) 789-0123</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <strong style="color: var(--secondary);">12</strong> orders
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="customer-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Jessica+Park&background=fd79a8&color=fff" alt="Jessica Park">
            </div>
            <h4>Jessica Park</h4>
            <div class="info">jessica@example.com</div>
            <div class="info" style="margin-bottom: 8px;">(555) 890-1234</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <strong style="color: var(--secondary);">6</strong> orders
            </div>
            <span class="badge badge-inactive">Inactive</span>
        </div>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; margin-top: 8px;">
        <div style="font-size: 0.85rem; color: var(--text-secondary);">
            Showing 8 of 89 customers
        </div>
        <div style="display: flex; align-items: center; gap: 4px;">
            <button class="btn btn-sm btn-ghost" disabled>
                <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="15 18 9 12 15 6"/></svg>
                Previous
            </button>
            <button class="btn btn-sm btn-primary">1</button>
            <button class="btn btn-sm btn-ghost">2</button>
            <button class="btn btn-sm btn-ghost">3</button>
            <button class="btn btn-sm btn-ghost">
                Next
                <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="9 18 15 12 9 6"/></svg>
            </button>
        </div>
    </div>
@endsection
