@extends('layouts.app')

@section('title', 'Inventory')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Inventory</h1>
            <p class="page-subtitle">Track and manage your restaurant's stock and supplies.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                Add Product
            </button>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 20px;">
        <div class="inventory-card">
            <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: var(--success-light); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg style="width: 22px; height: 22px; stroke: var(--success);" viewBox="0 0 24 24" fill="none" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h4>Tomato Sauce</h4>
            <div class="stock-info">
                <div class="stock-label">
                    <span>Stock: 85 cans</span>
                    <span>Min: 30 cans</span>
                </div>
                <div class="stock-bar">
                    <div class="fill high" style="width: 85%;"></div>
                </div>
            </div>
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; background: var(--success-light); color: var(--success); font-weight: 500;">
                In Stock
            </span>
        </div>

        <div class="inventory-card">
            <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: var(--warning-light); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg style="width: 22px; height: 22px; stroke: var(--warning);" viewBox="0 0 24 24" fill="none" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h4>Olive Oil</h4>
            <div class="stock-info">
                <div class="stock-label">
                    <span>Stock: 12 bottles</span>
                    <span>Min: 15 bottles</span>
                </div>
                <div class="stock-bar">
                    <div class="fill medium" style="width: 40%;"></div>
                </div>
            </div>
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; background: var(--warning-light); color: #b8860b; font-weight: 500;">
                Low Stock
            </span>
        </div>

        <div class="inventory-card">
            <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: var(--danger-light); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg style="width: 22px; height: 22px; stroke: var(--danger);" viewBox="0 0 24 24" fill="none" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h4>Fresh Salmon</h4>
            <div class="stock-info">
                <div class="stock-label">
                    <span>Stock: 3 kg</span>
                    <span>Min: 10 kg</span>
                </div>
                <div class="stock-bar">
                    <div class="fill low" style="width: 15%;"></div>
                </div>
            </div>
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; background: var(--danger-light); color: var(--danger); font-weight: 500;">
                Critical
            </span>
        </div>

        <div class="inventory-card">
            <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: var(--success-light); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg style="width: 22px; height: 22px; stroke: var(--success);" viewBox="0 0 24 24" fill="none" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h4>All-Purpose Flour</h4>
            <div class="stock-info">
                <div class="stock-label">
                    <span>Stock: 50 kg</span>
                    <span>Min: 20 kg</span>
                </div>
                <div class="stock-bar">
                    <div class="fill high" style="width: 75%;"></div>
                </div>
            </div>
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; background: var(--success-light); color: var(--success); font-weight: 500;">
                In Stock
            </span>
        </div>

        <div class="inventory-card">
            <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: var(--success-light); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg style="width: 22px; height: 22px; stroke: var(--success);" viewBox="0 0 24 24" fill="none" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h4>Chicken Breast</h4>
            <div class="stock-info">
                <div class="stock-label">
                    <span>Stock: 25 kg</span>
                    <span>Min: 10 kg</span>
                </div>
                <div class="stock-bar">
                    <div class="fill high" style="width: 65%;"></div>
                </div>
            </div>
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; background: var(--success-light); color: var(--success); font-weight: 500;">
                In Stock
            </span>
        </div>

        <div class="inventory-card">
            <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: var(--warning-light); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg style="width: 22px; height: 22px; stroke: var(--warning);" viewBox="0 0 24 24" fill="none" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h4>Parmesan Cheese</h4>
            <div class="stock-info">
                <div class="stock-label">
                    <span>Stock: 5 kg</span>
                    <span>Min: 8 kg</span>
                </div>
                <div class="stock-bar">
                    <div class="fill medium" style="width: 30%;"></div>
                </div>
            </div>
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; background: var(--warning-light); color: #b8860b; font-weight: 500;">
                Low Stock
            </span>
        </div>

        <div class="inventory-card">
            <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: var(--success-light); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg style="width: 22px; height: 22px; stroke: var(--success);" viewBox="0 0 24 24" fill="none" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h4>Mixed Greens</h4>
            <div class="stock-info">
                <div class="stock-label">
                    <span>Stock: 18 kg</span>
                    <span>Min: 10 kg</span>
                </div>
                <div class="stock-bar">
                    <div class="fill high" style="width: 70%;"></div>
                </div>
            </div>
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; background: var(--success-light); color: var(--success); font-weight: 500;">
                In Stock
            </span>
        </div>

        <div class="inventory-card">
            <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: var(--danger-light); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg style="width: 22px; height: 22px; stroke: var(--danger);" viewBox="0 0 24 24" fill="none" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h4>Heavy Cream</h4>
            <div class="stock-info">
                <div class="stock-label">
                    <span>Stock: 2 L</span>
                    <span>Min: 5 L</span>
                </div>
                <div class="stock-bar">
                    <div class="fill low" style="width: 10%;"></div>
                </div>
            </div>
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; background: var(--danger-light); color: var(--danger); font-weight: 500;">
                Critical
            </span>
        </div>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; margin-top: 8px;">
        <div style="font-size: 0.85rem; color: var(--text-secondary);">
            Showing 8 of 45 products
        </div>
        <div style="display: flex; align-items: center; gap: 4px;">
            <button class="btn btn-sm btn-ghost" disabled>
                <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="15 18 9 12 15 6"/></svg>
                Previous
            </button>
            <button class="btn btn-sm btn-primary">1</button>
            <button class="btn btn-sm btn-ghost">2</button>
            <button class="btn btn-sm btn-ghost">3</button>
            <button class="btn btn-sm btn-ghost">4</button>
            <button class="btn btn-sm btn-ghost">
                Next
                <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="9 18 15 12 9 6"/></svg>
            </button>
        </div>
    </div>
@endsection
