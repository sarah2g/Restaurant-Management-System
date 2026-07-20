<header class="navbar" id="navbar">
    <div class="navbar-left">
        <button class="navbar-toggle" id="sidebar-toggle" aria-label="Toggle sidebar">
            <svg viewBox="0 0 24 24">
                <line x1="3" y1="12" x2="21" y2="12"/>
                <line x1="3" y1="6" x2="21" y2="6"/>
                <line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
        </button>

        <div class="navbar-search">
            <svg viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8"/>
                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" placeholder="Search menu, orders, customers..." data-search="#search-results">
        </div>
    </div>

    <div class="navbar-right">
        <button class="navbar-btn" id="darkmode-toggle" aria-label="Toggle dark mode">
            <svg viewBox="0 0 24 24">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
            </svg>
        </button>

        <button class="navbar-btn" aria-label="Notifications">
            <svg viewBox="0 0 24 24">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
            <span class="badge">3</span>
        </button>

        <button class="navbar-btn" aria-label="Messages">
            <svg viewBox="0 0 24 24">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
            <span class="badge">5</span>
        </button>

        <div class="navbar-profile" data-dropdown>
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=1D3557&color=fff" alt="Sarah Johnson">
            </div>
            <div class="info">
                <div class="name">Sarah Johnson</div>
                <div class="role">General Manager</div>
            </div>
        </div>
    </div>
</header>
