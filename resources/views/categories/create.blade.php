@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Create Category</h1>
            <p class="page-subtitle">Add a new menu category to organize your dishes.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to Categories
            </button>
        </div>
    </div>

    <div class="form-card">
        <div class="form-header">
            <h3>Category Information</h3>
            <p>Fill in the details for the new category.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('categories.store') }}" method="POST" data-validate>
                @csrf
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label class="form-label" for="name">Category Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="name" name="name" class="form-input" required placeholder="e.g. Appetizers, Main Courses">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="description">Description</label>
                        <div class="input-wrapper">
                            <textarea id="description" name="description" class="form-textarea" placeholder="Describe this category..." rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status">Status</label>
                        <div class="input-wrapper">
                            <select id="status" name="status" class="form-select">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="display_order">Display Order</label>
                        <div class="input-wrapper">
                            <input type="number" id="display_order" name="display_order" class="form-input" value="0" min="0">
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
                        Create Category
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
