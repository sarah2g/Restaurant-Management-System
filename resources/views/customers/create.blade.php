@extends('layouts.app')

@section('title', 'Add Customer')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Add Customer</h1>
            <p class="page-subtitle">Register a new customer in the system.</p>
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
            <h3>Customer Information</h3>
            <p>Fill in the details to register a new customer.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('customers.store') }}" method="POST" data-validate>
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="first_name">First Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="first_name" name="first_name" class="form-input" required placeholder="First name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="last_name">Last Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="last_name" name="last_name" class="form-input" required placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" name="email" class="form-input" required placeholder="customer@example.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Phone</label>
                        <div class="input-wrapper">
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="(555) 000-0000">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="address">Address</label>
                        <div class="input-wrapper">
                            <input type="text" id="address" name="address" class="form-input" placeholder="Street address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="city">City</label>
                        <div class="input-wrapper">
                            <input type="text" id="city" name="city" class="form-input" placeholder="City">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="postal_code">Postal Code</label>
                        <div class="input-wrapper">
                            <input type="text" id="postal_code" name="postal_code" class="form-input" placeholder="Postal code">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="birthdate">Birthdate</label>
                        <div class="input-wrapper">
                            <input type="date" id="birthdate" name="birthdate" class="form-input">
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
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                        </svg>
                        Add Customer
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
