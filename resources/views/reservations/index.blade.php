@extends('layouts.app')

@section('title', 'Reservations')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Reservations</h1>
            <p class="page-subtitle">Manage all table reservations and bookings.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                New Reservation
            </button>
        </div>
    </div>

    <div style="display: flex; gap: 8px; margin-bottom: 24px; flex-wrap: wrap;">
        <button class="btn btn-sm btn-primary">Today</button>
        <button class="btn btn-sm btn-ghost">Tomorrow</button>
        <button class="btn btn-sm btn-ghost">This Week</button>
        <button class="btn btn-sm btn-ghost">This Month</button>
        <span style="flex: 1;"></span>
        <div style="display: flex; gap: 8px;">
            <button class="btn btn-sm btn-ghost">
                <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="15 18 9 12 15 6"/></svg>
            </button>
            <span style="font-size: 0.95rem; font-weight: 600; align-self: center; color: var(--secondary);">July 19, 2026</span>
            <button class="btn btn-sm btn-ghost">
                <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;"><polyline points="9 18 15 12 9 6"/></svg>
            </button>
        </div>
    </div>

    <div class="table-container" style="margin-bottom: 24px;">
        <div class="table-header">
            <h3>Today's Reservations</h3>
        </div>
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>Guest</th>
                        <th>Time</th>
                        <th>Table</th>
                        <th>Guests</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">JA</div>
                                <div>
                                    <div class="customer-name">James Anderson</div>
                                    <div class="customer-email">james@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>7:00 PM</td>
                        <td>Table 4</td>
                        <td>4 guests</td>
                        <td>(555) 123-4567</td>
                        <td><span class="status-badge confirmed"><span class="dot"></span>Confirmed</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">MG</div>
                                <div>
                                    <div class="customer-name">Maria Garcia</div>
                                    <div class="customer-email">maria@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>8:30 PM</td>
                        <td>Table 6</td>
                        <td>2 guests</td>
                        <td>(555) 234-5678</td>
                        <td><span class="status-badge pending"><span class="dot"></span>Pending</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">DW</div>
                                <div>
                                    <div class="customer-name">David Wilson</div>
                                    <div class="customer-email">david@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>7:30 PM</td>
                        <td>Table 2</td>
                        <td>3 guests</td>
                        <td>(555) 345-6789</td>
                        <td><span class="status-badge cancelled"><span class="dot"></span>Cancelled</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="customer-cell">
                                <div class="avatar-sm">SL</div>
                                <div>
                                    <div class="customer-name">Sarah Lee</div>
                                    <div class="customer-email">sarah@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>6:00 PM</td>
                        <td>Table 8</td>
                        <td>5 guests</td>
                        <td>(555) 456-7890</td>
                        <td><span class="status-badge confirmed"><span class="dot"></span>Confirmed</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h3 class="section-title">
        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        Upcoming Reservations
    </h3>

    <div class="content-grid" style="grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 16px;">
        <div class="reservation-card confirmed">
            <div class="reservation-header">
                <h4>Robert Chen</h4>
                <span class="status-badge confirmed"><span class="dot"></span>Confirmed</span>
            </div>
            <div class="reservation-details">
                <span><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Tomorrow, 6:00 PM</span>
                <span><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> Table 10</span>
                <span><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg> 6 guests</span>
                <span><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><line x1="22" y1="6" x2="12" y2="13" x3="2" y3="6"/></svg> robert@example.com</span>
            </div>
        </div>

        <div class="reservation-card pending">
            <div class="reservation-header">
                <h4>Amanda Foster</h4>
                <span class="status-badge pending"><span class="dot"></span>Pending</span>
            </div>
            <div class="reservation-details">
                <span><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Tomorrow, 8:00 PM</span>
                <span><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> Table 5</span>
                <span><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg> 4 guests</span>
                <span><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><line x1="22" y1="6" x2="12" y2="13" x3="2" y3="6"/></svg> amanda@example.com</span>
            </div>
        </div>

        <div class="reservation-card confirmed">
            <div class="reservation-header">
                <h4>Thomas Wright</h4>
                <span class="status-badge confirmed"><span class="dot"></span>Confirmed</span>
            </div>
            <div class="reservation-details">
                <span><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Jul 21, 7:30 PM</span>
                <span><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> Table 3</span>
                <span><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg> 2 guests</span>
                <span><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><line x1="22" y1="6" x2="12" y2="13" x3="2" y3="6"/></svg> thomas@example.com</span>
            </div>
        </div>

        <div class="reservation-card confirmed">
            <div class="reservation-header">
                <h4>Jessica Park</h4>
                <span class="status-badge confirmed"><span class="dot"></span>Confirmed</span>
            </div>
            <div class="reservation-details">
                <span><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Jul 22, 7:00 PM</span>
                <span><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> Table 7</span>
                <span><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg> 8 guests</span>
                <span><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><line x1="22" y1="6" x2="12" y2="13" x3="2" y3="6"/></svg> jessica@example.com</span>
            </div>
        </div>
    </div>
@endsection
