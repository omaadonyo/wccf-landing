@extends('layouts.website')

@section('title', 'News')
@section('description', 'Latest news and updates from WCCF about the mega church building project, events, fellowship stories, and community impact.')

@section('content')

    <section class="relative pt-32 pb-20 wccf-gradient">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">News</span>
            </nav>
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-4">News & Updates</h1>
            <div class="gold-line mx-auto"></div>
            <p class="text-white/80 text-lg max-w-3xl mx-auto mt-6">Stay informed with the latest news from the WCCF community and mega church project.</p>
        </div>
    </section>

    <section class="py-16 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            @if($posts->count())
                <div class="space-y-6">
                    @foreach($posts as $post)
                        <article class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal md:flex">
                            <a href="{{ route('news.show', $post->slug) }}" class="md:w-72 lg:w-80 flex-shrink-0 block">
                                <div class="h-56 md:h-full bg-wccf-primary/10 overflow-hidden">
                                    @if($post->featured_image)
                                        <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center">
                                            <svg class="w-16 h-16 text-wccf-primary/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                            </a>
                            <div class="p-6 md:p-8 flex flex-col justify-center flex-1">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xs text-wccf-gold font-semibold uppercase tracking-wider">{{ $post->category }}</span>
                                    <span class="text-wccf-gray text-xs">&middot;</span>
                                    <span class="text-wccf-gray text-xs">{{ $post->published_at?->format('M d, Y') }}</span>
                                </div>
                                <a href="{{ route('news.show', $post->slug) }}">
                                    <h3 class="font-heading text-xl md:text-2xl font-bold text-wccf-primary hover:text-wccf-gold transition-colors">{{ $post->title }}</h3>
                                </a>
                                <p class="text-wccf-gray text-sm mt-3 leading-relaxed line-clamp-3">{{ $post->excerpt }}</p>
                                <a href="{{ route('news.show', $post->slug) }}" class="mt-4 inline-flex items-center text-wccf-primary font-medium text-sm hover:text-wccf-gold transition-colors">
                                    Read More
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="text-center py-20">
                    <svg class="w-20 h-20 text-wccf-primary/30 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <h3 class="font-heading text-2xl font-bold text-wccf-primary mb-2">No News Yet</h3>
                    <p class="text-wccf-gray">Check back soon for updates on the mega church project.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
