<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'WCCF') - West Nile Christian Community Fellowship</title>
    <meta name="description" content="@yield('description', 'West Nile Christian Community Fellowship (WCCF) Limited is a faith-based umbrella organization bringing together over 70 member churches across Uganda.')">
    
    <meta property="og:title" content="@yield('og_title', 'WCCF - West Nile Christian Community Fellowship')" />
    <meta property="og:description" content="@yield('og_description', 'A Christian Community Promoting Renewed, Healed and Prayerful Christians')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))" />
    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('og_title', 'WCCF - West Nile Christian Community Fellowship')" />
    <meta name="twitter:description" content="@yield('og_description', 'A Christian Community Promoting Renewed, Healed and Prayerful Christians')" />
    
    <script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Organization",
    "name": "West Nile Christian Community Fellowship Limited",
    "url": "{{ config('app.url') }}",
    "logo": "{{ asset('images/logo.png') }}",
    "description": "A faith-based umbrella organization bringing together over 70 member churches across Uganda.",
    "foundingDate": "1990",
    "address": {
        "@@type": "PostalAddress",
        "addressCountry": "UG"
    }
}
    </script>
    
    @vite(['resources/css/app.css'])
</head>
<body class="font-sans text-wccf-text bg-wccf-bg antialiased">
    <x-navigation />
    
    <main>
        @yield('content')
    </main>
    
    <x-footer />
    
    @vite(['resources/js/app.js'])
    
    @stack('scripts')
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
        revealElements.forEach(el => revealObserver.observe(el));
        
        const counters = document.querySelectorAll('.counter-number');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.dataset.target);
                    const duration = 4000;
                    const step = Math.ceil(target / (duration / 16));
                    let current = 0;
                    const updateCounter = () => {
                        current += step;
                        if (current < target) {
                            el.textContent = current;
                            requestAnimationFrame(updateCounter);
                        } else {
                            el.textContent = target;
                            if (el.dataset.suffix) el.textContent += el.dataset.suffix;
                        }
                    };
                    updateCounter();
                    counterObserver.unobserve(el);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(el => counterObserver.observe(el));
        
        const navbar = document.querySelector('.main-navbar');
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }
    });
    </script>
</body>
</html>
