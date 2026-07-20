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
        'resources/css/forms.css',
        'resources/css/buttons.css',
        'resources/css/utilities.css',
        'resources/css/responsive.css',
    ])
</head>
<body>
    <div class="guest-layout">
        <div class="guest-card">
            <div class="logo">
                <h1>Restaurant<span>MS</span></h1>
                <p>@yield('subtitle', 'Restaurant Management System')</p>
            </div>

            @yield('content')
        </div>
    </div>

    <div id="toast-container" class="toast-container"></div>

    @vite([
        'resources/js/app.js',
        'resources/js/modal.js',
        'resources/js/dropdown.js',
    ])
    @stack('scripts')
</body>
</html>
