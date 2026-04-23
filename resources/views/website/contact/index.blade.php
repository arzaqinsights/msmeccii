@extends('layouts.website')

@section('title', 'Contact Us | MSMECCII')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 bg-slate-900 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/20 via-transparent to-brand-accent/10"></div>
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-primary/20 rounded-full blur-3xl opacity-50 font-black"></div>
    
    <div class="container relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-6">
            <i class="fa-solid fa-headset text-brand-primary text-xs"></i>
            <span class="text-brand-primary text-xs font-bold tracking-widest uppercase">Get in Touch</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6">Let's Build the <span class="text-brand-primary italic">Future</span> Together</h1>
        <p class="text-slate-400 font-bold text-lg max-w-2xl mx-auto leading-relaxed">
            Have questions about membership, events, or sponsorships? Our team of industry experts is here to guide your business journey.
        </p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-24 bg-white relative">
    <div class="container">
        <div class="flex flex-col lg:flex-row gap-16">
            
            <!-- Left: Contact Form -->
            <div class="lg:w-3/5">
                <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-2xl shadow-slate-200 border border-slate-100 animate-on-scroll">
                    <h2 class="text-3xl font-black text-slate-900 mb-8">Send us a <span class="text-brand-primary">Message</span></h2>
                    
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Full Name</label>
                                <input type="text" name="name" required placeholder="John Doe"
                                       class="w-full bg-slate-50 border border-slate-200 rounded-2xl p-4 focus:border-brand-primary outline-none text-slate-900 font-bold transition-all focus:shadow-lg">
                            </div>
                            <div>
                                <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Email Address</label>
                                <input type="email" name="email" required placeholder="john@example.com"
                                       class="w-full bg-slate-50 border border-slate-200 rounded-2xl p-4 focus:border-brand-primary outline-none text-slate-900 font-bold transition-all focus:shadow-lg">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Phone Number</label>
                                <input type="text" name="phone" placeholder="+91 00000 00000"
                                       class="w-full bg-slate-50 border border-slate-200 rounded-2xl p-4 focus:border-brand-primary outline-none text-slate-900 font-bold transition-all focus:shadow-lg">
                            </div>
                            <div>
                                <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Subject</label>
                                <select name="subject" class="w-full bg-slate-50 border border-slate-200 rounded-2xl p-4 focus:border-brand-primary outline-none text-slate-900 font-bold transition-all focus:shadow-lg">
                                    <option>Membership Inquiry</option>
                                    <option>Event Registration</option>
                                    <option>Sponsorship Opportunities</option>
                                    <option>General Query</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Your Message</label>
                            <textarea name="message" rows="5" required placeholder="Tell us how we can help your business..."
                                      class="w-full bg-slate-50 border border-slate-200 rounded-2xl p-4 focus:border-brand-primary outline-none text-slate-900 font-medium transition-all focus:shadow-lg resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brand-primary group hover:bg-slate-900 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-brand-primary/20 flex items-center justify-center gap-3">
                            Submit Inquiry
                            <i class="fa-solid fa-paper-plane text-sm group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right: Contact Sidebar -->
            <div class="lg:w-2/5 space-y-8 animate-on-scroll delay-100">
                
                <!-- Office Location -->
                <div class="group bg-slate-50 p-8 rounded-[2rem] border border-slate-100 hover:border-brand-primary transition-all duration-500">
                    <div class="w-14 h-14 bg-white rounded-2xl shadow-lg flex items-center justify-center mb-6 text-brand-primary group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-location-dot text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-2 font-black">Corporate Office</h3>
                    <p class="text-slate-500 font-medium leading-relaxed mb-4">
                        H-1479, Chittaranjan Park,<br> New Delhi - 110019, India
                    </p>
                    <a href="https://maps.google.com" target="_blank" class="text-brand-primary font-black text-sm uppercase tracking-widest flex items-center gap-2 hover:underline">
                        Get Directions <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

                <!-- Phone Lines -->
                <div class="group bg-slate-50 p-8 rounded-[2rem] border border-slate-100 hover:border-brand-primary transition-all duration-500">
                    <div class="w-14 h-14 bg-white rounded-2xl shadow-lg flex items-center justify-center mb-6 text-emerald-500 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-phone-volume text-2xl font-black"></i>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-4">Helpline Numbers</h3>
                    <div class="space-y-3">
                        <a href="tel:+919810690843" class="block text-slate-600 font-bold hover:text-brand-primary transition-colors">+91 98106 90843</a>
                        <a href="tel:+919810201957" class="block text-slate-600 font-bold hover:text-brand-primary transition-colors">+91 98102 01957</a>
                        <a href="tel:+919810211257" class="block text-slate-600 font-bold hover:text-brand-primary transition-colors">+91 98102 11257</a>
                    </div>
                </div>

                <!-- Email Support -->
                <div class="group bg-slate-900 p-8 rounded-[2rem] text-white transition-all duration-500 shadow-2xl shadow-brand-primary/10">
                    <div class="w-14 h-14 bg-brand-primary rounded-2xl flex items-center justify-center mb-6 text-white">
                        <i class="fa-solid fa-envelope-open-text text-2xl font-black"></i>
                    </div>
                    <h3 class="text-xl font-black mb-4">Official Emails</h3>
                    <div class="space-y-3">
                        <a href="mailto:ighosh.chairman@msmeccii.com" class="block text-slate-400 font-bold hover:text-brand-primary transition-colors">ighosh.chairman@msmeccii.com</a>
                        <a href="mailto:ighosh.1457@gmail.com" class="block text-slate-400 font-bold hover:text-brand-primary transition-colors">ighosh.1457@gmail.com</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Maps Section -->
<section class="pb-24">
    <div class="container">
        <div class="rounded-[3rem] overflow-hidden shadow-2xl border-4 border-white h-[500px] w-full relative">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14018.675003504958!2d77.2478564!3d28.5413349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3c4f74d538b%3A0xe5a3c2605f13459c!2sChittaranjan%20Park%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1713430000000!5m2!1sen!2sin" 
                class="absolute inset-0 w-full h-full border-0" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
@endsection
