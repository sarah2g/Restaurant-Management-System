@extends('layouts.app')

@section('title', 'Create Order')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">New Order</h1>
            <p class="page-subtitle">Create a new order for a customer.</p>
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

    <div class="content-grid grid-2" style="grid-template-columns: 1.5fr 1fr;">
        <div class="form-card">
            <div class="form-header">
                <h3>Order Details</h3>
                <p>Select customer, table, and items for the order.</p>
            </div>
            <div class="form-body">
                <form action="{{ route('orders.store') }}" method="POST" data-validate>
                    @csrf
                    <div class="form-section">
                        <div class="form-section-title">Customer Information</div>
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label" for="customer">Customer</label>
                                <div class="input-wrapper">
                                    <select id="customer" name="customer_id" class="form-select" required>
                                        <option value="">Select Customer</option>
                                        <option value="1">John Doe</option>
                                        <option value="2">Emily Martinez</option>
                                        <option value="3">Michael Kim</option>
                                        <option value="4">Sophia Lee</option>
                                        <option value="5">David Wilson</option>
                                        <option value="6">Alice Thompson</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="table">Table Number</label>
                                <div class="input-wrapper">
                                    <select id="table" name="table_id" class="form-select" required>
                                        <option value="">Select Table</option>
                                        <option value="1">Table 1 (2 seats)</option>
                                        <option value="2">Table 2 (2 seats)</option>
                                        <option value="3">Table 3 (4 seats)</option>
                                        <option value="4">Table 4 (4 seats)</option>
                                        <option value="5">Table 5 (6 seats)</option>
                                        <option value="6">Table 6 (6 seats)</option>
                                        <option value="7">Table 7 (8 seats)</option>
                                        <option value="8">Table 8 (8 seats)</option>
                                        <option value="9">Table 9 (4 seats)</option>
                                        <option value="10">Table 10 (6 seats)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="form-section-title">Order Items</div>
                        <div style="display: grid; gap: 12px; margin-bottom: 12px;">
                            <div class="form-grid">
                                <div class="form-group">
                                    <label class="form-label">Item</label>
                                    <select class="form-select">
                                        <option>Select item...</option>
                                        <option>Grilled Salmon Bowl - $24.50</option>
                                        <option>Truffle Mushroom Pasta - $19.50</option>
                                        <option>Classic Caesar Salad - $14.00</option>
                                        <option>Wood-Fired Margherita - $16.50</option>
                                        <option>Chocolate Lava Cake - $11.00</option>
                                        <option>Spicy Tuna Tartare - $17.00</option>
                                        <option>Berry Smoothie - $7.50</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Qty</label>
                                    <input type="number" class="form-input" value="1" min="1">
                                </div>
                            </div>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label class="form-label">Item</label>
                                    <select class="form-select">
                                        <option>Select item...</option>
                                        <option>Grilled Salmon Bowl - $24.50</option>
                                        <option>Truffle Mushroom Pasta - $19.50</option>
                                        <option>Classic Caesar Salad - $14.00</option>
                                        <option>Wood-Fired Margherita - $16.50</option>
                                        <option>Chocolate Lava Cake - $11.00</option>
                                        <option>Spicy Tuna Tartare - $17.00</option>
                                        <option>Berry Smoothie - $7.50</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Qty</label>
                                    <input type="number" class="form-input" value="1" min="1">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline">
                            <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;">
                                <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Add Another Item
                        </button>
                    </div>

                    <div class="form-section">
                        <div class="form-section-title">Order Notes</div>
                        <div class="form-group">
                            <textarea class="form-textarea" rows="2" placeholder="Any special instructions or notes..."></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-ghost" onclick="window.location.href='#'">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <svg viewBox="0 0 24 24">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                                <line x1="3" y1="6" x2="21" y2="6"/>
                                <path d="M16 10a4 4 0 0 1-8 0"/>
                            </svg>
                            Create Order
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card" style="height: fit-content; position: sticky; top: calc(var(--navbar-height) + 30px);">
            <div class="card-header">
                <h3>Order Summary</h3>
            </div>
            <div class="card-body">
                <div style="display: grid; gap: 12px;">
                    <div style="display: flex; justify-content: space-between; padding-bottom: 8px; border-bottom: 1px solid var(--border); font-size: 0.85rem; color: var(--text-secondary);">
                        <span>Item</span>
                        <span>Qty</span>
                        <span>Price</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                        <span>Grilled Salmon Bowl</span>
                        <span>1</span>
                        <span class="amount">$24.50</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                        <span>Berry Smoothie</span>
                        <span>1</span>
                        <span class="amount">$7.50</span>
                    </div>
                    <div style="padding-top: 12px; border-top: 2px solid var(--secondary); display: flex; justify-content: space-between; font-weight: 700; font-size: 1.1rem;">
                        <span>Total</span>
                        <span class="amount" style="color: var(--primary);">$32.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
