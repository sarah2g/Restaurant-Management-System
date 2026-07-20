@extends('layouts.app')

@section('title', 'Edit Table')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Table #01</h1>
            <p class="page-subtitle">Update the table details.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to Tables
            </button>
        </div>
    </div>

    <div class="form-card">
        <div class="form-header">
            <h3>Edit Table #01</h3>
            <p>Modify the table information below.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('tables.update', 1) }}" method="POST" data-validate>
                @csrf
                @method('PUT')
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="number">Table Number</label>
                        <div class="input-wrapper">
                            <input type="number" id="number" name="number" class="form-input" value="1" required min="1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="capacity">Capacity (seats)</label>
                        <div class="input-wrapper">
                            <input type="number" id="capacity" name="capacity" class="form-input" value="2" required min="1" max="20">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="floor">Floor</label>
                        <div class="input-wrapper">
                            <select id="floor" name="floor" class="form-select">
                                <option value="1" selected>Floor 1</option>
                                <option value="2">Floor 2</option>
                                <option value="3">Floor 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="section">Section</label>
                        <div class="input-wrapper">
                            <select id="section" name="section" class="form-select">
                                <option value="main" selected>Main Hall</option>
                                <option value="window">Window Side</option>
                                <option value="patio">Patio</option>
                                <option value="private">Private Room</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status">Status</label>
                        <div class="input-wrapper">
                            <select id="status" name="status" class="form-select">
                                <option value="available" selected>Available</option>
                                <option value="reserved">Reserved</option>
                                <option value="occupied">Occupied</option>
                                <option value="maintenance">Maintenance</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="display: flex; align-items: flex-end;">
                        <label class="form-checkbox">
                            <input type="checkbox" name="is_smoking" value="1">
                            Smoking Allowed
                        </label>
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
                        Update Table
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
