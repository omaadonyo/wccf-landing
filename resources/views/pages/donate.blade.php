@extends('layouts.website')

@section('title', 'Donate')
@section('description', 'Support the WCCF Mega Church Building Fund. Your generous giving helps us build a 5,000-seat sanctuary for the West Nile region.')

@section('content')

    <section class="relative pt-32 pb-20">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/image-21.jpg') }}');"></div>
        <div class="absolute inset-0 wccf-gradient opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Donate</span>
            </nav>
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-4">Give to the Building Fund</h1>
            <div class="gold-line mx-auto"></div>
            <p class="text-white/80 text-lg max-w-3xl mx-auto mt-6">Your generosity is building a spiritual home for thousands across West Nile.</p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-wccf-bg rounded-2xl p-8 md:p-12 mb-12 reveal">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-wccf-primary font-bold text-lg">Building Fund Progress</span>
                        <span class="text-wccf-gold font-bold text-lg">UGX 500M / 5B</span>
                    </div>
                    <div class="w-full bg-white rounded-full h-6 overflow-hidden shadow-inner">
                        <div class="bg-wccf-gold h-full rounded-full transition-all duration-1000 flex items-center justify-end pr-3" style="width: 10%;">
                            <span class="text-wccf-text text-xs font-bold">10%</span>
                        </div>
                    </div>
                    <p class="text-wccf-gray text-sm mt-3">Help us reach our goal of UGX 5,000,000,000 to build a mega church for the glory of God.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden reveal">
                        <div class="h-40 overflow-hidden">
                            <img src="{{ asset('images/image-12.jpg') }}" alt="One-Time Gift" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-heading text-xl font-bold text-wccf-primary mb-2">One-Time Gift</h3>
                            <p class="text-wccf-gray text-sm mb-6">Make a single contribution to the building fund. Every shilling counts.</p>
                            <a href="#" class="block w-full bg-wccf-gold text-wccf-text font-semibold py-3 px-6 rounded-lg hover:bg-wccf-primary hover:text-white transition-colors">Give Now</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden reveal">
                        <div class="h-40 overflow-hidden">
                            <img src="{{ asset('images/image-13.jpg') }}" alt="Monthly Partner" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-heading text-xl font-bold text-wccf-primary mb-2">Monthly Partner</h3>
                            <p class="text-wccf-gray text-sm mb-6">Join our faithful monthly partners sustaining the project over time.</p>
                            <a href="#" class="block w-full bg-wccf-gold text-wccf-text font-semibold py-3 px-6 rounded-lg hover:bg-wccf-primary hover:text-white transition-colors">Become a Partner</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden reveal">
                        <div class="h-40 overflow-hidden">
                            <img src="{{ asset('images/image-14.jpg') }}" alt="Church Partnership" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-heading text-xl font-bold text-wccf-primary mb-2">Church Partnership</h3>
                            <p class="text-wccf-gray text-sm mb-6">Register your church as a partner congregation in the building project.</p>
                            <a href="#" class="block w-full bg-wccf-gold text-wccf-text font-semibold py-3 px-6 rounded-lg hover:bg-wccf-primary hover:text-white transition-colors">Register Church</a>
                        </div>
                    </div>
                </div>

                <div class="bg-wccf-bg rounded-2xl p-8 md:p-12 mb-12 reveal">
                    <h2 class="font-heading text-2xl font-bold text-wccf-primary mb-6 text-center">Bank Transfer Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h4 class="font-heading text-lg font-bold text-wccf-primary mb-3">UGX Account</h4>
                            <div class="space-y-2 text-sm text-wccf-gray">
                                <p><span class="font-semibold text-wccf-text">Bank:</span> Stanbic Bank Uganda</p>
                                <p><span class="font-semibold text-wccf-text">Account Name:</span> WCCF Mega Church Project</p>
                                <p><span class="font-semibold text-wccf-text">Account No:</span> 9030001234567</p>
                                <p><span class="font-semibold text-wccf-text">Branch:</span> Arua Main</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h4 class="font-heading text-lg font-bold text-wccf-primary mb-3">USD Account</h4>
                            <div class="space-y-2 text-sm text-wccf-gray">
                                <p><span class="font-semibold text-wccf-text">Bank:</span> Stanbic Bank Uganda</p>
                                <p><span class="font-semibold text-wccf-text">Account Name:</span> WCCF Mega Church Project</p>
                                <p><span class="font-semibold text-wccf-text">Account No:</span> 9030007654321</p>
                                <p><span class="font-semibold text-wccf-text">SWIFT:</span> SBICUGKX</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-wccf-gradient rounded-2xl p-8 md:p-12 text-white text-center reveal">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold mb-4">Every Gift Builds the Kingdom</h2>
                    <div class="gold-line mx-auto"></div>
                    <p class="text-white/80 max-w-2xl mx-auto mt-6 mb-8 leading-relaxed">"Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver." — 2 Corinthians 9:7</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="#" class="bg-wccf-gold text-wccf-text font-semibold py-3 px-8 rounded-lg hover:bg-white transition-colors">Give Online Now</a>
                        <a href="{{ route('contact') }}" class="border-2 border-white/40 text-white font-semibold py-3 px-8 rounded-lg hover:bg-white/10 transition-colors">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
