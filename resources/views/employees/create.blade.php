@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Add Employee</h1>
            <p class="page-subtitle">Hire a new staff member.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to Employees
            </button>
        </div>
    </div>

    <div class="form-card">
        <div class="form-header">
            <h3>Employee Information</h3>
            <p>Fill in the details for the new employee.</p>
        </div>
        <div class="form-body">
            <form action="{{ route('employees.store') }}" method="POST" data-validate>
                @csrf
                <div class="form-section">
                    <div class="form-section-title">Personal Details</div>
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
                                <input type="email" id="email" name="email" class="form-input" required placeholder="employee@restaurantms.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Phone</label>
                            <div class="input-wrapper">
                                <input type="tel" id="phone" name="phone" class="form-input" placeholder="(555) 000-0000">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <div class="form-section-title">Employment Details</div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="role">Role</label>
                            <div class="input-wrapper">
                                <select id="role" name="role" class="form-select" required>
                                    <option value="">Select Role</option>
                                    <option value="manager">Manager</option>
                                    <option value="head-chef">Head Chef</option>
                                    <option value="sous-chef">Sous Chef</option>
                                    <option value="chef">Chef</option>
                                    <option value="head-waiter">Head Waiter</option>
                                    <option value="waiter">Waiter</option>
                                    <option value="bartender">Bartender</option>
                                    <option value="hostess">Hostess</option>
                                    <option value="dishwasher">Dishwasher</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="shift">Shift</label>
                            <div class="input-wrapper">
                                <select id="shift" name="shift" class="form-select">
                                    <option value="morning">Morning (8AM - 4PM)</option>
                                    <option value="afternoon">Afternoon (10AM - 6PM)</option>
                                    <option value="evening">Evening (4PM - 12AM)</option>
                                    <option value="night">Night (5PM - 1AM)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="salary">Salary ($/year)</label>
                            <div class="input-wrapper">
                                <input type="number" id="salary" name="salary" class="form-input" min="0" step="1000" placeholder="50000">
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
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-ghost" onclick="window.location.href='#'">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <svg viewBox="0 0 24 24">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="8.5" cy="7" r="4"/>
                            <polyline points="17 11 19 13 23 9"/>
                        </svg>
                        Add Employee
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
