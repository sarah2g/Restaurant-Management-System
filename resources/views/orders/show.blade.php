@extends('layouts.app')

@section('title', 'Order #1024')

@section('content')
    <div class="page-header">
        <div>
            <div class="breadcrumb">
                <a href="#">Dashboard</a>
                <span>/</span>
                <a href="#">Orders</a>
                <span>/</span>
                <span>Order #1024</span>
            </div>
            <h1 class="page-title">Order #1024</h1>
            <p class="page-subtitle">View and manage this order's details.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to Orders
            </button>
        </div>
    </div>

    <div class="content-grid grid-2" style="grid-template-columns: 1fr 1fr;">
        <div class="card">
            <div class="card-header">
                <h3>Order Information</h3>
                <span class="status-badge preparing"><span class="dot"></span>Preparing</span>
            </div>
            <div class="card-body" style="display: grid; gap: 16px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div>
                        <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Order Placed</div>
                        <div style="font-weight: 600;">Today, 2:18 PM</div>
                    </div>
                    <div>
                        <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
                        <div style="font-weight: 600;">Table 5</div>
                    </div>
                    <div>
                        <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Customer</div>
                        <div style="font-weight: 600;">John Doe</div>
                    </div>
                    <div>
                        <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Server</div>
                        <div style="font-weight: 600;">Sarah Johnson</div>
                    </div>
                </div>

                <div style="padding-top: 12px; border-top: 1px solid var(--border);">
                    <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Notes</div>
                    <div style="font-size: 0.9rem;">No onions, extra sauce on the side please.</div>
                </div>

                <div style="padding-top: 12px; border-top: 1px solid var(--border);">
                    <label style="font-size: 0.85rem; font-weight: 500; color: var(--secondary); display: block; margin-bottom: 8px;">Update Status</label>
                    <select class="order-status-select form-select" data-order-id="1024" style="width: 200px;">
                        <option value="pending">Pending</option>
                        <option value="preparing" selected>Preparing</option>
                        <option value="ready">Ready</option>
                        <option value="delivered">Delivered</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Order Items</h3>
                <span style="font-size: 0.85rem; color: var(--text-secondary);">3 items</span>
            </div>
            <div class="card-body" style="padding: 0;">
                <table class="table" style="border: none;">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Grilled Salmon Bowl</td>
                            <td>1</td>
                            <td>$24.50</td>
                            <td class="amount">$24.50</td>
                        </tr>
                        <tr>
                            <td>Truffle Mushroom Pasta</td>
                            <td>1</td>
                            <td>$19.50</td>
                            <td class="amount">$19.50</td>
                        </tr>
                        <tr>
                            <td>Berry Smoothie</td>
                            <td>2</td>
                            <td>$7.50</td>
                            <td class="amount">$15.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" style="font-weight: 600; text-align: right; padding: 14px 20px;">Subtotal</td>
                            <td class="amount" style="padding: 14px 20px;">$59.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="font-weight: 600; text-align: right; padding: 14px 20px;">Tax (8%)</td>
                            <td class="amount" style="padding: 14px 20px;">$4.72</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="font-weight: 700; text-align: right; padding: 14px 20px; border-top: 2px solid var(--secondary); font-size: 1.1rem;">Total</td>
                            <td class="amount" style="padding: 14px 20px; border-top: 2px solid var(--secondary); color: var(--primary); font-size: 1.1rem; font-weight: 700;">$64.50</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
