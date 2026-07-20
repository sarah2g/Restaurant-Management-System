@extends('layouts.app')

@section('title', 'Orders')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Orders</h1>
            <p class="page-subtitle">Track and manage all incoming orders.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                New Order
            </button>
        </div>
    </div>

    <div class="table-container">
        <div class="table-header">
            <h3>All Orders</h3>
            <div class="table-toolbar">
                <input type="text" class="search-input" placeholder="Search orders..." data-search="#orders-table">
                <select class="filter-select" data-filter="#orders-table">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="preparing">Preparing</option>
                    <option value="ready">Ready</option>
                    <option value="delivered">Delivered</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>
        <div class="table-wrapper">
            <table class="table" id="orders-table" data-sortable>
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Customer</th>
                        <th>Table</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-search-item="1024" data-filter-item="preparing">
                        <td><strong>#1024</strong></td>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">JD</div>
                                <div>
                                    <div class="customer-name">John Doe</div>
                                    <div class="customer-email">john@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Table 5</td>
                        <td>3 items</td>
                        <td class="amount">$64.50</td>
                        <td><span class="status-badge preparing"><span class="dot"></span><span class="status-text">Preparing</span></span></td>
                        <td>2 min ago</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </button>
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="1023" data-filter-item="ready">
                        <td><strong>#1023</strong></td>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">EM</div>
                                <div>
                                    <div class="customer-name">Emily Martinez</div>
                                    <div class="customer-email">emily@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Table 8</td>
                        <td>2 items</td>
                        <td class="amount">$42.00</td>
                        <td><span class="status-badge ready"><span class="dot"></span><span class="status-text">Ready</span></span></td>
                        <td>8 min ago</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </button>
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="1022" data-filter-item="pending">
                        <td><strong>#1022</strong></td>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">MK</div>
                                <div>
                                    <div class="customer-name">Michael Kim</div>
                                    <div class="customer-email">michael@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Table 3</td>
                        <td>4 items</td>
                        <td class="amount">$89.20</td>
                        <td><span class="status-badge pending"><span class="dot"></span><span class="status-text">Pending</span></span></td>
                        <td>15 min ago</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </button>
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="1021" data-filter-item="delivered">
                        <td><strong>#1021</strong></td>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">SL</div>
                                <div>
                                    <div class="customer-name">Sophia Lee</div>
                                    <div class="customer-email">sophia@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Table 2</td>
                        <td>1 item</td>
                        <td class="amount">$18.50</td>
                        <td><span class="status-badge delivered"><span class="dot"></span><span class="status-text">Delivered</span></span></td>
                        <td>25 min ago</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="1020" data-filter-item="cancelled">
                        <td><strong>#1020</strong></td>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">DW</div>
                                <div>
                                    <div class="customer-name">David Wilson</div>
                                    <div class="customer-email">david@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Table 7</td>
                        <td>5 items</td>
                        <td class="amount">$112.30</td>
                        <td><span class="status-badge cancelled"><span class="dot"></span><span class="status-text">Cancelled</span></span></td>
                        <td>1 hour ago</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="1019" data-filter-item="delivered">
                        <td><strong>#1019</strong></td>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">AT</div>
                                <div>
                                    <div class="customer-name">Alice Thompson</div>
                                    <div class="customer-email">alice@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Table 1</td>
                        <td>3 items</td>
                        <td class="amount">$55.00</td>
                        <td><span class="status-badge delivered"><span class="dot"></span><span class="status-text">Delivered</span></span></td>
                        <td>1.5 hours ago</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="1018" data-filter-item="preparing">
                        <td><strong>#1018</strong></td>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">RJ</div>
                                <div>
                                    <div class="customer-name">Robert Johnson</div>
                                    <div class="customer-email">robert@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Table 4</td>
                        <td>2 items</td>
                        <td class="amount">$36.00</td>
                        <td><span class="status-badge preparing"><span class="dot"></span><span class="status-text">Preparing</span></span></td>
                        <td>20 min ago</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </button>
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0;">
        <div style="font-size: 0.85rem; color: var(--text-secondary);">
            Showing 7 of 156 entries
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
