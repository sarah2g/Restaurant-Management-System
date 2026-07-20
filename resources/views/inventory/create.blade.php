@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Add Product</h1>
            <p class="page-subtitle">Add a new product to your inventory.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to Inventory
            </button>
        </div>
    </div>

    <div class="form-card">
        <div class="form-header">
            <h3>Product Details</h3>
            <p>Enter the details for the new inventory product.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('inventory.store') }}" method="POST" data-validate>
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="name">Product Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="name" name="name" class="form-input" required placeholder="e.g. Tomato Sauce">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="category">Category</label>
                        <div class="input-wrapper">
                            <select id="category" name="category" class="form-select" required>
                                <option value="">Select Category</option>
                                <option value="produce">Produce</option>
                                <option value="meat">Meat & Seafood</option>
                                <option value="dairy">Dairy</option>
                                <option value="dry-goods">Dry Goods</option>
                                <option value="beverages">Beverages</option>
                                <option value="cleaning">Cleaning Supplies</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="unit">Unit</label>
                        <div class="input-wrapper">
                            <select id="unit" name="unit" class="form-select">
                                <option value="kg">Kilograms (kg)</option>
                                <option value="l">Liters (L)</option>
                                <option value="pcs">Pieces (pcs)</option>
                                <option value="cans">Cans</option>
                                <option value="bottles">Bottles</option>
                                <option value="bags">Bags</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="quantity">Current Stock</label>
                        <div class="input-wrapper">
                            <input type="number" id="quantity" name="quantity" class="form-input" required min="0" step="0.1" placeholder="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="min_stock">Minimum Stock</label>
                        <div class="input-wrapper">
                            <input type="number" id="min_stock" name="min_stock" class="form-input" required min="0" step="0.1" placeholder="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="price">Unit Price ($)</label>
                        <div class="input-wrapper">
                            <input type="number" id="price" name="price" class="form-input" step="0.01" min="0" placeholder="0.00">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="supplier">Supplier</label>
                        <div class="input-wrapper">
                            <input type="text" id="supplier" name="supplier" class="form-input" placeholder="Supplier name">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="notes">Notes</label>
                        <div class="input-wrapper">
                            <textarea id="notes" name="notes" class="form-textarea" rows="2" placeholder="Additional notes..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-ghost" onclick="window.location.href='#'">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <svg viewBox="0 0 24 24">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        </svg>
                        Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
