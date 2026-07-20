@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Customer</h1>
            <p class="page-subtitle">Update customer information for John Doe.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to Customers
            </button>
        </div>
    </div>

    <div class="form-card">
        <div class="form-header">
            <h3>Edit "John Doe"</h3>
            <p>Modify the customer information below.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('customers.update', 1) }}" method="POST" data-validate>
                @csrf
                @method('PUT')
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="first_name">First Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="first_name" name="first_name" class="form-input" value="John" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="last_name">Last Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="last_name" name="last_name" class="form-input" value="Doe" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" name="email" class="form-input" value="john@example.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Phone</label>
                        <div class="input-wrapper">
                            <input type="tel" id="phone" name="phone" class="form-input" value="(555) 123-4567">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="address">Address</label>
                        <div class="input-wrapper">
                            <input type="text" id="address" name="address" class="form-input" value="123 Main Street">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="city">City</label>
                        <div class="input-wrapper">
                            <input type="text" id="city" name="city" class="form-input" value="San Francisco">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="postal_code">Postal Code</label>
                        <div class="input-wrapper">
                            <input type="text" id="postal_code" name="postal_code" class="form-input" value="94102">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="birthdate">Birthdate</label>
                        <div class="input-wrapper">
                            <input type="date" id="birthdate" name="birthdate" class="form-input" value="1990-05-15">
                        </div>
                    </div>

                    <div class="form-group" style="display: flex; align-items: flex-end;">
                        <label class="form-checkbox">
                            <input type="checkbox" name="is_vip" value="1">
                            VIP Customer
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
                        Update Customer
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
