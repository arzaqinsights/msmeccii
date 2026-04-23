@extends('layouts.admin')

@section('title', 'Site Settings')

@section('content')

    <form action="{{ route('admin.settings.bulk-update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Contact Information -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 bg-slate-50">
                    <h3 class="text-lg font-black text-slate-900 flex items-center gap-2">
                        <i class="fa-solid fa-address-book text-brand-primary"></i> Contact Information
                    </h3>
                    <p class="text-xs text-slate-500 mt-1">Leave empty to hide from website</p>
                </div>
                <div class="p-6 space-y-5">

                    <!-- Phone Numbers -->
                    <div class="space-y-3">
                        <label class="block text-sm font-bold text-slate-700">
                            <i class="fa-solid fa-phone text-brand-primary mr-1"></i> Phone Numbers
                        </label>
                        <input type="text" name="settings[phone_1]" value="{{ $site['phone_1'] ?? '' }}"
                            placeholder="Primary: +91-9810690843"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                        <input type="text" name="settings[phone_2]" value="{{ $site['phone_2'] ?? '' }}"
                            placeholder="Secondary (optional)"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                        <input type="text" name="settings[phone_3]" value="{{ $site['phone_3'] ?? '' }}"
                            placeholder="Third (optional)"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                    </div>

                    <!-- Email Addresses -->
                    <div class="space-y-3">
                        <label class="block text-sm font-bold text-slate-700">
                            <i class="fa-solid fa-envelope text-brand-primary mr-1"></i> Email Addresses
                        </label>
                        <input type="email" name="settings[email_1]" value="{{ $site['email_1'] ?? '' }}"
                            placeholder="Primary: support@msmeccii.in"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                        <input type="email" name="settings[email_2]" value="{{ $site['email_2'] ?? '' }}"
                            placeholder="Secondary (optional)"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                    </div>

                    <!-- Address -->
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1.5">
                            <i class="fa-solid fa-location-dot text-brand-primary mr-1"></i> Address
                        </label>
                        <textarea name="settings[address]" rows="3"
                            placeholder="India's MSME Headquarters&#10;New Delhi, India"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none resize-none">{{ $site['address'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 bg-slate-50">
                    <h3 class="text-lg font-black text-slate-900 flex items-center gap-2">
                        <i class="fa-solid fa-share-nodes text-brand-primary"></i> Social Media Links
                    </h3>
                    <p class="text-xs text-slate-500 mt-1">Leave empty to hide the icon from header & footer</p>
                </div>
                <div class="p-6 space-y-5">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1.5">
                            <i class="fa-brands fa-facebook-f text-blue-600 mr-1.5"></i> Facebook
                        </label>
                        <input type="url" name="settings[facebook_url]" value="{{ $site['facebook_url'] ?? '' }}"
                            placeholder="https://facebook.com/msmeccii"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1.5">
                            <i class="fa-brands fa-twitter text-sky-500 mr-1.5"></i> Twitter / X
                        </label>
                        <input type="url" name="settings[twitter_url]" value="{{ $site['twitter_url'] ?? '' }}"
                            placeholder="https://twitter.com/msmeccii"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1.5">
                            <i class="fa-brands fa-instagram text-pink-500 mr-1.5"></i> Instagram
                        </label>
                        <input type="url" name="settings[instagram_url]" value="{{ $site['instagram_url'] ?? '' }}"
                            placeholder="https://instagram.com/msmeccii"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1.5">
                            <i class="fa-brands fa-linkedin-in text-blue-700 mr-1.5"></i> LinkedIn
                        </label>
                        <input type="url" name="settings[linkedin_url]" value="{{ $site['linkedin_url'] ?? '' }}"
                            placeholder="https://linkedin.com/company/msmeccii"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1.5">
                            <i class="fa-brands fa-youtube text-red-600 mr-1.5"></i> YouTube
                        </label>
                        <input type="url" name="settings[youtube_url]" value="{{ $site['youtube_url'] ?? '' }}"
                            placeholder="https://youtube.com/@msmeccii"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1.5">
                            <i class="fa-brands fa-whatsapp text-green-600 mr-1.5"></i> WhatsApp URL
                        </label>
                        <input type="url" name="settings[whatsapp_url]" value="{{ $site['whatsapp_url'] ?? '' }}"
                            placeholder="https://wa.me/919810690843"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                    </div>
                </div>
            </div>

            <!-- Payment & Bank Details -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden lg:col-span-2">
                <div class="px-6 py-4 border-b border-slate-100 bg-slate-50 flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-black text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-credit-card text-brand-primary"></i> Payment Gateway & Bank Details
                        </h3>
                        <p class="text-xs text-slate-500 mt-1">Configure limits and manual payment options</p>
                    </div>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Limit Settings -->
                    <div class="space-y-4">
                        <label class="block text-sm font-bold text-slate-700">
                            <i class="fa-solid fa-bolt text-brand-primary mr-1"></i> Gateway Transaction Limit
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold">₹</span>
                            <input type="number" name="settings[payment_gateway_limit]"
                                value="{{ $site['payment_gateway_limit'] ?? '500000' }}"
                                class="w-full pl-8 pr-4 py-3 rounded-xl border border-slate-200 text-sm font-bold focus:ring-2 focus:ring-brand-primary/30 focus:border-brand-primary outline-none">
                        </div>
                        <p class="text-[10px] text-slate-400 font-medium leading-relaxed italic">
                            * Amounts exceeding this limit will automatically switch to Manual Bank Transfer mode.
                        </p>
                    </div>

                    <!-- Bank Details -->
                    <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-slate-700 mb-2">
                                <i class="fa-solid fa-building-columns text-brand-primary mr-1"></i> Manual Bank Transfer
                                Details (Domestic & International)
                            </label>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Bank Name</label>
                            <input type="text" name="settings[bank_name]" value="{{ $site['bank_name'] ?? '' }}"
                                placeholder="e.g. HDFC Bank"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Account Holder
                                Name</label>
                            <input type="text" name="settings[account_name]" value="{{ $site['account_name'] ?? '' }}"
                                placeholder="e.g. MSME Chamber of Commerce"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Account Number</label>
                            <input type="text" name="settings[account_number]" value="{{ $site['account_number'] ?? '' }}"
                                placeholder="e.g. 50100234567890"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">IFSC Code
                                    (India)</label>
                                <input type="text" name="settings[ifsc_code]" value="{{ $site['ifsc_code'] ?? '' }}"
                                    placeholder="e.g. HDFC0001234"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">SWIFT / BIC
                                    Code</label>
                                <input type="text" name="settings[swift_code]" value="{{ $site['swift_code'] ?? '' }}"
                                    placeholder="e.g. HDFCINBB"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Bank Branch
                                Address</label>
                            <input type="text" name="settings[bank_branch]" value="{{ $site['bank_branch'] ?? '' }}"
                                placeholder="e.g. KG Marg, New Delhi, India"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Beneficiary Address
                                (Optional)</label>
                            <input type="text" name="settings[beneficiary_address]"
                                value="{{ $site['beneficiary_address'] ?? '' }}"
                                placeholder="e.g. B-123, Sector 4, Noida, UP, India"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Save Button -->
        <div class="mt-8 flex justify-end">
            <button type="submit"
                class="px-8 py-3.5 bg-brand-primary text-white rounded-xl font-bold text-sm hover:bg-brand-primary/90 transition shadow-lg shadow-brand-primary/20 flex items-center gap-2">
                <i class="fa-solid fa-floppy-disk"></i> Save All Settings
            </button>
        </div>
    </form>

@endsection