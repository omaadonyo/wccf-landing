@extends('layouts.website')

@section('title', 'About Us')
@section('description', 'Learn about West Nile Christian Community Fellowship - our history, mission, vision, and leadership.')

@section('content')

    <!-- Hero Banner -->
    <section class="relative pt-32 pb-20 wccf-gradient">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">About Us</span>
            </nav>
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-4">About Us</h1>
            <div class="gold-line mx-auto"></div>
        </div>
    </section>

    <!-- Organization History -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-wccf-primary mb-4">Our History</h2>
                <div class="gold-line mx-auto"></div>
            </div>

            <div class="relative">
                <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-wccf-gold/30 -translate-x-1/2"></div>

                <div class="space-y-12">
                    <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 reveal">
                        <div class="md:w-1/2 md:text-right">
                            <div class="bg-wccf-bg p-6 rounded-lg shadow-lg">
                                <span class="text-wccf-gold font-bold text-sm tracking-widest uppercase">1990</span>
                                <h3 class="font-heading text-xl font-bold text-wccf-primary mt-2">Foundation</h3>
                                <p class="text-wccf-gray mt-2 leading-relaxed">WCCF was founded by a group of visionary Christian leaders who recognized the need for unity among churches in the West Nile region of Uganda.</p>
                            </div>
                        </div>
                        <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-wccf-gold rounded-full border-4 border-white shadow -translate-x-1/2"></div>
                        <div class="md:w-1/2"></div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 reveal">
                        <div class="md:w-1/2"></div>
                        <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-wccf-gold rounded-full border-4 border-white shadow -translate-x-1/2"></div>
                        <div class="md:w-1/2">
                            <div class="bg-wccf-bg p-6 rounded-lg shadow-lg">
                                <span class="text-wccf-gold font-bold text-sm tracking-widest uppercase">2000</span>
                                <h3 class="font-heading text-xl font-bold text-wccf-primary mt-2">Growth & Expansion</h3>
                                <p class="text-wccf-gray mt-2 leading-relaxed">The fellowship expanded to include over 50 member churches, establishing regional networks across the West Nile sub-region.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 reveal">
                        <div class="md:w-1/2 md:text-right">
                            <div class="bg-wccf-bg p-6 rounded-lg shadow-lg">
                                <span class="text-wccf-gold font-bold text-sm tracking-widest uppercase">2010</span>
                                <h3 class="font-heading text-xl font-bold text-wccf-primary mt-2">Formal Registration</h3>
                                <p class="text-wccf-gray mt-2 leading-relaxed">WCCF Limited was formally registered as a faith-based umbrella organization, strengthening its governance and operational capacity.</p>
                            </div>
                        </div>
                        <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-wccf-gold rounded-full border-4 border-white shadow -translate-x-1/2"></div>
                        <div class="md:w-1/2"></div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 reveal">
                        <div class="md:w-1/2"></div>
                        <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-wccf-gold rounded-full border-4 border-white shadow -translate-x-1/2"></div>
                        <div class="md:w-1/2">
                            <div class="bg-wccf-bg p-6 rounded-lg shadow-lg">
                                <span class="text-wccf-gold font-bold text-sm tracking-widest uppercase">2020 - Present</span>
                                <h3 class="font-heading text-xl font-bold text-wccf-primary mt-2">Community Impact</h3>
                                <p class="text-wccf-gray mt-2 leading-relaxed">With over 70 member churches, WCCF continues to impact communities through fellowship, evangelism, worship, and community transformation initiatives.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 reveal">
                        <div class="md:w-1/2 md:text-right">
                            <div class="bg-wccf-bg p-6 rounded-lg shadow-lg border-l-4 border-wccf-gold">
                                <span class="text-wccf-gold font-bold text-sm tracking-widest uppercase">2026</span>
                                <h3 class="font-heading text-xl font-bold text-wccf-primary mt-2">Mega Church Project Launch</h3>
                                <p class="text-wccf-gray mt-2 leading-relaxed">WCCF launches the historic mega church building project — a 5,000-seat sanctuary and community center that will serve as a spiritual home for thousands across West Nile.</p>
                            </div>
                        </div>
                        <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-wccf-gold rounded-full border-4 border-white shadow -translate-x-1/2"></div>
                        <div class="md:w-1/2">
                            <div class="rounded-lg overflow-hidden shadow-lg">
                                <img src="{{ asset('images/image-17.jpg') }}" alt="Mega Church Project Groundbreaking" class="w-full h-48 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Core Values -->
    <section class="py-20 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-wccf-primary mb-4">Mission, Vision & Values</h2>
                <div class="gold-line mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover reveal">
                    <div class="w-16 h-16 bg-wccf-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-wccf-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-wccf-primary mb-4">Our Mission</h3>
                    <p class="text-wccf-gray leading-relaxed">To unite Christian churches in the West Nile region for collective fellowship, worship, evangelism, and community transformation, promoting renewed, healed and prayerful Christians.</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover reveal">
                    <div class="w-16 h-16 bg-wccf-gold/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-wccf-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-wccf-primary mb-4">Our Vision</h3>
                    <p class="text-wccf-gray leading-relaxed">A Christian community where churches are united in purpose, believers are spiritually renewed and healed, communities are transformed, and a mega church stands as a beacon of hope in West Nile.</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover reveal">
                    <div class="w-16 h-16 bg-wccf-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-wccf-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-wccf-primary mb-4">Core Values</h3>
                    <p class="text-wccf-gray leading-relaxed">Unity in diversity, Biblical faithfulness, Prayer and spiritual renewal, Community transformation, Integrity and transparency, Love and compassion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mega Church Project -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-wccf-primary mb-4">The Mega Church Project</h2>
                <div class="gold-line mx-auto"></div>
                <p class="text-wccf-gray max-w-3xl mx-auto mt-4">A historic faith initiative to build a 5,000-seat sanctuary and community center for the glory of God.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-wccf-bg rounded-lg shadow-lg overflow-hidden reveal">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ asset('images/image-18.jpg') }}" alt="Mega Church Rendering" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="font-heading text-xl font-bold text-wccf-primary mb-3">Why a Mega Church?</h3>
                        <p class="text-wccf-gray leading-relaxed">For 35+ years, WCCF has united over 70 churches without a permanent home. A mega church will provide a central house of worship, host conferences, train leaders, and serve the community — all under one roof for generations to come.</p>
                    </div>
                </div>

                <div class="bg-wccf-bg rounded-lg shadow-lg p-8 reveal">
                    <div class="w-16 h-16 bg-wccf-gold/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-wccf-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-xl font-bold text-wccf-primary mb-3">How You Can Help</h3>
                    <p class="text-wccf-gray leading-relaxed">Your prayers, donations, and partnership will make this vision a reality. Every contribution — whether one-time or monthly — brings us closer to breaking ground on this generational project.</p>
                    <a href="/donate" class="mt-4 inline-flex items-center text-wccf-primary font-semibold text-sm hover:text-wccf-gold transition-colors">
                        Give Now
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Objectives -->
    <section class="py-20 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-wccf-primary mb-4">Our Objectives</h2>
                <div class="gold-line mx-auto"></div>
                <p class="text-wccf-gray max-w-3xl mx-auto mt-4">The objectives for which the fellowship is established are outlined in our constitution.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <div class="flex items-start gap-4 p-6 bg-wccf-bg rounded-lg reveal">
                    <span class="flex-shrink-0 w-8 h-8 bg-wccf-primary text-white rounded-full flex items-center justify-center text-sm font-bold">1</span>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-wccf-primary">Fellowship & Unity</h4>
                        <p class="text-wccf-gray mt-1">To promote fellowship and unity among member churches in the West Nile region.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-wccf-bg rounded-lg reveal">
                    <span class="flex-shrink-0 w-8 h-8 bg-wccf-primary text-white rounded-full flex items-center justify-center text-sm font-bold">2</span>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-wccf-primary">Evangelism & Outreach</h4>
                        <p class="text-wccf-gray mt-1">To coordinate and support evangelism and outreach activities across the region.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-wccf-bg rounded-lg reveal">
                    <span class="flex-shrink-0 w-8 h-8 bg-wccf-primary text-white rounded-full flex items-center justify-center text-sm font-bold">3</span>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-wccf-primary">Worship & Prayer</h4>
                        <p class="text-wccf-gray mt-1">To organize joint worship services, prayer conferences, and spiritual renewal programs.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-wccf-bg rounded-lg reveal">
                    <span class="flex-shrink-0 w-8 h-8 bg-wccf-primary text-white rounded-full flex items-center justify-center text-sm font-bold">4</span>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-wccf-primary">Community Transformation</h4>
                        <p class="text-wccf-gray mt-1">To implement community development projects that demonstrate God's love in practical ways.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-wccf-bg rounded-lg reveal">
                    <span class="flex-shrink-0 w-8 h-8 bg-wccf-primary text-white rounded-full flex items-center justify-center text-sm font-bold">5</span>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-wccf-primary">Capacity Building</h4>
                        <p class="text-wccf-gray mt-1">To provide training and resources for church leaders and members to enhance ministry effectiveness.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-wccf-bg rounded-lg reveal">
                    <span class="flex-shrink-0 w-8 h-8 bg-wccf-primary text-white rounded-full flex items-center justify-center text-sm font-bold">6</span>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-wccf-primary">Advocacy & Representation</h4>
                        <p class="text-wccf-gray mt-1">To represent member churches in matters of common interest with government and other organizations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section class="py-20 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-wccf-primary mb-4">Our Leadership</h2>
                <div class="gold-line mx-auto"></div>
                <p class="text-wccf-gray max-w-3xl mx-auto mt-4">Meet the dedicated leaders guiding WCCF in fulfilling its mission.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover text-center reveal">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/image-19.jpg') }}" alt="Bishop John Doe" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="font-heading text-xl font-bold text-wccf-primary">Bishop John Doe</h4>
                        <span class="text-wccf-gold text-sm font-medium uppercase tracking-wider">Chairman</span>
                        <p class="text-wccf-gray mt-3 text-sm">Providing spiritual oversight and strategic direction for the fellowship.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover text-center reveal">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/image-20.jpg') }}" alt="Rev. Jane Smith" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="font-heading text-xl font-bold text-wccf-primary">Rev. Jane Smith</h4>
                        <span class="text-wccf-gold text-sm font-medium uppercase tracking-wider">Vice Chairperson</span>
                        <p class="text-wccf-gray mt-3 text-sm">Coordinating fellowship activities and supporting member churches.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover text-center reveal">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/image-22.jpg') }}" alt="Pastor Samuel O." class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="font-heading text-xl font-bold text-wccf-primary">Pastor Samuel O.</h4>
                        <span class="text-wccf-gold text-sm font-medium uppercase tracking-wider">General Secretary</span>
                        <p class="text-wccf-gray mt-3 text-sm">Managing day-to-day operations and administrative functions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Constitution Download -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="rounded-2xl overflow-hidden reveal relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/image-16.jpg') }}');"></div>
                <div class="absolute inset-0 bg-wccf-gradient opacity-95"></div>
                <div class="relative p-12 md:p-16 text-center">
                    <h2 class="font-heading font-bold text-3xl md:text-4xl text-white mb-4">Our Constitution</h2>
                    <div class="gold-line mx-auto"></div>
                    <p class="text-white/80 max-w-2xl mx-auto mt-6 mb-8 leading-relaxed">Download the WCCF constitution to learn more about our governance structure, bylaws, and operational guidelines.</p>
                    <a href="#" class="btn-gold inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Download Constitution (PDF)
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
