<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Velvet Crema Cafe - thoughtfully brewed coffee and fresh local flavors.">
    <title>@yield('title', 'Velvet Crema Cafe')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @stack('styles')
</head>
<body>
    <header class="site-header">
        <nav class="navbar" aria-label="Main navigation">
            <a class="brand" href="{{ route('home') }}" aria-label="Velvet Crema Cafe home">
                <span class="brand-mark">VC</span>
                <span>Velvet Crema</span>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-links" aria-label="Open menu">
                <span></span><span></span><span></span>
            </button>
            <div class="nav-links" id="nav-links">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-brand">
            <span class="brand-mark">VC</span>
            <p>Good coffee. Warm moments.</p>
        </div>
        <p>&copy; {{ date('Y') }} Velvet Crema Cafe</p>
        <p>Capilitan · Calubag · Briones</p>
    </footer>

    @stack('scripts')
    <script>
        const navToggle = document.querySelector('.nav-toggle');
        const navLinks = document.querySelector('.nav-links');
        if (navToggle && navLinks) {
            navToggle.addEventListener('click', () => {
                const isOpen = navLinks.classList.toggle('open');
                navToggle.setAttribute('aria-expanded', String(isOpen));
            });
        }
    </script>
</body>
</html>
