@extends('layouts.website')

@section('title', 'Events')
@section('description', 'Stay updated with upcoming WCCF events supporting our mega church vision.')

@section('content')

    <section class="relative pt-32 pb-20 wccf-gradient">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Events</span>
            </nav>
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-4">Events</h1>
            <div class="gold-line mx-auto"></div>
            <p class="text-white/80 text-lg max-w-3xl mx-auto mt-6">Join us in fellowship, worship, and the journey to build our mega church.</p>
        </div>
    </section>

    <section class="py-8 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-3">
                <button class="px-6 py-2 bg-wccf-primary text-white rounded-full text-sm font-medium transition-colors">All Events</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Conferences</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Fellowships</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Workshops</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Prayer Meetings</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Fundraisers</button>
            </div>
        </div>
    </section>

    <section class="py-16 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('images/image-10.jpg') }}" alt="Annual Conference" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-wccf-primary/40 flex items-center justify-center">
                            <div class="text-center text-white">
                                <span class="block text-3xl font-bold font-heading">25</span>
                                <span class="text-sm uppercase tracking-wider">June 2026</span>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-wccf-gold text-wccf-text text-xs font-bold px-3 py-1 rounded-full uppercase">Conference</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Annual WCCF Conference 2026</h3>
                        <div class="mt-3 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                June 25 - 27, 2026
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                Arua City, Uganda
                            </p>
                        </div>
                        <p class="text-wccf-gray text-sm mt-4 leading-relaxed">Join us for our annual gathering featuring the mega church fundraising launch.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-wccf-primary font-medium text-sm hover:text-wccf-gold transition-colors">
                            View Details
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('images/image-15.jpg') }}" alt="Fellowship Gathering" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-wccf-gold/30 flex items-center justify-center">
                            <div class="text-center text-wccf-text">
                                <span class="block text-3xl font-bold font-heading">12</span>
                                <span class="text-sm uppercase tracking-wider">July 2026</span>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-wccf-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Fellowship</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Quarterly Fellowship Gathering</h3>
                        <div class="mt-3 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                July 12, 2026
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                Koboko, Uganda
                            </p>
                        </div>
                        <p class="text-wccf-gray text-sm mt-4 leading-relaxed">A time of fellowship, prayer, and updates on the mega church construction progress.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-wccf-primary font-medium text-sm hover:text-wccf-gold transition-colors">
                            View Details
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('images/image-13.jpg') }}" alt="Fundraising Gala" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-wccf-primary/40 flex items-center justify-center">
                            <div class="text-center text-white">
                                <span class="block text-3xl font-bold font-heading">19</span>
                                <span class="text-sm uppercase tracking-wider">Aug 2026</span>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-wccf-gold text-wccf-text text-xs font-bold px-3 py-1 rounded-full uppercase">Fundraiser</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Mega Church Fundraising Gala</h3>
                        <div class="mt-3 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                August 19, 2026
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                Arua, Uganda
                            </p>
                        </div>
                        <p class="text-wccf-gray text-sm mt-4 leading-relaxed">A special fundraising evening to raise support for the mega church construction project.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-wccf-primary font-medium text-sm hover:text-wccf-gold transition-colors">
                            View Details
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection