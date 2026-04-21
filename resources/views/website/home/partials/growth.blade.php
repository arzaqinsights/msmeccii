<!-- CONFERENCE GROWTH SECTION (Homepage) -->
<section class="py-32 bg-[#fcfdfe] relative overflow-hidden">
    <!-- Premium Accents -->
    <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_10%_20%,#00336605_0%,transparent_50%)]"></div>
    <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-brand-primary/[0.03] rounded-full blur-[100px] animate-pulse"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-[400px] h-[400px] bg-brand-accent/[0.05] rounded-full blur-[80px]"></div>

    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Left Content -->
            <div class="w-full lg:w-1/3 text-left animate-on-scroll">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-brand-primary text-white rounded-full text-[10px] font-black uppercase tracking-widest mb-6 shadow-lg shadow-brand-primary/20">
                    <span class="w-2 h-2 bg-brand-accent rounded-full animate-ping"></span>
                    Live Trajectory
                </div>
                <h2 class="text-3xl md:text-5xl font-black text-brand-primary leading-[1] mb-8 tracking-tighter uppercase">
                    Charting Our <br/>
                    <span class="text-brand-accent italic">Success</span> In Global Conference & Expo
                </h2>
                <div class="space-y-6">
                    <p class="text-slate-500 font-medium text-lg leading-relaxed">
                        What started as a small gathering has evolved into a global powerhouse, connecting thousands of industry leaders.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <div class="flex flex-col">
                            <span class="text-3xl font-black text-brand-primary tracking-tighter italic">5.2X</span>
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Growth Factor</span>
                        </div>
                        <div class="w-px h-10 bg-slate-200"></div>
                        <div class="flex flex-col">
                            <span class="text-3xl font-black text-brand-primary tracking-tighter italic">1.8K+</span>
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Expected 2027</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content (Dynamic Staircase) -->
            <div class="w-full lg:w-2/3 relative group">
                <!-- Decorative Grid behind bars -->
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#00000005_1px,transparent_1px),linear-gradient(to_bottom,#00000005_1px,transparent_1px)] bg-[size:40px_40px] rounded-[50px] -m-8"></div>
                
                <div class="relative bg-white/40 backdrop-blur-sm border border-white rounded-2xl p-8 md:p-12 shadow-2xl shadow-brand-primary/5">
                    <div class="flex items-end justify-center gap-2 md:gap-5" style="min-height: 400px;">
                        @php 
                            $maxVal = $delegates->max(function($d) { 
                                return (int) preg_replace('/[^0-9]/', '', $d->value); 
                            }) ?: 1;
                        @endphp
                        @foreach($delegates as $index => $stat)
                            @php
                                $numericVal = (int) preg_replace('/[^0-9]/', '', $stat->value);
                                $percent = ($numericVal / $maxVal) * 100;
                                $h = max(25, $percent); 
                                $isLatest = ($index === count($delegates) - 1);
                            @endphp
                            <div class="flex-1 flex flex-col items-center group/bar cursor-pointer">
                                <!-- Year Badge -->
                                <div class="mb-5 transition-transform group-hover/bar:-translate-y-1">
                                    <span class="text-xs md:text-sm font-black {{ $isLatest ? 'text-brand-accent' : 'text-slate-400' }} tracking-widest">{{ $stat->year }}</span>
                                </div>

                                <!-- The Bar -->
                                <div class="w-full relative overflow-hidden shadow-lg group-hover/bar:shadow-2xl group-hover/bar:-translate-y-2 transition-all duration-500 border border-brand-primary/5 {{ $isLatest ? 'ring-4 ring-brand-accent/20' : '' }}"
                                     style="height: {{ ($h / 100) * 380 }}px; background: linear-gradient(180deg, {{ $isLatest ? '#1a3a66' : 'var(--color-brand-primary)' }} 0%, #001a33 100%);">
                                    
                                    <!-- Reflection Effect -->
                                    <div class="absolute top-0 left-0 w-full h-1/2 bg-gradient-to-b from-white/10 to-transparent"></div>

                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-1">
                                        <div class="text-lg md:text-2xl font-black text-white leading-none tracking-tighter {{ $isLatest ? 'text-brand-accent' : '' }}">{{ $stat->value }}</div>
                                        <div class="text-[6px] md:text-[8px] font-bold text-white/40 uppercase tracking-widest mt-2 border-t border-white/5 pt-2 hidden md:block">
                                            {{ $stat->label ?: 'Visitors' }}
                                        </div>
                                    </div>

                                    <!-- Bottom Light Gradient -->
                                    <div class="absolute bottom-0 left-0 w-full h-1 bg-brand-accent shadow-[0_0_15px_rgba(var(--color-brand-accent-rgb),0.5)] {{ $isLatest ? '' : 'hidden' }}"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Floating Decor -->
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-brand-accent rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-blob"></div>
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-brand-primary rounded-full mix-blend-multiply filter blur-2xl opacity-10 animate-blob animation-delay-2000"></div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-20 flex flex-col md:flex-row items-center justify-center gap-8 animate-on-scroll delay-300">
             <a href="{{ route('growth') }}" class="group relative px-10 py-5 bg-brand-primary rounded-2xl overflow-hidden shadow-2xl transition-all hover:scale-105 active:scale-95">
                <div class="absolute inset-0 bg-gradient-to-r from-brand-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative flex items-center gap-4">
                    <span class="text-white font-black text-sm uppercase tracking-widest">Detailed Statistics Report</span>
                    <div class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center group-hover:bg-brand-accent group-hover:text-brand-primary transition-all">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
             </a>
             <div class="text-center md:text-left">
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.3em] mb-1 italic">
                    ( Including {{ count(config('sectors.sectors')) }}+ Sectors & 200+ Excellence Partners )
                </p>
                <div class="flex gap-1.5 justify-center md:justify-start">
                    @for($i=0; $i<5; $i++)
                        <i class="fa-solid fa-star text-yellow-500 text-[10px]"></i>
                    @endfor
                </div>
             </div>
        </div>
    </div>
</section>

<style>
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    .animate-blob {
        animation: blob 7s infinite;
    }
    .animation-delay-2000 {
        animation-delay: 2s;
    }
</style>
