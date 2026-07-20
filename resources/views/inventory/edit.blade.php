@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Product</h1>
            <p class="page-subtitle">Update inventory product details for "Tomato Sauce".</p>
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
            <h3>Edit "Tomato Sauce"</h3>
            <p>Modify the product information below.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('inventory.update', 1) }}" method="POST" data-validate>
                @csrf
                @method('PUT')
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="name">Product Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="name" name="name" class="form-input" value="Tomato Sauce" required>
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
                                <option value="dry-goods" selected>Dry Goods</option>
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
                                <option value="cans" selected>Cans</option>
                                <option value="bottles">Bottles</option>
                                <option value="bags">Bags</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="quantity">Current Stock</label>
                        <div class="input-wrapper">
                            <input type="number" id="quantity" name="quantity" class="form-input" value="85" required min="0" step="0.1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="min_stock">Minimum Stock</label>
                        <div class="input-wrapper">
                            <input type="number" id="min_stock" name="min_stock" class="form-input" value="30" required min="0" step="0.1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="price">Unit Price ($)</label>
                        <div class="input-wrapper">
                            <input type="number" id="price" name="price" class="form-input" value="3.50" step="0.01" min="0">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="supplier">Supplier</label>
                        <div class="input-wrapper">
                            <input type="text" id="supplier" name="supplier" class="form-input" value="Gourmet Foods Co.">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="notes">Notes</label>
                        <div class="input-wrapper">
                            <textarea id="notes" name="notes" class="form-textarea" rows="2">Organic San Marzano tomato sauce, 28oz cans.</textarea>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-ghost" onclick="window.location.href='#'">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                            <polyline points="17 21 17 13 7 13 7 21"/>
                            <polyline points="7 3 7 8 15 8"/>
                        </svg>
                        Update Product
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
