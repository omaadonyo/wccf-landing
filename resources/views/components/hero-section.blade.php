<section class="relative min-h-screen flex items-center justify-center overflow-hidden" x-data="{ active: 0, images: [
    '{{ asset('images/image-01.jpg') }}',
    '{{ asset('images/image-02.jpg') }}',
    '{{ asset('images/image-21.jpg') }}'
] }" x-init="setInterval(() => { active = (active + 1) % images.length }, 5000)">
    <template x-for="(img, index) in images" :key="index">
        <div class="absolute inset-0 transition-all duration-1000 ease-in-out" x-show="active === index" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 scale-110" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-700" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
            <img :src="img" alt="" class="w-full h-full object-cover">
        </div>
    </template>

    <div class="absolute inset-0 hero-overlay"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
        <div class="reveal">
            <span class="inline-block text-wccf-gold text-sm md:text-base tracking-[4px] uppercase font-medium mb-6">WCCF Mega Church Fundraising Campaign</span>

            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl xl:text-7xl text-white leading-tight mb-6">
                Help Us Build a Mega Church<br>for the Glory of God
            </h1>

            <p class="text-white/80 text-base md:text-lg max-w-3xl mx-auto mb-10 leading-relaxed">
                For over 35 years, WCCF has united 70+ churches across West Nile. Now we are building a 5,000-seat sanctuary and community center — and we need your help. Every donation brings us closer to breaking ground on this historic faith project.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/donate" class="btn-gold">Donate Now</a>
                <a href="{{ route('about') }}" class="btn-outline">Learn About the Project</a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-2 z-10">
        <template x-for="(img, index) in images" :key="index">
            <button @click="active = index" class="w-3 h-3 rounded-full transition-all duration-300" :class="active === index ? 'bg-wccf-gold w-8' : 'bg-white/40 hover:bg-white/60'"></button>
        </template>
    </div>
</section>