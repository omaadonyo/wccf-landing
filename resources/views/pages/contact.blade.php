@extends('layouts.website')

@section('title', 'Contact Us')
@section('description', 'Get in touch with West Nile Christian Community Fellowship. Find our address, phone, email and send us a message.')

@section('content')

    <!-- Hero Banner -->
    <section class="relative pt-32 pb-20 wccf-gradient">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="flex justify-center items-center space-x-2 text-white/60 text-sm mb-4">
                <a href="{{ route('home') }}" class="hover:text-wccf-gold transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Contact Us</span>
            </nav>
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-4">Contact Us</h1>
            <div class="gold-line mx-auto"></div>
            <p class="text-white/80 text-lg max-w-3xl mx-auto mt-6">We would love to hear from you. Reach out to us with any questions, prayer requests, or partnership inquiries.</p>
        </div>
    </section>

    <!-- Contact Information & Form -->
    <section class="py-20 bg-wccf-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left: Contact Information -->
                <div class="reveal">
                    <h2 class="font-heading font-bold text-3xl text-wccf-primary mb-2">Get in Touch</h2>
                    <div class="gold-line mb-6"></div>
                    <p class="text-wccf-gray mb-8 leading-relaxed">We are here to serve you. Whether you have a prayer request, want to join our fellowship, or have questions about our ministry, please don't hesitate to contact us.</p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-wccf-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-wccf-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-heading text-lg font-bold text-wccf-primary">Our Address</h3>
                                <p class="text-wccf-gray mt-1">WCCF Headquarters<br>Plot 5, Arua - Gulu Road<br>P.O. Box 123, Arua City<br>West Nile, Uganda</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-wccf-gold/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-wccf-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-heading text-lg font-bold text-wccf-primary">Phone</h3>
                                <p class="text-wccf-gray mt-1">
                                    +256 (0) 772 000 000<br>
                                    +256 (0) 771 000 000
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-wccf-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-wccf-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-heading text-lg font-bold text-wccf-primary">Email</h3>
                                <p class="text-wccf-gray mt-1">
                                    info@wccfuganda.org<br>
                                    admin@wccfuganda.org
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-wccf-gold/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-wccf-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-heading text-lg font-bold text-wccf-primary">Office Hours</h3>
                                <p class="text-wccf-gray mt-1">
                                    Monday - Friday: 8:00 AM - 5:00 PM<br>
                                    Saturday: 9:00 AM - 1:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <h3 class="font-heading text-lg font-bold text-wccf-primary mb-4">Follow Us</h3>
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 bg-wccf-primary text-white rounded-full flex items-center justify-center hover:bg-wccf-gold hover:text-wccf-text transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-wccf-primary text-white rounded-full flex items-center justify-center hover:bg-wccf-gold hover:text-wccf-text transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-wccf-primary text-white rounded-full flex items-center justify-center hover:bg-wccf-gold hover:text-wccf-text transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm4.441 16.892c-2.102.144-6.784.144-8.883 0C5.282 16.736 5.017 15.622 5 12c.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.784-.144 8.883 0C18.718 7.264 18.983 8.378 19 12c-.017 3.629-.285 4.736-2.559 4.892zM10 9.658l4.917 2.338L10 14.342V9.658z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-wccf-primary text-white rounded-full flex items-center justify-center hover:bg-wccf-gold hover:text-wccf-text transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="reveal">
                    <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">
                        <h2 class="font-heading font-bold text-3xl text-wccf-primary mb-2">Send Us a Message</h2>
                        <div class="gold-line mb-6"></div>
                        <p class="text-wccf-gray mb-6">Fill out the form below and we will get back to you as soon as possible.</p>

                        @if(session('success'))
                            <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg mb-6 flex items-center gap-3">
                                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        <form action="/contact" method="POST" class="space-y-5">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-wccf-text mb-1.5">Full Name *</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-wccf-gold focus:ring-1 focus:ring-wccf-gold transition-colors"
                                        placeholder="Your full name">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-wccf-text mb-1.5">Email Address *</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-wccf-gold focus:ring-1 focus:ring-wccf-gold transition-colors"
                                        placeholder="your@email.com">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-wccf-text mb-1.5">Phone Number</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-wccf-gold focus:ring-1 focus:ring-wccf-gold transition-colors"
                                        placeholder="+256 XXX XXX XXX">
                                </div>
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-wccf-text mb-1.5">Subject *</label>
                                    <select id="subject" name="subject" required
                                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-wccf-gold focus:ring-1 focus:ring-wccf-gold transition-colors bg-white">
                                        <option value="">Select a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="prayer">Prayer Request</option>
                                        <option value="partnership">Partnership</option>
                                        <option value="membership">Membership</option>
                                        <option value="feedback">Feedback</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-wccf-text mb-1.5">Message *</label>
                                <textarea id="message" name="message" rows="6" required
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-wccf-gold focus:ring-1 focus:ring-wccf-gold transition-colors resize-none"
                                    placeholder="Write your message here..."></textarea>
                            </div>

                            <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Placeholder -->
    <section class="h-96 bg-wccf-gradient relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div style="background-image: url('{{ asset('images/image-21.jpg') }}'); background-size: cover; background-position: center;" class="w-full h-full"></div>
        </div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                <svg class="w-16 h-16 text-white/60 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <p class="text-white/80 text-lg font-heading font-bold">Interactive Map Coming Soon</p>
                <p class="text-white/60 text-sm mt-1">Plot 5, Arua - Gulu Road, Arua City, Uganda</p>
            </div>
        </div>
    </section>
@endsection
