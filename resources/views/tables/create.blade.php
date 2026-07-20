@extends('layouts.app')

@section('title', 'Create Table')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Add Table</h1>
            <p class="page-subtitle">Add a new table to your restaurant floor plan.</p>
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
            <h3>Table Information</h3>
            <p>Enter the details for the new table.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('tables.store') }}" method="POST" data-validate>
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="number">Table Number</label>
                        <div class="input-wrapper">
                            <input type="number" id="number" name="number" class="form-input" required min="1" placeholder="11">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="capacity">Capacity (seats)</label>
                        <div class="input-wrapper">
                            <input type="number" id="capacity" name="capacity" class="form-input" required min="1" max="20" placeholder="4">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="floor">Floor</label>
                        <div class="input-wrapper">
                            <select id="floor" name="floor" class="form-select">
                                <option value="1">Floor 1</option>
                                <option value="2">Floor 2</option>
                                <option value="3">Floor 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="section">Section</label>
                        <div class="input-wrapper">
                            <select id="section" name="section" class="form-select">
                                <option value="main">Main Hall</option>
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
                                <option value="available">Available</option>
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
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                        Add Table
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
