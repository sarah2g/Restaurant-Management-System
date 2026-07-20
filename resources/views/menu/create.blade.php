@extends('layouts.app')

@section('title', 'Create Menu Item')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Create Menu Item</h1>
            <p class="page-subtitle">Add a new dish to your restaurant menu.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to Menu
            </button>
        </div>
    </div>

    <div class="form-card">
        <div class="form-header">
            <h3>Item Details</h3>
            <p>Enter the details for the new menu item.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data" data-validate>
                @csrf
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label class="form-label" for="name">Item Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="name" name="name" class="form-input" required placeholder="e.g. Grilled Salmon Bowl">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="description">Description</label>
                        <div class="input-wrapper">
                            <textarea id="description" name="description" class="form-textarea" rows="3" placeholder="Describe the dish..."></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="category">Category</label>
                        <div class="input-wrapper">
                            <select id="category" name="category_id" class="form-select" required>
                                <option value="">Select Category</option>
                                <option value="1">Appetizers</option>
                                <option value="2">Main Courses</option>
                                <option value="3">Pasta</option>
                                <option value="4">Salads</option>
                                <option value="5">Desserts</option>
                                <option value="6">Beverages</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="price">Price ($)</label>
                        <div class="input-wrapper">
                            <input type="number" id="price" name="price" class="form-input" required step="0.01" min="0" placeholder="0.00">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status">Status</label>
                        <div class="input-wrapper">
                            <select id="status" name="is_available" class="form-select">
                                <option value="1">Available</option>
                                <option value="0">Unavailable</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="image">Image</label>
                        <div class="input-wrapper">
                            <input type="file" id="image" name="image" class="form-input" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="ingredients">Ingredients</label>
                        <div class="input-wrapper">
                            <textarea id="ingredients" name="ingredients" class="form-textarea" rows="2" placeholder="List key ingredients..."></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="allergens">Allergens</label>
                        <div class="input-wrapper">
                            <input type="text" id="allergens" name="allergens" class="form-input" placeholder="e.g. Gluten, Dairy, Nuts">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="calories">Calories</label>
                        <div class="input-wrapper">
                            <input type="number" id="calories" name="calories" class="form-input" min="0" placeholder="e.g. 450">
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
                        Create Menu Item
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
