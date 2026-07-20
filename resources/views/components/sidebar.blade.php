<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="logo-icon">R</div>
        <div class="logo-text">Restaurant<span>MS</span></div>
    </div>

    <nav class="sidebar-nav">
        <div class="sidebar-label">Main</div>

        <a href="#" class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <rect x="3" y="3" width="7" height="7"/>
                <rect x="14" y="3" width="7" height="7"/>
                <rect x="14" y="14" width="7" height="7"/>
                <rect x="3" y="14" width="7" height="7"/>
            </svg>
            <span class="item-text">Dashboard</span>
        </a>

        <a href="#" class="sidebar-item {{ request()->routeIs('orders.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                <line x1="3" y1="6" x2="21" y2="6"/>
                <path d="M16 10a4 4 0 0 1-8 0"/>
            </svg>
            <span class="item-text">Orders</span>
            <span class="badge">12</span>
        </a>

        <a href="#" class="sidebar-item {{ request()->routeIs('menu.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                <line x1="6" y1="1" x2="6" y2="4"/>
                <line x1="10" y1="1" x2="10" y2="4"/>
                <line x1="14" y1="1" x2="14" y2="4"/>
            </svg>
            <span class="item-text">Menu</span>
        </a>

        <a href="#" class="sidebar-item {{ request()->routeIs('categories.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <path d="M4 4h6v6H4z"/>
                <path d="M14 4h6v6h-6z"/>
                <path d="M4 14h6v6H4z"/>
                <path d="M14 14h6v6h-6z"/>
            </svg>
            <span class="item-text">Categories</span>
        </a>

        <div class="sidebar-label">Management</div>

        <a href="#" class="sidebar-item {{ request()->routeIs('reservations.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            <span class="item-text">Reservations</span>
            <span class="badge">8</span>
        </a>

        <a href="#" class="sidebar-item {{ request()->routeIs('tables.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            <span class="item-text">Tables</span>
        </a>

        <a href="#" class="sidebar-item {{ request()->routeIs('customers.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
            <span class="item-text">Customers</span>
        </a>

        <a href="#" class="sidebar-item {{ request()->routeIs('employees.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="8.5" cy="7" r="4"/>
                <polyline points="17 11 19 13 23 9"/>
            </svg>
            <span class="item-text">Employees</span>
        </a>

        <a href="#" class="sidebar-item {{ request()->routeIs('inventory.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                <line x1="12" y1="22.08" x2="12" y2="12"/>
            </svg>
            <span class="item-text">Inventory</span>
        </a>

        <div class="sidebar-label">Reports</div>

        <a href="#" class="sidebar-item {{ request()->routeIs('reports.*') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <line x1="18" y1="20" x2="18" y2="10"/>
                <line x1="12" y1="20" x2="12" y2="4"/>
                <line x1="6" y1="20" x2="6" y2="14"/>
            </svg>
            <span class="item-text">Reports</span>
        </a>

        <a href="#" class="sidebar-item {{ request()->routeIs('profile') ? 'active' : '' }}" data-href="#">
            <svg viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
            <span class="item-text">Profile</span>
        </a>
    </nav>

    <div class="sidebar-footer">
        <a href="#" class="sidebar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <svg viewBox="0 0 24 24">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
            <span class="item-text">Logout</span>
        </a>
        <form id="logout-form" action="#" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</aside>
