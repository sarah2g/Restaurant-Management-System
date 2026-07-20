<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Restaurant Management') - RestaurantMS</title>
    @vite([
        'resources/css/app.css',
        'resources/css/layout.css',
        'resources/css/navbar.css',
        'resources/css/sidebar.css',
        'resources/css/dashboard.css',
        'resources/css/cards.css',
        'resources/css/tables.css',
        'resources/css/forms.css',
        'resources/css/buttons.css',
        'resources/css/modal.css',
        'resources/css/utilities.css',
        'resources/css/responsive.css',
    ])
</head>
<body>
    <div class="app-layout">
        @include('components.sidebar')

        <div id="sidebar-overlay" class="sidebar-overlay"></div>

        <div class="content-wrapper">
            @include('components.navbar')

            <main class="page-content">
                @include('components.alert')
                @yield('content')
            </main>

            @include('components.footer')
        </div>
    </div>

    <div id="toast-container" class="toast-container"></div>

    @include('components.modal')

    @vite([
        'resources/js/app.js',
        'resources/js/sidebar.js',
        'resources/js/modal.js',
        'resources/js/dashboard.js',
        'resources/js/orders.js',
        'resources/js/search.js',
        'resources/js/dropdown.js',
        'resources/js/table.js',
        'resources/js/darkmode.js',
    ])
    @stack('scripts')
</body>
</html>
