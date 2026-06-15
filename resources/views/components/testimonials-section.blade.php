<section class="wccf-gradient py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 right-20 w-72 h-72 border border-wccf-gold rounded-full"></div>
        <div class="absolute bottom-20 left-20 w-48 h-48 border border-wccf-gold rounded-full"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4">
        <div class="reveal text-center mb-16">
            <span class="text-wccf-gold text-sm md:text-base tracking-[4px] uppercase font-medium">Testimonials</span>
            <div class="flex justify-center mt-3 mb-4">
                <span class="gold-line"></span>
            </div>
            <h2 class="font-heading text-4xl md:text-5xl text-white mt-4">What People Say</h2>
        </div>

        <div x-data="{ activeSlide: 0, slides: ['slide-0', 'slide-1', 'slide-2'] }" class="relative max-w-4xl mx-auto">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                    <div class="min-w-full px-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-wccf-gold/60 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.433.917-3.995 3.638-3.995 5.849h4v10H0z"/>
                            </svg>
                            <p class="text-white/90 text-lg md:text-xl leading-relaxed mb-8 italic">"WCCF has been a tremendous blessing to our church. The fellowship, unity, and shared vision for the Gospel have strengthened our congregation and expanded our impact in the community."</p>
                            <div class="w-16 h-16 rounded-full bg-wccf-gold/20 mx-auto mb-4 flex items-center justify-center">
                                <span class="font-heading text-wccf-gold text-2xl font-bold">JP</span>
                            </div>
                            <h4 class="font-heading text-xl text-white">Rev. John Peter</h4>
                            <p class="text-wccf-gold text-sm mt-1">Senior Pastor, Victory Church</p>
                        </div>
                    </div>

                    <div class="min-w-full px-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-wccf-gold/60 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.433.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H0z"/>
                            </svg>
                            <p class="text-white/90 text-lg md:text-xl leading-relaxed mb-8 italic">"Being part of WCCF has opened our eyes to the beauty of unity across denominations. The conferences and fellowship meetings have been a source of great spiritual renewal for our members."</p>
                            <div class="w-16 h-16 rounded-full bg-wccf-gold/20 mx-auto mb-4 flex items-center justify-center">
                                <span class="font-heading text-wccf-gold text-2xl font-bold">SA</span>
                            </div>
                            <h4 class="font-heading text-xl text-white">Sarah Akello</h4>
                            <p class="text-wccf-gold text-sm mt-1">Women's Ministry Leader</p>
                        </div>
                    </div>

                    <div class="min-w-full px-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-wccf-gold/60 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.433.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H0z"/>
                            </svg>
                            <p class="text-white/90 text-lg md:text-xl leading-relaxed mb-8 italic">"WCCF's community outreach programs have transformed our local area. Through their support, we have been able to reach hundreds of families with both spiritual and practical help."</p>
                            <div class="w-16 h-16 rounded-full bg-wccf-gold/20 mx-auto mb-4 flex items-center justify-center">
                                <span class="font-heading text-wccf-gold text-2xl font-bold">MO</span>
                            </div>
                            <h4 class="font-heading text-xl text-white">Mark Okello</h4>
                            <p class="text-wccf-gold text-sm mt-1">Community Development Coordinator</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-10 gap-3">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index" class="w-3 h-3 rounded-full transition-all duration-300" :class="activeSlide === index ? 'bg-wccf-gold w-8' : 'bg-white/30 hover:bg-white/50'" :aria-label="'Go to slide ' + (index + 1)"></button>
                </template>
            </div>
        </div>
    </div>
</section>
