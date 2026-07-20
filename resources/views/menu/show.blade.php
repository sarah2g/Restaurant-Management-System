@extends('layouts.app')

@section('title', 'Grilled Salmon Bowl')

@section('content')
    <div class="page-header">
        <div>
            <div class="breadcrumb">
                <a href="#">Dashboard</a>
                <span>/</span>
                <a href="#">Menu</a>
                <span>/</span>
                <span>Grilled Salmon Bowl</span>
            </div>
            <h1 class="page-title">Grilled Salmon Bowl</h1>
            <p class="page-subtitle">View detailed information about this menu item.</p>
        </div>
        <div class="page-actions">
            <button class="btn btn-outline" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                </svg>
                Edit Item
            </button>
            <button class="btn btn-ghost" onclick="window.location.href='#'">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Back
            </button>
        </div>
    </div>

    <div class="content-grid grid-2" style="grid-template-columns: 1fr 1fr; gap: 24px;">
        <div class="card">
            <div class="card-body" style="padding: 0;">
                <div style="height: 320px; background: linear-gradient(135deg, #E63946 0%, #ff6b6b 100%); border-radius: var(--radius) var(--radius) 0 0; display: flex; align-items: center; justify-content: center;">
                    <span style="font-size: 4rem; font-weight: 800; color: white; opacity: 0.8;">S</span>
                </div>
            </div>
        </div>

        <div style="display: grid; gap: 24px; align-content: start;">
            <div class="card">
                <div class="card-header">
                    <h3>Item Information</h3>
                    <span class="status-badge confirmed"><span class="dot"></span>Available</span>
                </div>
                <div class="card-body" style="display: grid; gap: 16px;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Category</div>
                            <div style="font-weight: 600; color: var(--secondary);">Main Courses</div>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Price</div>
                            <div style="font-weight: 700; color: var(--primary); font-size: 1.2rem;">$24.50</div>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Rating</div>
                            <div style="display: flex; align-items: center; gap: 4px; font-weight: 600;">
                                <svg style="width: 16px; height: 16px; fill: var(--warning); stroke: var(--warning);" viewBox="0 0 24 24">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                </svg>
                                4.8
                            </div>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Orders</div>
                            <div style="font-weight: 600; color: var(--secondary);">142 this week</div>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Calories</div>
                            <div style="font-weight: 600; color: var(--secondary);">520 cal</div>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 4px;">Allergens</div>
                            <div style="font-weight: 600; color: var(--secondary);">Fish</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>Description</h3>
                </div>
                <div class="card-body">
                    <p style="color: var(--text-secondary); line-height: 1.7;">
                        Fresh Atlantic salmon with quinoa, avocado, and seasonal vegetables.
                        Served with a citrus vinaigrette and garnished with micro greens.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>Ingredients</h3>
                </div>
                <div class="card-body">
                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                        <span style="padding: 6px 14px; background: var(--background); border-radius: 20px; font-size: 0.85rem; color: var(--secondary);">Atlantic Salmon</span>
                        <span style="padding: 6px 14px; background: var(--background); border-radius: 20px; font-size: 0.85rem; color: var(--secondary);">Quinoa</span>
                        <span style="padding: 6px 14px; background: var(--background); border-radius: 20px; font-size: 0.85rem; color: var(--secondary);">Avocado</span>
                        <span style="padding: 6px 14px; background: var(--background); border-radius: 20px; font-size: 0.85rem; color: var(--secondary);">Cherry Tomatoes</span>
                        <span style="padding: 6px 14px; background: var(--background); border-radius: 20px; font-size: 0.85rem; color: var(--secondary);">Mixed Greens</span>
                        <span style="padding: 6px 14px; background: var(--background); border-radius: 20px; font-size: 0.85rem; color: var(--secondary);">Lemon Vinaigrette</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
