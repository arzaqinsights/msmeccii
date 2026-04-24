<!-- FAQs Section -->
<section class="py-24 bg-white relative">
    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 items-start">
            
            <!-- Left Scrollable Content (FAQs) -->
            <div class="w-full lg:w-7/12" x-data="{ active: null }">
                <!-- Mobile Header -->
                <div class="lg:hidden mb-12 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-6">
                        <i class="fa-solid fa-circle-question text-brand-primary text-xs"></i>
                        <span class="text-brand-primary text-[10px] font-black tracking-widest uppercase">FAQ Center</span>
                    </div>
                    <h2 class="text-4xl font-extrabold text-slate-900 leading-[1.15] mb-4">
                        Any Questions? <span class="text-brand-primary">We have Answers.</span>
                    </h2>
                </div>

                <!-- Desktop Intro Text -->
                <div class="hidden lg:block mb-12">
                    <h3 class="text-3xl font-black text-slate-900 mb-4 border-b-4 border-brand-accent inline-block pb-2">Frequently Asked Questions</h3>
                    <p class="text-xl text-slate-600 font-medium leading-relaxed italic border-l-4 border-brand-primary pl-6 py-2">
                        Everything you need to know about MSMECCII events, memberships, guidelines, and benefits.
                    </p>
                </div>

                @php
                    $faqs = [
                        ['id' => 1, 'q' => 'What is MSMECCII?', 'a' => 'MSME Chamber of Commerce & Industry of India (MSMECCII) is a leading platform dedicated to empowering MSMEs, startups, corporates, and entrepreneurs through networking, policy advocacy, and global business opportunities.'],
                        ['id' => 2, 'q' => 'What types of events do you organize?', 'a' => 'We organize Global Summits & Expos, Industry Conferences, Business Excellence Awards, Startup & Innovation Forums, and Sector-specific networking events.'],
                        ['id' => 3, 'q' => 'How can I register for an event?', 'a' => 'You can register directly through our website by selecting your desired event, filling in your details, and completing the payment via our secure payment gateway.'],
                        ['id' => 4, 'q' => 'What payment methods are accepted?', 'a' => 'We accept multiple payment options, including UPI, Debit/Credit Cards, Net Banking, and Wallets through our secure gateway.'],
                        ['id' => 5, 'q' => 'Is my payment information secure?', 'a' => 'Yes. All transactions are securely processed using advanced encryption. MSMECCII does not store your card or banking details.'],
                        ['id' => 6, 'q' => 'Will I receive a confirmation?', 'a' => 'Yes, once your payment is successful, you will receive a confirmation email, payment receipt, and event access details.'],
                        ['id' => 7, 'q' => 'What is the refund policy?', 'a' => 'Refunds are subject to our policy. Generally, transfers to another event may be allowed, though last-minute cancellations have limited refunds.'],
                        ['id' => 8, 'q' => 'Can I transfer my ticket?', 'a' => 'Yes, ticket transfers may be allowed prior to the event date. Please contact our support team with details for approval.'],
                        ['id' => 9, 'q' => 'How can I become a sponsor?', 'a' => 'You can fill out the sponsorship inquiry form or contact our team via email to get customized sponsorship packages.'],
                        ['id' => 10, 'q' => 'Does MSMECCII provide membership?', 'a' => 'Yes, we offer membership for MSMEs, Corporates, and Startups with exclusive access to events and industry insights.'],
                        ['id' => 11, 'q' => 'Is networking available at events?', 'a' => 'Absolutely. Our events facilitate B2B networking, investor connections, and global industrial collaborations.'],
                        ['id' => 12, 'q' => 'How will I get event updates?', 'a' => 'Updates are shared via official email notifications, WhatsApp/SMS (if opted), and website announcements.'],
                        ['id' => 13, 'q' => 'What if my payment fails?', 'a' => 'If money is deducted, it is usually reversed within 5–7 working days. If not, please contact us with transaction details.'],
                        ['id' => 14, 'q' => 'Who do I contact for support?', 'a' => 'Contact ighosh.1457@gmail.com or ighosh.chairman@msmeccii.com for all support and technical queries.'],
                        ['id' => 15, 'q' => 'Is GST invoice provided?', 'a' => 'Yes, GST compliant invoices are issued for all eligible transactions as per Indian regulations.'],
                        ['id' => 16, 'q' => 'Can international participants join?', 'a' => 'Yes, we welcome global participants and many of our events feature international speakers and delegations.']
                    ];
                @endphp

                <!-- FAQ Accordion List -->
                <div class="space-y-4 animate-on-scroll">
                    @foreach($faqs as $item)
                        <div class="group border border-slate-300 bg-white rounded-md overflow-hidden transition-all duration-300 h-fit" 
                             :class="active === {{ $item['id'] }} ? 'border-brand-primary' : 'hover:border-slate-300'">
                            
                            <button class="w-full flex items-center justify-between p-5 md:p-6 text-left outline-none" 
                                    @click="active === {{ $item['id'] }} ? active = null : active = {{ $item['id'] }}">
                                <span class="text-base md:text-lg font-black text-slate-800 group-hover:text-brand-primary transition-colors pr-4 leading-tight">
                                    {{ $item['q'] }}
                                </span>
                                <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-all duration-300"
                                     :class="active === {{ $item['id'] }} ? 'bg-brand-primary text-white rotate-180' : 'bg-slate-50 text-slate-400 group-hover:bg-brand-primary group-hover:text-white'">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </button>

                            <div class="transition-all duration-300 overflow-hidden" 
                                 x-show="active === {{ $item['id'] }}" 
                                 x-collapse>
                                <div class="px-5 md:px-6 pb-6">
                                    <div class="h-[1px] w-full bg-slate-100 mb-5"></div>
                                    <p class="text-slate-500 font-medium leading-relaxed text-sm md:text-base">
                                        {{ $item['a'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Mini Support footer (Mobile Only) -->
                <div class="lg:hidden mt-12 text-center">
                    <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center px-8 py-4 bg-brand-primary text-white rounded-2xl font-black text-sm shadow-xl uppercase tracking-widest">
                        Contact Support
                    </a>
                </div>
            </div>

            <!-- Right Sticky Sidebar Image & CTA -->
            <div class="w-full lg:w-5/12 sticky top-32 z-30 hidden lg:block self-start">
                <div class="relative rounded-lg overflow-hidden shadow-2xl group w-full h-[calc(100vh-10rem)] max-h-[700px] min-h-[500px]">
                    <img src="{{ asset('images/faq-bg.png') }}" alt="MSMECCII Support FAQ" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/70 to-transparent"></div>
                    
                    <div class="absolute bottom-0 left-0 right-0 p-10">
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-800/80 border border-slate-600/50 mb-6 backdrop-blur-md">
                            <i class="fa-solid fa-headset text-white text-xs"></i>
                            <span class="text-white text-[10px] font-black tracking-widest uppercase">24/7 Premium Support</span>
                        </div>
                        
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-white leading-tight mb-4">
                            Need More <span class="text-brand-accent">Help?</span>
                        </h2>
                        
                        <p class="text-white/80 text-sm font-medium mb-8 leading-relaxed">
                            If you still have queries or need customized support, our dedicated team is here to assist you round the clock.
                        </p>
                        
                        <a href="{{ route('contact') }}" class="w-full relative overflow-hidden inline-flex items-center justify-center px-8 py-4 bg-slate-800 hover:bg-brand-accent text-white hover:text-slate-900 border border-slate-600 hover:border-transparent rounded-md font-black text-sm transition-all shadow-xl group/btn uppercase tracking-widest">
                            <span class="relative z-10 flex items-center justify-center">
                                Contact Support Team
                                <i class="fa-solid fa-arrow-right ml-3 group-hover/btn:translate-x-1 transition-transform"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
