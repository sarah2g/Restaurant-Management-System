@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
            <p class="page-subtitle">Welcome back, Sarah! Here's what's happening today.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-outline" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="18" y1="20" x2="18" y2="10"/>
                    <line x1="12" y1="20" x2="12" y2="4"/>
                    <line x1="6" y1="20" x2="6" y2="14"/>
                </svg>
                View Reports
            </button>
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                New Order
            </button>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat-card stagger-1">
            <div class="stat-icon revenue">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="1" x2="12" y2="23"/>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Today's Revenue</div>
                <div class="stat-value" data-count="4860">$0</div>
                <div class="stat-change up">
                    <svg viewBox="0 0 24 24" style="width: 14px; height: 14px;">
                        <polyline points="18 15 12 9 6 15"/>
                    </svg>
                    +12.5% vs yesterday
                </div>
            </div>
        </div>

        <div class="stat-card stagger-2">
            <div class="stat-icon orders">
                <svg viewBox="0 0 24 24">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <path d="M16 10a4 4 0 0 1-8 0"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Total Orders</div>
                <div class="stat-value" data-count="156">0</div>
                <div class="stat-change up">
                    <svg viewBox="0 0 24 24" style="width: 14px; height: 14px;">
                        <polyline points="18 15 12 9 6 15"/>
                    </svg>
                    +8.3% vs yesterday
                </div>
            </div>
        </div>

        <div class="stat-card stagger-3">
            <div class="stat-icon reservations">
                <svg viewBox="0 0 24 24">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Reservations</div>
                <div class="stat-value" data-count="28">0</div>
                <div class="stat-change up">
                    <svg viewBox="0 0 24 24" style="width: 14px; height: 14px;">
                        <polyline points="18 15 12 9 6 15"/>
                    </svg>
                    +5.2% vs yesterday
                </div>
            </div>
        </div>

        <div class="stat-card stagger-4">
            <div class="stat-icon customers">
                <svg viewBox="0 0 24 24">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Active Customers</div>
                <div class="stat-value" data-count="89">0</div>
                <div class="stat-change up">
                    <svg viewBox="0 0 24 24" style="width: 14px; height: 14px;">
                        <polyline points="18 15 12 9 6 15"/>
                    </svg>
                    +3.7% vs yesterday
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card stagger-5">
            <div class="dashboard-card-header">
                <h3>Recent Orders</h3>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="dashboard-card-body" style="padding: 0;">
                <table class="table" style="border: none;">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>#1024</strong></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="avatar-sm">JD</div>
                                    <div>
                                        <div class="customer-name">John Doe</div>
                                        <div class="customer-email">Table 5</div>
                                    </div>
                                </div>
                            </td>
                            <td>3 items</td>
                            <td class="amount">$64.50</td>
                            <td><span class="status-badge preparing"><span class="dot"></span>Preparing</span></td>
                        </tr>
                        <tr>
                            <td><strong>#1023</strong></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="avatar-sm">EM</div>
                                    <div>
                                        <div class="customer-name">Emily Martinez</div>
                                        <div class="customer-email">Table 8</div>
                                    </div>
                                </div>
                            </td>
                            <td>2 items</td>
                            <td class="amount">$42.00</td>
                            <td><span class="status-badge ready"><span class="dot"></span>Ready</span></td>
                        </tr>
                        <tr>
                            <td><strong>#1022</strong></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="avatar-sm">MK</div>
                                    <div>
                                        <div class="customer-name">Michael Kim</div>
                                        <div class="customer-email">Table 3</div>
                                    </div>
                                </div>
                            </td>
                            <td>4 items</td>
                            <td class="amount">$89.20</td>
                            <td><span class="status-badge pending"><span class="dot"></span>Pending</span></td>
                        </tr>
                        <tr>
                            <td><strong>#1021</strong></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="avatar-sm">SL</div>
                                    <div>
                                        <div class="customer-name">Sophia Lee</div>
                                        <div class="customer-email">Table 2</div>
                                    </div>
                                </div>
                            </td>
                            <td>1 item</td>
                            <td class="amount">$18.50</td>
                            <td><span class="status-badge delivered"><span class="dot"></span>Delivered</span></td>
                        </tr>
                        <tr>
                            <td><strong>#1020</strong></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="avatar-sm">DW</div>
                                    <div>
                                        <div class="customer-name">David Wilson</div>
                                        <div class="customer-email">Table 7</div>
                                    </div>
                                </div>
                            </td>
                            <td>5 items</td>
                            <td class="amount">$112.30</td>
                            <td><span class="status-badge cancelled"><span class="dot"></span>Cancelled</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="dashboard-card stagger-6">
            <div class="dashboard-card-header">
                <h3>Latest Reservations</h3>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="dashboard-card-body" style="display: grid; gap: 12px;">
                <div class="reservation-card confirmed" style="margin-bottom: 0;">
                    <div class="reservation-header">
                        <h4>James Anderson</h4>
                        <span class="status-badge confirmed"><span class="dot"></span>Confirmed</span>
                    </div>
                    <div class="reservation-details">
                        <span>
                            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Today, 7:00 PM
                        </span>
                        <span>
                            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            Table 4
                        </span>
                        <span>
                            <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                            4 guests
                        </span>
                    </div>
                </div>

                <div class="reservation-card pending" style="margin-bottom: 0;">
                    <div class="reservation-header">
                        <h4>Maria Garcia</h4>
                        <span class="status-badge pending"><span class="dot"></span>Pending</span>
                    </div>
                    <div class="reservation-details">
                        <span>
                            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Today, 8:30 PM
                        </span>
                        <span>
                            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            Table 6
                        </span>
                        <span>
                            <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                            2 guests
                        </span>
                    </div>
                </div>

                <div class="reservation-card confirmed" style="margin-bottom: 0;">
                    <div class="reservation-header">
                        <h4>Robert Chen</h4>
                        <span class="status-badge confirmed"><span class="dot"></span>Confirmed</span>
                    </div>
                    <div class="reservation-details">
                        <span>
                            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Tomorrow, 6:00 PM
                        </span>
                        <span>
                            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            Table 10
                        </span>
                        <span>
                            <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                            6 guests
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card stagger-7">
            <div class="dashboard-card-header">
                <h3>Sales Overview</h3>
                <span style="font-size: 0.85rem; color: var(--text-secondary);">Last 7 days</span>
            </div>
            <div class="dashboard-card-body">
                <div class="chart-placeholder">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                    <p>Sales chart will be rendered here</p>
                    <span style="font-size: 0.8rem;">Integrated with your preferred charting library</span>
                </div>
            </div>
        </div>

        <div class="dashboard-card stagger-8">
            <div class="dashboard-card-header">
                <h3>Popular Meals</h3>
                <span style="font-size: 0.85rem; color: var(--text-secondary);">This week</span>
            </div>
            <div class="dashboard-card-body">
                <div class="popular-meals">
                    <div class="popular-meal-item">
                        <div class="meal-rank gold">1</div>
                        <div class="meal-img" style="background: linear-gradient(135deg, #E63946, #ff6b6b);"></div>
                        <div class="meal-info">
                            <div class="meal-name">Grilled Salmon Bowl</div>
                            <div class="meal-meta">Main Course</div>
                        </div>
                        <div class="meal-orders">142 ordered</div>
                    </div>
                    <div class="popular-meal-item">
                        <div class="meal-rank silver">2</div>
                        <div class="meal-img" style="background: linear-gradient(135deg, #F4A261, #ffbc80);"></div>
                        <div class="meal-info">
                            <div class="meal-name">Truffle Mushroom Pasta</div>
                            <div class="meal-meta">Main Course</div>
                        </div>
                        <div class="meal-orders">98 ordered</div>
                    </div>
                    <div class="popular-meal-item">
                        <div class="meal-rank bronze">3</div>
                        <div class="meal-img" style="background: linear-gradient(135deg, #2A9D8F, #3dd5c0);"></div>
                        <div class="meal-info">
                            <div class="meal-name">Classic Caesar Salad</div>
                            <div class="meal-meta">Appetizer</div>
                        </div>
                        <div class="meal-orders">85 ordered</div>
                    </div>
                    <div class="popular-meal-item">
                        <div class="meal-rank">4</div>
                        <div class="meal-img" style="background: linear-gradient(135deg, #1D3557, #2d4a7a);"></div>
                        <div class="meal-info">
                            <div class="meal-name">Wood-Fired Margherita</div>
                            <div class="meal-meta">Pizza</div>
                        </div>
                        <div class="meal-orders">72 ordered</div>
                    </div>
                    <div class="popular-meal-item">
                        <div class="meal-rank">5</div>
                        <div class="meal-img" style="background: linear-gradient(135deg, #6c5ce7, #a29bfe);"></div>
                        <div class="meal-info">
                            <div class="meal-name">Chocolate Lava Cake</div>
                            <div class="meal-meta">Dessert</div>
                        </div>
                        <div class="meal-orders">61 ordered</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
