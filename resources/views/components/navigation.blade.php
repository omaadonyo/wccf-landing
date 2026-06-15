<nav class="main-navbar fixed top-0 left-0 right-0 z-50 transition-all duration-300 {{ request()->routeIs('home') ? 'home' : 'bg-wccf-primary shadow-lg' }}" x-data="{ mobileOpen: false }">
    <style>
        .main-navbar.home {
            background: transparent;
        }
        .main-navbar.home.scrolled {
            background: #5f0138;
            box-shadow: 0 2px 20px rgba(0,0,0,0.2);
        }
        .main-navbar:not(.home) {
            background: #5f0138;
            box-shadow: 0 2px 20px rgba(0,0,0,0.2);
        }
        .mobile-overlay {
            background: rgba(0,0,0,0.5);
        }
    </style>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20 md:h-24">
            <a href="/" class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <span class="text-white font-heading font-bold text-lg">W</span>
                </div>
                <div>
                    <span class="font-heading font-bold text-xl text-white">WCCF</span>
                    <p class="text-xs text-white/70 -mt-1">Christian Fellowship</p>
                </div>
            </a>

            <div class="hidden lg:flex items-center space-x-1">
                <a href="/" class="nav-link text-white/80 hover:text-white transition px-4 py-2 text-sm font-sans font-medium {{ request()->routeIs('home') ? 'text-wccf-gold' : '' }}">Home</a>
                <a href="/about" class="nav-link text-white/80 hover:text-white transition px-4 py-2 text-sm font-sans font-medium {{ request()->routeIs('about') ? 'text-wccf-gold' : '' }}">About</a>
                <a href="/members" class="nav-link text-white/80 hover:text-white transition px-4 py-2 text-sm font-sans font-medium {{ request()->routeIs('members') ? 'text-wccf-gold' : '' }}">Member Churches</a>
                <a href="/events" class="nav-link text-white/80 hover:text-white transition px-4 py-2 text-sm font-sans font-medium {{ request()->routeIs('events') ? 'text-wccf-gold' : '' }}">Events</a>
                <a href="/gallery" class="nav-link text-white/80 hover:text-white transition px-4 py-2 text-sm font-sans font-medium {{ request()->routeIs('gallery') ? 'text-wccf-gold' : '' }}">Gallery</a>
                <a href="/resources" class="nav-link text-white/80 hover:text-white transition px-4 py-2 text-sm font-sans font-medium {{ request()->routeIs('resources') ? 'text-wccf-gold' : '' }}">Resources</a>
                <a href="/news" class="nav-link text-white/80 hover:text-white transition px-4 py-2 text-sm font-sans font-medium {{ request()->routeIs('news*') ? 'text-wccf-gold' : '' }}">News</a>
                <a href="/donate" class="bg-wccf-primary-bright text-white font-sans font-semibold text-sm py-3 px-6 rounded-lg ml-4 hover:bg-white hover:text-wccf-primary-bright transition-colors">Donate</a>
            </div>

            <button id="mobile-menu-btn" class="lg:hidden p-2 relative z-50" @click="mobileOpen = !mobileOpen; if(mobileOpen) { document.body.classList.add('overflow-hidden') } else { document.body.classList.remove('overflow-hidden') }">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden" x-show="mobileOpen" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
        <div class="mobile-overlay absolute inset-0" @click="mobileOpen = false; document.body.classList.remove('overflow-hidden')"></div>
        <div class="absolute right-0 top-0 h-full w-72 bg-wccf-primary shadow-2xl">
            <div class="pt-24 px-6 space-y-1">
                <a href="/" class="block py-4 px-4 text-white/80 hover:text-white hover:bg-white/10 rounded-lg font-sans font-medium transition-colors {{ request()->routeIs('home') ? 'bg-white/10 text-wccf-gold' : '' }}">Home</a>
                <a href="/about" class="block py-4 px-4 text-white/80 hover:text-white hover:bg-white/10 rounded-lg font-sans font-medium transition-colors {{ request()->routeIs('about') ? 'bg-white/10 text-wccf-gold' : '' }}">About</a>
                <a href="/members" class="block py-4 px-4 text-white/80 hover:text-white hover:bg-white/10 rounded-lg font-sans font-medium transition-colors {{ request()->routeIs('members') ? 'bg-white/10 text-wccf-gold' : '' }}">Member Churches</a>
                <a href="/events" class="block py-4 px-4 text-white/80 hover:text-white hover:bg-white/10 rounded-lg font-sans font-medium transition-colors {{ request()->routeIs('events') ? 'bg-white/10 text-wccf-gold' : '' }}">Events</a>
                <a href="/gallery" class="block py-4 px-4 text-white/80 hover:text-white hover:bg-white/10 rounded-lg font-sans font-medium transition-colors {{ request()->routeIs('gallery') ? 'bg-white/10 text-wccf-gold' : '' }}">Gallery</a>
                <a href="/resources" class="block py-4 px-4 text-white/80 hover:text-white hover:bg-white/10 rounded-lg font-sans font-medium transition-colors {{ request()->routeIs('resources') ? 'bg-white/10 text-wccf-gold' : '' }}">Resources</a>
                <a href="/news" class="block py-4 px-4 text-white/80 hover:text-white hover:bg-white/10 rounded-lg font-sans font-medium transition-colors {{ request()->routeIs('news*') ? 'bg-white/10 text-wccf-gold' : '' }}">News</a>
                <div class="pt-4 px-4">
                    <a href="/donate" class="block w-full py-4 bg-wccf-primary-bright text-white text-center rounded-lg font-sans font-semibold hover:bg-white hover:text-wccf-primary-bright transition-colors">Donate</a>
                </div>
            </div>
        </div>
    </div>
</nav>