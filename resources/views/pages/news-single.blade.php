@extends('layouts.website')

@section('title', $post->title)
@section('description', $post->excerpt)

@push('meta')
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ $post->excerpt }}">
    @if($post->featured_image)
        <meta property="og:image" content="{{ asset($post->featured_image) }}">
    @endif
@endpush

@push('scripts')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "NewsArticle",
        "headline": "{{ $post->title }}",
        "description": "{{ $post->excerpt }}",
        "author": { "@@type": "Person", "name": "{{ $post->author ?? 'WCCF' }}" },
        "datePublished": "{{ $post->published_at?->toIso8601String() }}",
        "publisher": { "@@type": "Organization", "name": "WCCF" }
    }
    </script>
@endpush

@section('content')

    <section class="relative pt-32 pb-20 wccf-gradient">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <a href="{{ route('news') }}" class="hover:text-wccf-gold transition-colors">News</a>
                <span>/</span>
                <span class="text-white">{{ $post->title }}</span>
            </nav>
            <h1 class="font-heading font-bold text-3xl md:text-4xl lg:text-5xl text-white mb-4">{{ $post->title }}</h1>
            <div class="gold-line mx-auto"></div>
            <div class="flex items-center justify-center gap-4 mt-6 text-white/70 text-sm">
                @if($post->author)
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        {{ $post->author }}
                    </span>
                @endif
                @if($post->published_at)
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        {{ $post->published_at->format('F d, Y') }}
                    </span>
                @endif
                @if($post->category)
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                        {{ ucfirst($post->category) }}
                    </span>
                @endif
            </div>
        </div>
    </section>

    <article class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            @if($post->featured_image)
                <div class="rounded-xl overflow-hidden mb-10 shadow-lg">
                    <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto">
                </div>
            @endif

            <div class="prose prose-lg max-w-none">
                {!! nl2br(e($post->content)) !!}
            </div>

            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <a href="{{ route('news') }}" class="inline-flex items-center text-wccf-primary font-medium hover:text-wccf-gold transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m0 0l7 7m-7-7l7-7"/></svg>
                        Back to News
                    </a>
                    <a href="{{ route('donate') }}" class="inline-flex items-center bg-wccf-gold text-wccf-text font-semibold py-2 px-6 rounded-lg hover:bg-wccf-primary hover:text-white transition-colors">
                        Support the Project
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </article>
@endsection
