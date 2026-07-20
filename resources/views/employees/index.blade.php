@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Employees</h1>
            <p class="page-subtitle">Manage your restaurant staff and their schedules.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                Add Employee
            </button>
        </div>
    </div>

    <div class="employee-grid">
        <div class="employee-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=E63946&color=fff" alt="Sarah Johnson">
            </div>
            <h4>Sarah Johnson</h4>
            <div class="role">General Manager</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <div>sarah@restaurantms.com</div>
                <div>Shift: 9:00 AM - 6:00 PM</div>
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="employee-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Mike+Chen&background=1D3557&color=fff" alt="Mike Chen">
            </div>
            <h4>Mike Chen</h4>
            <div class="role">Head Chef</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <div>mike@restaurantms.com</div>
                <div>Shift: 10:00 AM - 8:00 PM</div>
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="employee-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Lisa+Wong&background=2A9D8F&color=fff" alt="Lisa Wong">
            </div>
            <h4>Lisa Wong</h4>
            <div class="role">Sous Chef</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <div>lisa@restaurantms.com</div>
                <div>Shift: 12:00 PM - 9:00 PM</div>
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="employee-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=James+Rodriguez&background=F4A261&color=fff" alt="James Rodriguez">
            </div>
            <h4>James Rodriguez</h4>
            <div class="role">Head Waiter</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <div>james@restaurantms.com</div>
                <div>Shift: 11:00 AM - 8:00 PM</div>
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="employee-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Emily+Brown&background=6c5ce7&color=fff" alt="Emily Brown">
            </div>
            <h4>Emily Brown</h4>
            <div class="role">Waiter</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <div>emily@restaurantms.com</div>
                <div>Shift: 4:00 PM - 12:00 AM</div>
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="employee-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=David+Taylor&background=e17055&color=fff" alt="David Taylor">
            </div>
            <h4>David Taylor</h4>
            <div class="role">Bartender</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <div>david@restaurantms.com</div>
                <div>Shift: 5:00 PM - 1:00 AM</div>
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="employee-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Ana+Martinez&background=00b894&color=fff" alt="Ana Martinez">
            </div>
            <h4>Ana Martinez</h4>
            <div class="role">Hostess</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <div>ana@restaurantms.com</div>
                <div>Shift: 10:00 AM - 6:00 PM</div>
            </div>
            <span class="badge badge-active">Active</span>
        </div>

        <div class="employee-card">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Tom+Wilson&background=fd79a8&color=fff" alt="Tom Wilson">
            </div>
            <h4>Tom Wilson</h4>
            <div class="role">Dishwasher</div>
            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
                <div>tom@restaurantms.com</div>
                <div>Shift: 8:00 AM - 4:00 PM</div>
            </div>
            <span class="badge badge-inactive">Inactive</span>
        </div>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; margin-top: 8px;">
        <div style="font-size: 0.85rem; color: var(--text-secondary);">
            Showing 8 of 24 employees
        </div>
        <div style="display: flex; align-items: center; gap: 4px;">
            <button class="btn btn-sm btn-ghost" disabled>
                <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="15 18 9 12 15 6"/></svg>
                Previous
            </button>
            <button class="btn btn-sm btn-primary">1</button>
            <button class="btn btn-sm btn-ghost">2</button>
            <button class="btn btn-sm btn-ghost">3</button>
            <button class="btn btn-sm btn-ghost">
                Next
                <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="9 18 15 12 9 6"/></svg>
            </button>
        </div>
    </div>
@endsection
