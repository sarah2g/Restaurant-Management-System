@extends('layouts.app')

@section('title', 'Tables')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Tables</h1>
            <p class="page-subtitle">Manage your restaurant floor tables and seating.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-primary" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"/>
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                Add Table
            </button>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 20px;">
        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--success); animation: fadeInUp 0.4s ease forwards; opacity: 0;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">01</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>2 seats</span>
                <span>Floor 1</span>
            </div>
            <span class="status-badge confirmed"><span class="dot"></span>Available</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--success); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.05s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">02</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>2 seats</span>
                <span>Floor 1</span>
            </div>
            <span class="status-badge confirmed"><span class="dot"></span>Available</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--warning); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.1s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">03</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>4 seats</span>
                <span>Floor 1</span>
            </div>
            <span class="status-badge pending"><span class="dot"></span>Reserved</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--primary); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.15s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">04</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>4 seats</span>
                <span>Floor 1</span>
            </div>
            <span class="status-badge preparing"><span class="dot"></span>Occupied</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--success); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.2s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">05</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>6 seats</span>
                <span>Floor 1</span>
            </div>
            <span class="status-badge confirmed"><span class="dot"></span>Available</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--primary); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.25s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">06</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>6 seats</span>
                <span>Floor 1</span>
            </div>
            <span class="status-badge preparing"><span class="dot"></span>Occupied</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--success); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.3s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">07</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>8 seats</span>
                <span>Floor 2</span>
            </div>
            <span class="status-badge confirmed"><span class="dot"></span>Available</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--primary); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.35s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">08</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>8 seats</span>
                <span>Floor 2</span>
            </div>
            <span class="status-badge preparing"><span class="dot"></span>Occupied</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--warning); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.4s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">09</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>4 seats</span>
                <span>Floor 2</span>
            </div>
            <span class="status-badge pending"><span class="dot"></span>Reserved</span>
        </div>

        <div class="card" style="text-align: center; padding: 24px; border-top: 4px solid var(--success); animation: fadeInUp 0.4s ease forwards; opacity: 0; animation-delay: 0.45s;">
            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Table</div>
            <div style="font-size: 2rem; font-weight: 800; color: var(--secondary); margin-bottom: 8px;">10</div>
            <div style="display: flex; justify-content: center; gap: 16px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-secondary);">
                <span>6 seats</span>
                <span>Floor 2</span>
            </div>
            <span class="status-badge confirmed"><span class="dot"></span>Available</span>
        </div>
    </div>
@endsection
