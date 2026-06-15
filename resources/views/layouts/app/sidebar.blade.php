<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky collapsible="mobile" class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.header>
                <x-app-logo :sidebar="true" href="{{ route('dashboard') }}" wire:navigate />
                <flux:sidebar.collapse class="lg:hidden" />
            </flux:sidebar.header>

            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Dashboard')" class="grid">
                    <flux:sidebar.item icon="layout-grid" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Overview') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Page Content')" class="grid">
                    @php $currentPage = request()->route('page'); @endphp
                    <flux:sidebar.item icon="file-text" :href="route('dashboard.content', 'home')" :current="request()->routeIs('dashboard.content') && $currentPage === 'home'" wire:navigate>
                        {{ __('Home Page') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="file-text" :href="route('dashboard.content', 'about')" :current="request()->routeIs('dashboard.content') && $currentPage === 'about'" wire:navigate>
                        {{ __('About Page') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="file-text" :href="route('dashboard.content', 'members')" :current="request()->routeIs('dashboard.content') && $currentPage === 'members'" wire:navigate>
                        {{ __('Member Churches') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="file-text" :href="route('dashboard.content', 'events')" :current="request()->routeIs('dashboard.content') && $currentPage === 'events'" wire:navigate>
                        {{ __('Events Page') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="file-text" :href="route('dashboard.content', 'gallery')" :current="request()->routeIs('dashboard.content') && $currentPage === 'gallery'" wire:navigate>
                        {{ __('Gallery Page') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="file-text" :href="route('dashboard.content', 'resources')" :current="request()->routeIs('dashboard.content') && $currentPage === 'resources'" wire:navigate>
                        {{ __('Resources Page') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="file-text" :href="route('dashboard.content', 'donate')" :current="request()->routeIs('dashboard.content') && $currentPage === 'donate'" wire:navigate>
                        {{ __('Donate Page') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="file-text" :href="route('dashboard.content', 'contact')" :current="request()->routeIs('dashboard.content') && $currentPage === 'contact'" wire:navigate>
                        {{ __('Contact Page') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Manage Content')" class="grid">
                    <flux:sidebar.item icon="building-2" :href="route('dashboard.churches')" :current="request()->routeIs('dashboard.churches*')" wire:navigate>
                        {{ __('Churches') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="calendar" :href="route('dashboard.events')" :current="request()->routeIs('dashboard.events*')" wire:navigate>
                        {{ __('Events') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="images" :href="route('dashboard.gallery')" :current="request()->routeIs('dashboard.gallery*')" wire:navigate>
                        {{ __('Gallery') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="users" :href="route('dashboard.leadership')" :current="request()->routeIs('dashboard.leadership*')" wire:navigate>
                        {{ __('Leadership') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="handshake" :href="route('dashboard.partners')" :current="request()->routeIs('dashboard.partners*')" wire:navigate>
                        {{ __('Partners') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="newspaper" :href="route('dashboard.posts')" :current="request()->routeIs('dashboard.posts*')" wire:navigate>
                        {{ __('News/Posts') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="book-open" :href="route('dashboard.resources')" :current="request()->routeIs('dashboard.resources*')" wire:navigate>
                        {{ __('Resources') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="mic" :href="route('dashboard.sermons')" :current="request()->routeIs('dashboard.sermons*')" wire:navigate>
                        {{ __('Sermons') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="star" :href="route('dashboard.testimonials')" :current="request()->routeIs('dashboard.testimonials*')" wire:navigate>
                        {{ __('Testimonials') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="message-square" :href="route('dashboard.contacts')" :current="request()->routeIs('dashboard.contacts*')" wire:navigate>
                        {{ __('Contact Messages') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <flux:spacer />

            <flux:sidebar.nav>
                <flux:sidebar.group class="grid">
                    <flux:sidebar.item icon="cog" :href="route('profile.edit')" :current="request()->routeIs('profile.edit')" wire:navigate>
                        {{ __('Settings') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="arrow-up-right-from-square" href="{{ url('/') }}" target="_blank">
                        {{ __('View Site') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <flux:avatar
                                    :name="auth()->user()->name"
                                    :initials="auth()->user()->initials()"
                                />

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <flux:heading class="truncate">{{ auth()->user()->name }}</flux:heading>
                                    <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                            {{ __('Settings') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item
                            as="button"
                            type="submit"
                            icon="arrow-right-start-on-rectangle"
                            class="w-full cursor-pointer"
                            data-test="logout-button"
                        >
                            {{ __('Log out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>
