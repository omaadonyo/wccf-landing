@extends('layouts.website')

@section('title', 'Home')

@section('content')
    <x-hero-section />

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <x-about-preview />
        </div>
    </section>

    <x-where-we-serve />

    <x-story-section />

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <x-values-section />
        </div>
    </section>

    <x-scripture-section />

    <section class="py-20 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <x-get-involved />
        </div>
    </section>

    <section class="py-20 bg-white" id="gallery">
        <div class="max-w-7xl mx-auto px-4" x-data="{ open: false, current: 0, images: [
            { src: '{{ asset('images/image-04.jpg') }}', title: 'WCCF Conference 2025', cat: 'Conference' },
            { src: '{{ asset('images/image-05.jpg') }}', title: 'Worship Night', cat: 'Worship' },
            { src: '{{ asset('images/image-06.jpg') }}', title: 'Youth Summit', cat: 'Fellowship' },
            { src: '{{ asset('images/image-07.jpg') }}', title: 'Community Outreach', cat: 'Outreach' },
            { src: '{{ asset('images/image-08.jpg') }}', title: 'Leadership Retreat', cat: 'Conference' },
            { src: '{{ asset('images/image-09.jpg') }}', title: 'Prayer Gathering', cat: 'Prayer' },
            { src: '{{ asset('images/image-10.jpg') }}', title: 'Mega Church Groundbreaking', cat: 'Events' },
            { src: '{{ asset('images/image-11.jpg') }}', title: 'Choir Performance', cat: 'Worship' },
            { src: '{{ asset('images/image-12.jpg') }}', title: 'Fellowship Dinner', cat: 'Fellowship' },
            { src: '{{ asset('images/image-13.jpg') }}', title: 'Bible Study Group', cat: 'Teaching' },
            { src: '{{ asset('images/image-14.jpg') }}', title: 'Conference Session', cat: 'Conference' },
            { src: '{{ asset('images/image-15.jpg') }}', title: 'Pastors Meeting', cat: 'Leadership' },
            { src: '{{ asset('images/image-16.jpg') }}', title: 'Festival Celebration', cat: 'Events' },
            { src: '{{ asset('images/image-17.jpg') }}', title: 'Music Workshop', cat: 'Workshop' },
            { src: '{{ asset('images/image-18.jpg') }}', title: 'Children Ministry', cat: 'Outreach' }
        ] }">
            <div class="reveal text-center mb-16">
                <span class="text-wccf-primary text-sm md:text-base tracking-[4px] uppercase font-medium">Our Work in Pictures</span>
                <div class="flex justify-center mt-3 mb-4">
                    <span class="gold-line"></span>
                </div>
                <h2 class="font-heading text-4xl md:text-5xl text-wccf-text mt-4">Building the Vision Together</h2>
                <p class="text-wccf-gray text-lg mt-4 max-w-3xl mx-auto">Moments from our fellowship, conferences, and the journey toward our mega church project.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 reveal">
                <template x-for="(img, index) in images" :key="index">
                    <div class="relative group cursor-pointer overflow-hidden rounded-lg aspect-[4/3]" @click="current = index; open = true">
                        <img :src="img.src" :alt="img.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-wccf-primary/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white p-2">
                                <svg class="w-8 h-8 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                <span class="text-xs font-medium" x-text="img.title"></span>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div class="mt-12 text-center reveal">
                <a href="{{ route('gallery') }}" class="btn-primary">View Full Gallery</a>
            </div>

            <template x-teleport="body">
                <div x-show="open" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center" @keydown.escape="open = false" @keydown.left="current = current > 0 ? current - 1 : images.length - 1" @keydown.right="current = current < images.length - 1 ? current + 1 : 0">
                    <div class="absolute inset-0 bg-black/90" @click="open = false"></div>
                    <button class="absolute top-6 right-6 text-white/70 hover:text-white z-10 transition-colors" @click="open = false">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    <button class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 text-white/70 hover:text-white z-10 transition-colors" @click="current = current > 0 ? current - 1 : images.length - 1">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 text-white/70 hover:text-white z-10 transition-colors" @click="current = current < images.length - 1 ? current + 1 : 0">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                    <div class="relative z-10 max-w-5xl mx-auto px-4 w-full">
                        <img :src="images[current].src" :alt="images[current].title" class="w-full max-h-[80vh] object-contain rounded-lg">
                        <div class="mt-4 text-center">
                            <h3 class="text-white font-heading text-xl font-bold" x-text="images[current].title"></h3>
                            <p class="text-wccf-gold text-sm mt-1" x-text="images[current].cat"></p>
                        </div>
                    </div>
                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white/60 text-sm">
                        <span x-text="current + 1"></span> / <span x-text="images.length"></span>
                    </div>
                </div>
            </template>
        </div>
    </section>

    <section class="py-20 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <x-events-section />
        </div>
    </section>

    <x-testimonials-section />
@endsection