@extends('layouts.app')

@section('title', 'Inventory Reports')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Inventory Reports</h1>
            <p class="page-subtitle">Track inventory usage, waste, and stock levels.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-outline">
                <svg viewBox="0 0 24 24">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="7 10 12 15 17 10"/>
                    <line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
                Export Report
            </button>
        </div>
    </div>

    <div class="stats-grid" style="margin-bottom: 24px;">
        <div class="stat-card">
            <div class="stat-icon inventory" style="background: linear-gradient(135deg, #6c5ce7, #a29bfe);">
                <svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Total Products</div>
                <div class="stat-value" style="font-size: 1.4rem;">45</div>
                <div class="stat-change" style="color: var(--text-secondary);">Across 6 categories</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon revenue" style="background: linear-gradient(135deg, var(--success), #3dd5c0);">
                <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">In Stock</div>
                <div class="stat-value" style="font-size: 1.4rem;">32</div>
                <div class="stat-change" style="color: var(--success);">71% of inventory</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon" style="background: linear-gradient(135deg, var(--warning), #ffbc80);">
                <svg viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Low Stock</div>
                <div class="stat-value" style="font-size: 1.4rem;">8</div>
                <div class="stat-change" style="color: #b8860b;">Needs reordering</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon" style="background: linear-gradient(135deg, var(--danger), #ff6b6b);">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Critical Stock</div>
                <div class="stat-value" style="font-size: 1.4rem;">5</div>
                <div class="stat-change" style="color: var(--danger);">Immediate action needed</div>
            </div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <div class="dashboard-card-header">
                <h3>Stock Level Distribution</h3>
            </div>
            <div class="dashboard-card-body">
                <div class="chart-placeholder">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 0 1 10 10"/>
                    </svg>
                    <p>Stock level distribution chart</p>
                    <span style="font-size: 0.8rem;">Integrated with your preferred charting library</span>
                </div>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="dashboard-card-header">
                <h3>Monthly Usage</h3>
            </div>
            <div class="dashboard-card-body">
                <div class="chart-placeholder">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                    <p>Monthly usage chart</p>
                    <span style="font-size: 0.8rem;">Integrated with your preferred charting library</span>
                </div>
            </div>
        </div>
    </div>

    <div class="table-container">
        <div class="table-header">
            <h3>Low Stock Alerts</h3>
        </div>
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Current Stock</th>
                        <th>Min Stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Fresh Salmon</strong></td>
                        <td>Meat & Seafood</td>
                        <td style="color: var(--danger); font-weight: 600;">3 kg</td>
                        <td>10 kg</td>
                        <td><span class="status-badge cancelled"><span class="dot"></span>Critical</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Heavy Cream</strong></td>
                        <td>Dairy</td>
                        <td style="color: var(--danger); font-weight: 600;">2 L</td>
                        <td>5 L</td>
                        <td><span class="status-badge cancelled"><span class="dot"></span>Critical</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Olive Oil</strong></td>
                        <td>Dry Goods</td>
                        <td style="color: #b8860b; font-weight: 600;">12 bottles</td>
                        <td>15 bottles</td>
                        <td><span class="status-badge pending"><span class="dot"></span>Low Stock</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Parmesan Cheese</strong></td>
                        <td>Dairy</td>
                        <td style="color: #b8860b; font-weight: 600;">5 kg</td>
                        <td>8 kg</td>
                        <td><span class="status-badge pending"><span class="dot"></span>Low Stock</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
