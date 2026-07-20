@extends('layouts.app')

@section('title', 'Sales Reports')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Sales Reports</h1>
            <p class="page-subtitle">Analyze your restaurant's sales performance.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-outline">
                <svg viewBox="0 0 24 24">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="7 10 12 15 17 10"/>
                    <line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
                Export Report
            </button>
            <button class="btn btn-primary">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                Generate Report
            </button>
        </div>
    </div>

    <div style="display: flex; gap: 12px; align-items: center; margin-bottom: 24px; flex-wrap: wrap;">
        <span style="font-weight: 600; font-size: 0.9rem; color: var(--secondary);">Period:</span>
        <button class="btn btn-sm btn-primary">Today</button>
        <button class="btn btn-sm btn-ghost">This Week</button>
        <button class="btn btn-sm btn-ghost">This Month</button>
        <button class="btn btn-sm btn-ghost">This Year</button>
        <span style="flex: 1;"></span>
        <div style="display: flex; gap: 8px; align-items: center;">
            <input type="date" class="form-input" style="padding: 8px 12px; font-size: 0.85rem;" value="2026-07-01">
            <span style="color: var(--text-light);">to</span>
            <input type="date" class="form-input" style="padding: 8px 12px; font-size: 0.85rem;" value="2026-07-19">
        </div>
    </div>

    <div class="stats-grid" style="margin-bottom: 24px;">
        <div class="stat-card">
            <div class="stat-icon revenue">
                <svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Total Revenue</div>
                <div class="stat-value" style="font-size: 1.4rem;">$48,620</div>
                <div class="stat-change up">+15.3% vs last period</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orders">
                <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Total Orders</div>
                <div class="stat-value" style="font-size: 1.4rem;">1,245</div>
                <div class="stat-change up">+8.7% vs last period</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon customers">
                <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Avg. Order Value</div>
                <div class="stat-value" style="font-size: 1.4rem;">$39.05</div>
                <div class="stat-change up">+6.1% vs last period</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon inventory">
                <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            <div class="stat-info">
                <div class="stat-label">Items Sold</div>
                <div class="stat-value" style="font-size: 1.4rem;">3,892</div>
                <div class="stat-change up">+11.2% vs last period</div>
            </div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <div class="dashboard-card-header">
                <h3>Revenue Over Time</h3>
            </div>
            <div class="dashboard-card-body">
                <div class="chart-placeholder">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                    <p>Revenue chart will be rendered here</p>
                    <span style="font-size: 0.8rem;">Integrated with your preferred charting library</span>
                </div>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="dashboard-card-header">
                <h3>Sales by Category</h3>
            </div>
            <div class="dashboard-card-body">
                <div class="chart-placeholder">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 0 1 10 10"/>
                    </svg>
                    <p>Category breakdown chart</p>
                    <span style="font-size: 0.8rem;">Integrated with your preferred charting library</span>
                </div>
            </div>
        </div>
    </div>

    <div class="table-container">
        <div class="table-header">
            <h3>Daily Sales Summary</h3>
        </div>
        <div class="table-wrapper">
            <table class="table" data-sortable>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Orders</th>
                        <th>Revenue</th>
                        <th>Avg. Order</th>
                        <th>Items Sold</th>
                        <th>Growth</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jul 19, 2026</td>
                        <td>42</td>
                        <td class="amount">$1,680</td>
                        <td>$40.00</td>
                        <td>128</td>
                        <td><span class="stat-change up" style="display: inline-flex;">+5.2%</span></td>
                    </tr>
                    <tr>
                        <td>Jul 18, 2026</td>
                        <td>38</td>
                        <td class="amount">$1,445</td>
                        <td>$38.03</td>
                        <td>115</td>
                        <td><span class="stat-change up" style="display: inline-flex;">+3.8%</span></td>
                    </tr>
                    <tr>
                        <td>Jul 17, 2026</td>
                        <td>45</td>
                        <td class="amount">$1,890</td>
                        <td>$42.00</td>
                        <td>140</td>
                        <td><span class="stat-change up" style="display: inline-flex;">+12.1%</span></td>
                    </tr>
                    <tr>
                        <td>Jul 16, 2026</td>
                        <td>35</td>
                        <td class="amount">$1,260</td>
                        <td>$36.00</td>
                        <td>98</td>
                        <td><span class="stat-change down" style="display: inline-flex;">-4.5%</span></td>
                    </tr>
                    <tr>
                        <td>Jul 15, 2026</td>
                        <td>40</td>
                        <td class="amount">$1,520</td>
                        <td>$38.00</td>
                        <td>120</td>
                        <td><span class="stat-change up" style="display: inline-flex;">+2.1%</span></td>
                    </tr>
                    <tr>
                        <td>Jul 14, 2026</td>
                        <td>36</td>
                        <td class="amount">$1,368</td>
                        <td>$38.00</td>
                        <td>108</td>
                        <td><span class="stat-change down" style="display: inline-flex;">-1.8%</span></td>
                    </tr>
                    <tr>
                        <td>Jul 13, 2026</td>
                        <td>52</td>
                        <td class="amount">$2,080</td>
                        <td>$40.00</td>
                        <td>165</td>
                        <td><span class="stat-change up" style="display: inline-flex;">+18.5%</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
