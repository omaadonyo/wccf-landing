@extends('layouts.website')

@section('title', 'Resources')
@section('description', 'Access sermons, Bible studies, and resources supporting the WCCF mega church vision.')

@section('content')

    <section class="relative pt-32 pb-20 wccf-gradient">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Resources</span>
            </nav>
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-4">Resources</h1>
            <div class="gold-line mx-auto"></div>
            <p class="text-white/80 text-lg max-w-3xl mx-auto mt-6">Access sermons, Bible studies, and materials to support your faith and the mega church vision.</p>
        </div>
    </section>

    <section class="py-8 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-3">
                <button class="px-6 py-2 bg-wccf-primary text-white rounded-full text-sm font-medium transition-colors">All Resources</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Sermons</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Bible Studies</button>
                <button class="px-6 py-2 bg-white text-wccf-gray border border-gray-200 rounded-full text-sm font-medium hover:bg-wccf-primary hover:text-white hover:border-wccf-primary transition-colors">Building Project</button>
            </div>
        </div>
    </section>

    <section class="py-16 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-3 bg-wccf-primary"></div>
                    <div class="p-6">
                        <span class="inline-block bg-wccf-primary/10 text-wccf-primary text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Sermon</span>
                        <h3 class="font-heading text-xl font-bold text-wccf-primary mt-3">Building for God's Glory</h3>
                        <p class="text-wccf-gray text-sm mt-2 leading-relaxed">A vision sermon on the biblical mandate to build houses of worship for the glory of God.</p>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs text-wccf-gray">Pastor John Mawa • 45 min</span>
                            <div class="flex gap-2">
                                <a href="#" class="p-2 text-wccf-primary hover:text-wccf-gold transition-colors" title="View">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </a>
                                <a href="#" class="p-2 text-wccf-primary hover:text-wccf-gold transition-colors" title="Download">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-3 bg-wccf-gold"></div>
                    <div class="p-6">
                        <span class="inline-block bg-wccf-gold/10 text-wccf-gold text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Bible Study</span>
                        <h3 class="font-heading text-xl font-bold text-wccf-primary mt-3">The Temple of God</h3>
                        <p class="text-wccf-gray text-sm mt-2 leading-relaxed">A Bible study series exploring the significance of God's house from the tabernacle to the modern church.</p>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs text-wccf-gray">Rev. Jane Smith • 6 sessions</span>
                            <div class="flex gap-2">
                                <a href="#" class="p-2 text-wccf-primary hover:text-wccf-gold transition-colors" title="View">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </a>
                                <a href="#" class="p-2 text-wccf-primary hover:text-wccf-gold transition-colors" title="Download">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover reveal">
                    <div class="h-3 bg-wccf-primary"></div>
                    <div class="p-6">
                        <span class="inline-block bg-wccf-primary/10 text-wccf-primary text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Building Project</span>
                        <h3 class="font-heading text-xl font-bold text-wccf-primary mt-3">Mega Church Project Overview</h3>
                        <p class="text-wccf-gray text-sm mt-2 leading-relaxed">A comprehensive overview of the WCCF mega church building project including plans, timeline, and budget.</p>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs text-wccf-gray">WCCF • 2026</span>
                            <div class="flex gap-2">
                                <a href="#" class="p-2 text-wccf-primary hover:text-wccf-gold transition-colors" title="View">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </a>
                                <a href="#" class="p-2 text-wccf-primary hover:text-wccf-gold transition-colors" title="Download">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection