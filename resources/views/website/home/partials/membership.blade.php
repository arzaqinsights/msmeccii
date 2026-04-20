<!-- Membership Benefits -->
<section class="py-24 bg-slate-50 relative">
    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 items-start">
            
            <!-- Left Sticky Sidebar Image & CTA -->
            <div class="w-full lg:w-5/12 sticky top-32 z-30 hidden lg:block self-start">
                <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl group w-full h-[calc(100vh-10rem)] max-h-[700px] min-h-[500px]">
                    <img src="{{ asset('images/membership_sticky_image.png') }}" onerror="this.src='{{ asset('images/about-1.webp') }}'" alt="MSMECCII Membership" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
                    
                    <div class="absolute bottom-0 left-0 right-0 p-10">
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-accent/20 border border-brand-accent/30 mb-6 backdrop-blur-md">
                            <i class="fa-solid fa-gem text-brand-accent text-xs"></i>
                            <span class="text-white text-[10px] font-black tracking-widest uppercase">Premium Network</span>
                        </div>
                        
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-white leading-tight mb-4">
                            Empowering Business <span class="text-brand-accent">Growth</span>
                        </h2>
                        
                        <p class="text-white/80 text-sm font-medium mb-8 leading-relaxed">
                            Connect with industry leaders, Padmashri & Padma Bhushan dignitaries. Expand your reach and grow worldwide.
                        </p>
                        
                        <a href="{{ route('join.index') }}" class="w-full relative overflow-hidden inline-flex items-center justify-center px-8 py-4 bg-brand-accent hover:bg-white text-slate-900 rounded-2xl font-black text-sm transition-all shadow-xl group/btn uppercase tracking-widest">
                            <span class="relative z-10 flex items-center justify-center">
                                Join Membership Today
                                <i class="fa-solid fa-arrow-right ml-3 group-hover/btn:translate-x-1 transition-transform"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Scrollable Content -->
            <div class="w-full lg:w-7/12">
                <!-- Mobile Header -->
                <div class="lg:hidden mb-12 text-center">
                     <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-accent/10 border border-brand-accent/20 mb-6">
                        <i class="fa-solid fa-gem text-brand-accent text-xs"></i>
                        <span class="text-brand-primary text-[10px] font-black tracking-widest uppercase">Premium Network</span>
                    </div>
                    <h2 class="text-4xl font-extrabold text-brand-primary leading-[1.15] mb-4">
                        Unlock Premium <span class="text-brand-accent">Benefits</span>
                    </h2>
                    <p class="text-slate-500 font-medium">
                        "MSMECCII membership empowers businesses with networking, visibility, policy support, and growth opportunities at national and global levels."
                    </p>
                </div>

                <!-- Desktop Intro Text -->
                <div class="hidden lg:block mb-16">
                    <h3 class="text-3xl font-black text-slate-900 mb-4 border-b-4 border-brand-accent inline-block pb-2">Why Join MSMECCII?</h3>
                    <p class="text-xl text-slate-600 font-medium leading-relaxed italic border-l-4 border-brand-primary pl-6 py-2">
                        "MSMECCII membership empowers businesses with networking, visibility, policy support, and growth opportunities at national and global levels."
                    </p>
                </div>

                @php
                    $benefits = [
                        ['title' => '1. Strong Business Networking Platform', 'desc' => 'Access a global network of MSMEs and corporates. Join dedicated WhatsApp & digital groups to connect with worldwide investors and partners.'],
                        ['title' => '2. Speaking & Brand Visibility', 'desc' => 'Become a Guest Speaker or Panelist at national & international conferences. Showcase your brand via summits, expos, and industry events.'],
                        ['title' => '3. Business Growth & Promotion Support', 'desc' => 'Gain promotion through events, exhibitions, and chamber activities to increase brand recognition, credibility, and market exposure across sectors.'],
                        ['title' => '4. Government Policy & Market Updates', 'desc' => 'Stay compliant and competitive with regular updates on critical Government schemes, MSME policies, and shifting industry regulations.'],
                        ['title' => '5. Legal & Advisory Support', 'desc' => 'Receive vital legal assistance and strategic business guidance covering essential compliance, expansion, and detailed strategic planning.'],
                        ['title' => '6. Events, Conferences & Awards Access', 'desc' => 'Secure exclusive invitations to premium industry conferences, targeted trade fairs, and prestigious business excellence awards.'],
                        ['title' => '7. Business Planning & Support Services', 'desc' => 'Tailored assistance perfectly suited for Startups, MSMEs & Corporates in business planning, proactive growth strategies, and market entry tactics.'],
                        ['title' => '8. Knowledge & Awareness Programs', 'desc' => 'Take part in skill-enhancing training programs, engaging awareness sessions, and sector-specific expert seminars.'],
                        ['title' => '9. Liaisoning & Industry Representation', 'desc' => 'Strong support in connecting with key government bodies and authorities with an effective representation of crucial industry concerns.'],
                        ['title' => '10. Multi-Sector Opportunities', 'desc' => 'Broad exposure to growing sectors like Recycling & Sustainability, Packaging & Plastics, Renewable Energy, Food Processing, Textile & Manufacturing.'],
                        ['title' => '11. Exclusive Member Community', 'desc' => 'Become part of a highly trusted business ecosystem with direct access to an elite advisory board and renowned industry experts.'],
                        ['title' => '12. Digital Platform & Visibility', 'desc' => 'Leverage our dynamic online platform to seamlessly share updates, widely promote your services, and effectively engage stakeholders.']
                    ];
                @endphp

                <!-- Scrollable Benefits List -->
                <div class="space-y-6 lg:space-y-6">
                    @foreach($benefits as $index => $benefit)
                        <div class="flex gap-6 md:gap-8 group animate-on-scroll hover:bg-slate-200 rounded-2xl p-8">
                            <!-- Big Number -->
                            <div class="shrink-0 pt-1">
                                <span class="text-4xl md:text-5xl font-black text-slate-200 group-hover:text-brand-accent transition-colors duration-500">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.
                                </span>
                            </div>
                            
                            <!-- Content -->
                            <div>
                                <h4 class="text-xl md:text-2xl font-black text-slate-900 mb-3 group-hover:text-brand-primary transition-colors duration-300">
                                    {{ preg_replace('/^\d+\.\s*/', '', $benefit['title']) }}
                                </h4>
                                <p class="text-slate-500 font-medium leading-relaxed text-sm md:text-base">
                                    {{ $benefit['desc'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Mobile CTA -->
                <div class="lg:hidden mt-16 text-center">
                    <a href="{{ route('join.index') }}" class="w-full inline-flex items-center justify-center px-8 py-5 bg-brand-primary text-white rounded-2xl font-black text-sm shadow-xl uppercase tracking-widest">
                        Apply For Membership Today
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
