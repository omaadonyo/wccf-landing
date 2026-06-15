@extends('layouts.website')

@section('title', 'Gallery')
@section('description', 'Browse photos from WCCF events, conferences, and the mega church building project.')

@section('content')

    <section class="relative pt-32 pb-20 wccf-gradient">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Gallery</span>
            </nav>
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-4">Gallery</h1>
            <div class="gold-line mx-auto"></div>
            <p class="text-white/80 text-lg max-w-3xl mx-auto mt-6">Moments from our fellowship, conferences, and the journey to build the mega church.</p>
        </div>
    </section>

    <section class="py-8 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-3">
                <button class="px-6 py-2 bg-wccf-primary text-white rounded-full text-sm font-medium transition-colors">All</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Fellowship</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Conferences</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Worship</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Building Project</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Outreach</button>
            </div>
        </div>
    </section>

    <section class="py-16 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4" x-data="{ lightboxOpen: false, current: 0, images: [
            { src: '{{ asset('images/image-01.jpg') }}', title: 'WCCF Conference', cat: 'Conference' },
            { src: '{{ asset('images/image-02.jpg') }}', title: 'Fellowship Gathering', cat: 'Fellowship' },
            { src: '{{ asset('images/image-03.jpg') }}', title: 'Worship Service', cat: 'Worship' },
            { src: '{{ asset('images/image-04.jpg') }}', title: 'Community Outreach', cat: 'Outreach' },
            { src: '{{ asset('images/image-05.jpg') }}', title: 'Leadership Retreat', cat: 'Conference' },
            { src: '{{ asset('images/image-06.jpg') }}', title: 'Prayer Gathering', cat: 'Fellowship' },
            { src: '{{ asset('images/image-07.jpg') }}', title: 'Groundbreaking Ceremony', cat: 'Building Project' },
            { src: '{{ asset('images/image-08.jpg') }}', title: 'Choir Performance', cat: 'Worship' },
            { src: '{{ asset('images/image-09.jpg') }}', title: 'Fellowship Dinner', cat: 'Fellowship' },
            { src: '{{ asset('images/image-10.jpg') }}', title: 'Bible Study', cat: 'Conference' },
            { src: '{{ asset('images/image-11.jpg') }}', title: 'Conference Session', cat: 'Conference' },
            { src: '{{ asset('images/image-12.jpg') }}', title: 'Pastors Meeting', cat: 'Fellowship' },
            { src: '{{ asset('images/image-13.jpg') }}', title: 'Site Visit', cat: 'Building Project' },
            { src: '{{ asset('images/image-14.jpg') }}', title: 'Music Workshop', cat: 'Worship' },
            { src: '{{ asset('images/image-15.jpg') }}', title: 'Children Ministry', cat: 'Outreach' }
        ] }">
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                <template x-for="(img, index) in images" :key="index">
                    <div class="break-inside-avoid bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal relative group cursor-pointer" @click="current = index; lightboxOpen = true">
                        <img :src="img.src" :alt="img.title" class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-wccf-primary/70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="text-center text-white p-4">
                                <svg class="w-10 h-10 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                <span class="block font-medium" x-text="img.title"></span>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>
@endsection