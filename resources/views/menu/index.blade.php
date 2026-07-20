@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Menu</h1>
            <p class="page-subtitle">Browse and manage your restaurant's menu items.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-outline" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <path d="M4 4h6v6H4z"/><path d="M14 4h6v6h-6z"/><path d="M4 14h6v6H4z"/><path d="M14 14h6v6h-6z"/>
                </svg>
                Categories
            </button>
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                Add Menu Item
            </button>
        </div>
    </div>

    <div style="display: flex; gap: 16px; align-items: center; margin-bottom: 24px; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 200px; position: relative;">
            <svg style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); width: 18px; height: 18px; stroke: var(--text-light);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" data-search="#menu-grid" placeholder="Search menu items..." style="width: 100%; padding: 10px 14px 10px 42px; border: 1.5px solid var(--border); border-radius: var(--radius-sm); font-size: 0.9rem; outline: none; background: var(--card); transition: var(--transition-fast);" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'">
        </div>
        <select data-filter="#menu-grid" style="padding: 10px 16px; border: 1.5px solid var(--border); border-radius: var(--radius-sm); font-size: 0.9rem; outline: none; background: var(--card); color: var(--text); min-width: 160px;">
            <option value="">All Categories</option>
            <option value="appetizers">Appetizers</option>
            <option value="main-courses">Main Courses</option>
            <option value="pasta">Pasta</option>
            <option value="salads">Salads</option>
            <option value="desserts">Desserts</option>
            <option value="beverages">Beverages</option>
        </select>
        <select data-filter="#menu-grid" style="padding: 10px 16px; border: 1.5px solid var(--border); border-radius: var(--radius-sm); font-size: 0.9rem; outline: none; background: var(--card); color: var(--text); min-width: 140px;">
            <option value="">All Status</option>
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
        </select>
    </div>

    <div class="menu-grid" id="menu-grid">
        <div class="menu-card" data-search-item="Grilled Salmon Bowl" data-filter-item="main-courses">
            <div class="card-image">
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #E63946 0%, #ff6b6b 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 700;">S</div>
                <span class="badge available">Available</span>
            </div>
            <div class="card-content">
                <div class="card-category">Main Courses</div>
                <div class="card-name">Grilled Salmon Bowl</div>
                <div class="card-description">Fresh Atlantic salmon with quinoa, avocado, and seasonal vegetables.</div>
                <div class="card-footer-row">
                    <div class="card-price">$24.50</div>
                    <div class="card-rating">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        4.8
                    </div>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-sm btn-outline-primary" style="flex: 1;" onclick="window.location.href='#'">Edit</button>
                <button class="btn btn-sm btn-ghost" style="flex: 1;" onclick="window.location.href='#'">View</button>
                <button class="btn btn-sm btn-ghost" style="flex: 0;" onclick="openModal('confirm-modal')">
                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </button>
            </div>
        </div>

        <div class="menu-card" data-search-item="Truffle Mushroom Pasta" data-filter-item="pasta">
            <div class="card-image">
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #F4A261 0%, #ffbc80 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 700;">T</div>
                <span class="badge available">Available</span>
            </div>
            <div class="card-content">
                <div class="card-category">Pasta</div>
                <div class="card-name">Truffle Mushroom Pasta</div>
                <div class="card-description">Fettuccine with wild mushrooms, truffle oil, and parmesan cream sauce.</div>
                <div class="card-footer-row">
                    <div class="card-price">$19.50</div>
                    <div class="card-rating">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        4.6
                    </div>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-sm btn-outline-primary" style="flex: 1;" onclick="window.location.href='#'">Edit</button>
                <button class="btn btn-sm btn-ghost" style="flex: 1;" onclick="window.location.href='#'">View</button>
                <button class="btn btn-sm btn-ghost" style="flex: 0;" onclick="openModal('confirm-modal')">
                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </button>
            </div>
        </div>

        <div class="menu-card" data-search-item="Classic Caesar Salad" data-filter-item="salads">
            <div class="card-image">
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #2A9D8F 0%, #3dd5c0 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 700;">C</div>
                <span class="badge available">Available</span>
            </div>
            <div class="card-content">
                <div class="card-category">Salads</div>
                <div class="card-name">Classic Caesar Salad</div>
                <div class="card-description">Romaine lettuce, croutons, parmesan, and house-made caesar dressing.</div>
                <div class="card-footer-row">
                    <div class="card-price">$14.00</div>
                    <div class="card-rating">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        4.5
                    </div>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-sm btn-outline-primary" style="flex: 1;" onclick="window.location.href='#'">Edit</button>
                <button class="btn btn-sm btn-ghost" style="flex: 1;" onclick="window.location.href='#'">View</button>
                <button class="btn btn-sm btn-ghost" style="flex: 0;" onclick="openModal('confirm-modal')">
                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </button>
            </div>
        </div>

        <div class="menu-card" data-search-item="Wood-Fired Margherita" data-filter-item="main-courses">
            <div class="card-image">
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #1D3557 0%, #2d4a7a 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 700;">W</div>
                <span class="badge available">Available</span>
            </div>
            <div class="card-content">
                <div class="card-category">Main Courses</div>
                <div class="card-name">Wood-Fired Margherita</div>
                <div class="card-description">Classic Neapolitan pizza with San Marzano tomatoes and fresh mozzarella.</div>
                <div class="card-footer-row">
                    <div class="card-price">$16.50</div>
                    <div class="card-rating">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        4.7
                    </div>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-sm btn-outline-primary" style="flex: 1;" onclick="window.location.href='#'">Edit</button>
                <button class="btn btn-sm btn-ghost" style="flex: 1;" onclick="window.location.href='#'">View</button>
                <button class="btn btn-sm btn-ghost" style="flex: 0;" onclick="openModal('confirm-modal')">
                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </button>
            </div>
        </div>

        <div class="menu-card" data-search-item="Chocolate Lava Cake" data-filter-item="desserts">
            <div class="card-image">
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 700;">C</div>
                <span class="badge available">Available</span>
            </div>
            <div class="card-content">
                <div class="card-category">Desserts</div>
                <div class="card-name">Chocolate Lava Cake</div>
                <div class="card-description">Warm chocolate cake with a molten center, served with vanilla ice cream.</div>
                <div class="card-footer-row">
                    <div class="card-price">$11.00</div>
                    <div class="card-rating">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        4.9
                    </div>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-sm btn-outline-primary" style="flex: 1;" onclick="window.location.href='#'">Edit</button>
                <button class="btn btn-sm btn-ghost" style="flex: 1;" onclick="window.location.href='#'">View</button>
                <button class="btn btn-sm btn-ghost" style="flex: 0;" onclick="openModal('confirm-modal')">
                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </button>
            </div>
        </div>

        <div class="menu-card" data-search-item="Spicy Tuna Tartare" data-filter-item="appetizers">
            <div class="card-image">
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #e17055 0%, #fab1a0 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 700;">S</div>
                <span class="badge available">Available</span>
            </div>
            <div class="card-content">
                <div class="card-category">Appetizers</div>
                <div class="card-name">Spicy Tuna Tartare</div>
                <div class="card-description">Fresh ahi tuna with avocado, sesame, and sriracha aioli.</div>
                <div class="card-footer-row">
                    <div class="card-price">$17.00</div>
                    <div class="card-rating">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        4.4
                    </div>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-sm btn-outline-primary" style="flex: 1;" onclick="window.location.href='#'">Edit</button>
                <button class="btn btn-sm btn-ghost" style="flex: 1;" onclick="window.location.href='#'">View</button>
                <button class="btn btn-sm btn-ghost" style="flex: 0;" onclick="openModal('confirm-modal')">
                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </button>
            </div>
        </div>

        <div class="menu-card" data-search-item="Berry Smoothie" data-filter-item="beverages">
            <div class="card-image">
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #fd79a8 0%, #e84393 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 700;">B</div>
                <span class="badge available">Available</span>
            </div>
            <div class="card-content">
                <div class="card-category">Beverages</div>
                <div class="card-name">Berry Smoothie</div>
                <div class="card-description">Mixed berries, banana, yogurt, and honey blended to perfection.</div>
                <div class="card-footer-row">
                    <div class="card-price">$7.50</div>
                    <div class="card-rating">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        4.3
                    </div>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-sm btn-outline-primary" style="flex: 1;" onclick="window.location.href='#'">Edit</button>
                <button class="btn btn-sm btn-ghost" style="flex: 1;" onclick="window.location.href='#'">View</button>
                <button class="btn btn-sm btn-ghost" style="flex: 0;" onclick="openModal('confirm-modal')">
                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </button>
            </div>
        </div>

        <div class="menu-card" data-search-item="Lobster Bisque" data-filter-item="appetizers">
            <div class="card-image">
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #00b894 0%, #55efc4 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 700;">L</div>
                <span class="badge unavailable">Unavailable</span>
            </div>
            <div class="card-content">
                <div class="card-category">Appetizers</div>
                <div class="card-name">Lobster Bisque</div>
                <div class="card-description">Creamy lobster soup with sherry and fresh herbs.</div>
                <div class="card-footer-row">
                    <div class="card-price">$15.00</div>
                    <div class="card-rating">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        4.2
                    </div>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-sm btn-outline-primary" style="flex: 1;" onclick="window.location.href='#'">Edit</button>
                <button class="btn btn-sm btn-ghost" style="flex: 1;" onclick="window.location.href='#'">View</button>
                <button class="btn btn-sm btn-ghost" style="flex: 0;" onclick="openModal('confirm-modal')">
                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </button>
            </div>
        </div>
    </div>

    <div style="display: flex; justify-content: center; margin-top: 32px;">
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
