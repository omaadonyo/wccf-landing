@extends('layouts.website')

@section('title', 'Member Churches')
@section('description', 'Browse our network of over 70 member churches across the West Nile region of Uganda.')

@section('content')

    <!-- Hero Banner -->
    <section class="relative pt-32 pb-20 wccf-gradient">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Member Churches</span>
            </nav>
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-4">Member Churches</h1>
            <div class="gold-line mx-auto"></div>
            <p class="text-white/80 text-lg max-w-3xl mx-auto mt-6">Discover our network of over 70 member churches united in fellowship across the West Nile region.</p>
        </div>
    </section>

    <!-- Search & Filter -->
    <section class="py-8 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-center">
                <div class="relative flex-1 max-w-md w-full">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-wccf-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input type="text" placeholder="Search churches..." class="w-full pl-12 pr-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-wccf-gold focus:ring-1 focus:ring-wccf-gold transition-colors">
                </div>
                <select class="w-full md:w-auto px-6 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-wccf-gold focus:ring-1 focus:ring-wccf-gold transition-colors bg-white text-wccf-gray">
                    <option value="">All Regions</option>
                    <option value="arua">Arua</option>
                    <option value="koboko">Koboko</option>
                    <option value="yumbe">Yumbe</option>
                    <option value="moyo">Moyo</option>
                    <option value="adjumani">Adjumani</option>
                    <option value="nebbi">Nebbi</option>
                    <option value="zombo">Zombo</option>
                    <option value="pakwach">Pakwach</option>
                </select>
                <select class="w-full md:w-auto px-6 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-wccf-gold focus:ring-1 focus:ring-wccf-gold transition-colors bg-white text-wccf-gray">
                    <option value="">All Districts</option>
                    <option value="arua-city">Arua City</option>
                    <option value="arua-district">Arua District</option>
                    <option value="koboko">Koboko</option>
                    <option value="yumbe">Yumbe</option>
                    <option value="moyo">Moyo</option>
                    <option value="adjumani">Adjumani</option>
                    <option value="nebbi">Nebbi</option>
                    <option value="zombo">Zombo</option>
                    <option value="pakwach">Pakwach</option>
                </select>
                <button class="btn-primary w-full md:w-auto text-center">Search</button>
            </div>
        </div>
    </section>

    <!-- Church Grid -->
    <section class="py-16 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-44 overflow-hidden">
                        <img src="{{ asset('images/image-01.jpg') }}" alt="Christ's Victory Church" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Christ's Victory Church</h3>
                        <span class="inline-block bg-wccf-primary/10 text-wccf-primary text-xs font-medium px-3 py-1 rounded-full mt-2">Arua City</span>
                        <div class="mt-4 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                Pastor John Mawa
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                +256 772 000 000
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-44 overflow-hidden">
                        <img src="{{ asset('images/image-02.jpg') }}" alt="Cornerstone Assembly" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Cornerstone Assembly</h3>
                        <span class="inline-block bg-wccf-gold/10 text-wccf-gold text-xs font-medium px-3 py-1 rounded-full mt-2">Koboko</span>
                        <div class="mt-4 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                Pastor Grace Akello
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                +256 771 000 000
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-44 overflow-hidden">
                        <img src="{{ asset('images/image-03.jpg') }}" alt="Living Water Church" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Living Water Church</h3>
                        <span class="inline-block bg-wccf-primary/10 text-wccf-primary text-xs font-medium px-3 py-1 rounded-full mt-2">Yumbe</span>
                        <div class="mt-4 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                Pastor David Opiyo
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                +256 773 000 000
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-44 overflow-hidden">
                        <img src="{{ asset('images/image-04.jpg') }}" alt="Bethel Ministries" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Bethel Ministries</h3>
                        <span class="inline-block bg-wccf-primary/10 text-wccf-primary text-xs font-medium px-3 py-1 rounded-full mt-2">Moyo</span>
                        <div class="mt-4 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                Pastor Sarah Nyakuni
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                +256 774 000 000
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-44 overflow-hidden">
                        <img src="{{ asset('images/image-05.jpg') }}" alt="Grace Fellowship Church" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Grace Fellowship Church</h3>
                        <span class="inline-block bg-wccf-gold/10 text-wccf-gold text-xs font-medium px-3 py-1 rounded-full mt-2">Adjumani</span>
                        <div class="mt-4 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                Pastor Michael Angucia
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                +256 775 000 000
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-44 overflow-hidden">
                        <img src="{{ asset('images/image-06.jpg') }}" alt="Zion Baptist Church" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary">Zion Baptist Church</h3>
                        <span class="inline-block bg-wccf-primary/10 text-wccf-primary text-xs font-medium px-3 py-1 rounded-full mt-2">Nebbi</span>
                        <div class="mt-4 space-y-2 text-sm text-wccf-gray">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                Pastor Peter Oyet
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-wccf-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                +256 776 000 000
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination placeholder -->
            <div class="mt-12 flex justify-center reveal">
                <nav class="flex items-center gap-2">
                    <span class="px-4 py-2 bg-wccf-primary text-white rounded-lg text-sm font-medium">1</span>
                    <a href="#" class="px-4 py-2 bg-white text-wccf-gray rounded-lg text-sm font-medium hover:bg-wccf-primary hover:text-white transition-colors">2</a>
                    <a href="#" class="px-4 py-2 bg-white text-wccf-gray rounded-lg text-sm font-medium hover:bg-wccf-primary hover:text-white transition-colors">3</a>
                    <span class="px-2 text-wccf-gray">...</span>
                    <a href="#" class="px-4 py-2 bg-white text-wccf-gray rounded-lg text-sm font-medium hover:bg-wccf-primary hover:text-white transition-colors">8</a>
                    <a href="#" class="px-3 py-2 bg-white text-wccf-gray rounded-lg text-sm font-medium hover:bg-wccf-primary hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </nav>
            </div>
        </div>
    </section>
@endsection
