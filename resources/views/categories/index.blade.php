@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Categories</h1>
            <p class="page-subtitle">Manage your menu categories and organize your dishes.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                Add Category
            </button>
        </div>
    </div>

    <div class="table-container">
        <div class="table-header">
            <h3>All Categories</h3>
            <div class="table-toolbar">
                <input type="text" class="search-input" placeholder="Search categories..." data-search="#categories-table">
                <select class="filter-select" data-filter="#categories-table">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>
        <div class="table-wrapper">
            <table class="table" id="categories-table" data-sortable>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Items Count</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-search-item="Appetizers">
                        <td><strong>Appetizers</strong></td>
                        <td>Light starters and small plates</td>
                        <td>12</td>
                        <td><span class="status-badge confirmed"><span class="dot"></span>Active</span></td>
                        <td>Jan 15, 2026</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                                <button class="action-btn delete" onclick="openModal('confirm-modal')">
                                    <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="Main Courses">
                        <td><strong>Main Courses</strong></td>
                        <td>Hearty entrees and specialties</td>
                        <td>18</td>
                        <td><span class="status-badge confirmed"><span class="dot"></span>Active</span></td>
                        <td>Jan 15, 2026</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                                <button class="action-btn delete" onclick="openModal('confirm-modal')">
                                    <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="Pasta">
                        <td><strong>Pasta</strong></td>
                        <td>Handcrafted pasta dishes</td>
                        <td>9</td>
                        <td><span class="status-badge confirmed"><span class="dot"></span>Active</span></td>
                        <td>Jan 16, 2026</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                                <button class="action-btn delete" onclick="openModal('confirm-modal')">
                                    <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="Salads">
                        <td><strong>Salads</strong></td>
                        <td>Fresh garden salads and bowls</td>
                        <td>7</td>
                        <td><span class="status-badge confirmed"><span class="dot"></span>Active</span></td>
                        <td>Jan 16, 2026</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                                <button class="action-btn delete" onclick="openModal('confirm-modal')">
                                    <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="Desserts" data-filter-item="active">
                        <td><strong>Desserts</strong></td>
                        <td>Sweet treats and desserts</td>
                        <td>11</td>
                        <td><span class="status-badge confirmed"><span class="dot"></span>Active</span></td>
                        <td>Jan 17, 2026</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                                <button class="action-btn delete" onclick="openModal('confirm-modal')">
                                    <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="Beverages" data-filter-item="active">
                        <td><strong>Beverages</strong></td>
                        <td>Refreshing drinks and cocktails</td>
                        <td>15</td>
                        <td><span class="status-badge confirmed"><span class="dot"></span>Active</span></td>
                        <td>Jan 17, 2026</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                                <button class="action-btn delete" onclick="openModal('confirm-modal')">
                                    <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-search-item="Seasonal Specials" data-filter-item="inactive">
                        <td><strong>Seasonal Specials</strong></td>
                        <td>Limited time seasonal offerings</td>
                        <td>5</td>
                        <td><span class="status-badge pending"><span class="dot"></span>Inactive</span></td>
                        <td>Feb 1, 2026</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit" onclick="window.location.href='#'">
                                    <svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </button>
                                <button class="action-btn delete" onclick="openModal('confirm-modal')">
                                    <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
