<!-- FAQs Section -->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-primary/5 rounded-full blur-3xl opacity-50 translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="container relative z-10">
        <!-- Compact Header -->
        <div class="text-center max-w-2xl mx-auto mb-12 animate-on-scroll">
            <!-- <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-4">
                <i class="fa-solid fa-circle-question text-brand-primary text-[10px]"></i>
                <span class="text-brand-primary text-[10px] font-bold tracking-widest uppercase">FAQ Center</span>
            </div> -->
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                Frequently Asked <span class="text-brand-primary">Questions</span>
            </h2>
        </div>

        <!-- 2-Column Grid Accordion -->
        <div x-data="{ active: null }" class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-6 items-start">
            
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

            @foreach($faqs as $item)
                <div class="group border  border-slate-200 bg-white rounded-2xl overflow-hidden transition-all duration-300 h-fit shadow-sm" 
                     :class="active === {{ $item['id'] }} ? 'border-brand-primary shadow-md' : 'hover:border-slate-300'">
                    
                    <button class="w-full flex items-center justify-between p-4 text-left outline-none" 
                            @click="active === {{ $item['id'] }} ? active = null : active = {{ $item['id'] }}">
                        <span class="text-sm font-black text-slate-800 group-hover:text-brand-primary transition-colors pr-4">
                            {{ $item['q'] }}
                        </span>
                        <div class="w-7 h-7 rounded-full flex items-center justify-center shrink-0 transition-all duration-300"
                             :class="active === {{ $item['id'] }} ? 'bg-brand-primary text-white rotate-180' : 'bg-slate-50 text-slate-400 group-hover:bg-brand-primary group-hover:text-white'">
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </div>
                    </button>

                    <div class="transition-all duration-300 overflow-hidden" 
                         x-show="active === {{ $item['id'] }}" 
                         x-collapse>
                        <div class="px-4 pb-4">
                            <div class="h-[1px] w-full bg-slate-50 mb-4"></div>
                            <p class="text-slate-500 font-medium leading-relaxed text-xs">
                                {{ $item['a'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Mini Support footer -->
        <div class="mt-12 text-center text-xs font-bold text-slate-400 uppercase tracking-widest">
            Need more help? Email us at <a href="mailto:support@msmeccii.com" class="text-brand-primary hover:underline">support@msmeccii.com</a>
        </div>
    </div>
</section>
