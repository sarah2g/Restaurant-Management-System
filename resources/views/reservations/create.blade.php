@extends('layouts.app')

@section('title', 'Create Reservation')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">New Reservation</h1>
            <p class="page-subtitle">Create a new table reservation for a guest.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to Reservations
            </button>
        </div>
    </div>

    <div class="form-card">
        <div class="form-header">
            <h3>Reservation Details</h3>
            <p>Fill in the details to create a new reservation.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('reservations.store') }}" method="POST" data-validate>
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="guest_name">Guest Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="guest_name" name="guest_name" class="form-input" required placeholder="Full name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <div class="input-wrapper">
                            <input type="tel" id="phone" name="phone" class="form-input" required placeholder="(555) 000-0000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" name="email" class="form-input" placeholder="guest@example.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="date">Date</label>
                        <div class="input-wrapper">
                            <input type="date" id="date" name="date" class="form-input" required value="{{ date('Y-m-d') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="time">Time</label>
                        <div class="input-wrapper">
                            <input type="time" id="time" name="time" class="form-input" required value="19:00">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="guests">Number of Guests</label>
                        <div class="input-wrapper">
                            <input type="number" id="guests" name="guests" class="form-input" required min="1" max="20" value="2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="table">Table</label>
                        <div class="input-wrapper">
                            <select id="table" name="table_id" class="form-select">
                                <option value="">Auto Assign</option>
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

                    <div class="form-group">
                        <label class="form-label" for="status">Status</label>
                        <div class="input-wrapper">
                            <select id="status" name="status" class="form-select">
                                <option value="pending">Pending</option>
                                <option value="confirmed">Confirmed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="notes">Special Requests</label>
                        <div class="input-wrapper">
                            <textarea id="notes" name="notes" class="form-textarea" rows="2" placeholder="Any special requests or notes..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-ghost" onclick="window.location.href='#'">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        Create Reservation
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
