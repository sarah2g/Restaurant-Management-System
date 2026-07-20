@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Profile</h1>
            <p class="page-subtitle">Manage your account and personal information.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-ghost">
                <svg viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
                View Public Profile
            </button>
        </div>
    </div>

    <div class="dashboard-grid" style="grid-template-columns: 1fr 2fr;">
        <div class="card" style="text-align: center;">
            <div class="card-body">
                <div style="width: 100px; height: 100px; border-radius: 50%; margin: 0 auto 16px; overflow: hidden; border: 4px solid var(--primary-light);">
                    <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&size=100&background=E63946&color=fff" alt="Profile" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 style="font-size: 1.2rem; font-weight: 700; color: var(--secondary);">Sarah Johnson</h3>
                <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 4px;">General Manager</p>
                <p style="color: var(--text-light); font-size: 0.85rem; margin-bottom: 20px;">Member since Jan 2024</p>
                <div style="display: flex; justify-content: center; gap: 24px; padding: 16px 0; border-top: 1px solid var(--border);">
                    <div>
                        <div style="font-size: 1.3rem; font-weight: 700; color: var(--secondary);">2</div>
                        <div style="font-size: 0.78rem; color: var(--text-secondary);">Years</div>
                    </div>
                    <div>
                        <div style="font-size: 1.3rem; font-weight: 700; color: var(--secondary);">156</div>
                        <div style="font-size: 0.78rem; color: var(--text-secondary);">Orders</div>
                    </div>
                    <div>
                        <div style="font-size: 1.3rem; font-weight: 700; color: var(--secondary);">98%</div>
                        <div style="font-size: 0.78rem; color: var(--text-secondary);">Rating</div>
                    </div>
                </div>
            </div>
            <div class="card-footer" style="justify-content: center; gap: 8px;">
                <button class="btn btn-sm btn-outline-primary">Change Avatar</button>
                <button class="btn btn-sm btn-ghost">Remove</button>
            </div>
        </div>

        <div class="form-card">
            <div class="form-header">
                <h3>Personal Information</h3>
                <p>Update your personal details.</p>
            </div>
            <div class="form-body">
                <form action="#" method="POST" data-validate>
                    @csrf
                    @method('PUT')
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="first_name">First Name</label>
                            <div class="input-wrapper">
                                <input type="text" id="first_name" name="first_name" class="form-input" value="Sarah" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="last_name">Last Name</label>
                            <div class="input-wrapper">
                                <input type="text" id="last_name" name="last_name" class="form-input" value="Johnson" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <div class="input-wrapper">
                                <input type="email" id="email" name="email" class="form-input" value="sarah@restaurantms.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Phone</label>
                            <div class="input-wrapper">
                                <input type="tel" id="phone" name="phone" class="form-input" value="(555) 111-2222">
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label" for="address">Address</label>
                            <div class="input-wrapper">
                                <input type="text" id="address" name="address" class="form-input" value="456 Oak Avenue, San Francisco, CA 94102">
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label" for="bio">Bio</label>
                            <div class="input-wrapper">
                                <textarea id="bio" name="bio" class="form-textarea" rows="3">Experienced restaurant manager with a passion for fine dining and exceptional customer service.</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-ghost">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <svg viewBox="0 0 24 24">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                                <polyline points="17 21 17 13 7 13 7 21"/>
                                <polyline points="7 3 7 8 15 8"/>
                            </svg>
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="form-card" style="margin-top: 24px;">
        <div class="form-header">
            <h3>Change Password</h3>
            <p>Update your account password.</p>
        </div>
        <div class="form-body">
            <form action="#" method="POST">
                @csrf
                @method('PUT')
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="current_password">Current Password</label>
                        <div class="input-wrapper">
                            <input type="password" id="current_password" name="current_password" class="form-input" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="new_password">New Password</label>
                        <div class="input-wrapper">
                            <input type="password" id="new_password" name="new_password" class="form-input" required minlength="8">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="confirm_password">Confirm Password</label>
                        <div class="input-wrapper">
                            <input type="password" id="confirm_password" name="confirm_password" class="form-input" required>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-ghost">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </div>
            </form>
        </div>
    </div>
@endsection
