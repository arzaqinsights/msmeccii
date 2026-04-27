@extends('layouts.website')

@push('meta')
    @if($form->og_title)
        <meta property="og:title" content="{{ $form->og_title }}">
        <meta name="twitter:title" content="{{ $form->og_title }}">
    @else
        <meta property="og:title" content="{{ $form->name }}">
        <meta name="twitter:title" content="{{ $form->name }}">
    @endif

    @if($form->og_description)
        <meta property="og:description" content="{{ $form->og_description }}">
        <meta name="twitter:description" content="{{ $form->og_description }}">
    @else
        <meta property="og:description" content="{{ $form->description }}">
        <meta name="twitter:description" content="{{ $form->description }}">
    @endif

    @if($form->og_image)
        <meta property="og:image" content="{{ asset($form->og_image) }}">
        <meta name="twitter:image" content="{{ asset($form->og_image) }}">
    @else
        @if($form->thumbnail)
            <meta property="og:image" content="{{ asset($form->thumbnail) }}">
            <meta name="twitter:image" content="{{ asset($form->thumbnail) }}">
        @endif
    @endif

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
@endpush

@section('content')
<!-- Force Load Razorpay if yield fails -->
<script src="https://checkout.razorpay.com/v1/checkout.js" async onload="console.log('Razorpay Loaded Successfully')"></script>

<!-- Form Header -->
<section class="relative pt-32 pb-20 bg-slate-900 border-b border-brand-primary/20">
    @if($form->thumbnail)
        <div class="absolute inset-0">
            <img src="{{ asset($form->thumbnail) }}" alt="{{ $form->name }}" class="w-full h-full object-cover opacity-50 mix-blend-overlay">
        </div>
    @endif
    <div class="container relative z-10 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-black text-white mb-4 drop-shadow-md">
            {{ $form->name }}
        </h1>
        @if($form->description)
            <p class="text-lg font-medium text-slate-300 max-w-2xl mx-auto drop-shadow">
                {!! nl2br(e($form->description)) !!}
            </p>
        @endif
    </div>
</section>

<!-- Dynamic Reactive Engine -->
<section class="py-16 bg-brand-light">
    <div class="container max-w-3xl mx-auto">
        
        <form action="{{ route('join.forms.store', $form->slug) }}" method="POST" enctype="multipart/form-data" 
              class="bg-white p-8 md:p-12 rounded-3xl shadow-xl border border-slate-200"
              x-data="formEngine()" @submit.prevent="submitForm">
            @csrf
            
            <!-- Standard Authentication Block -->
            <div class="pb-8 border-b border-slate-100">
                <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-user-shield text-brand-primary"></i> Primary Identification
                </h3>
                
                @if(!auth()->check())
                    <div class="bg-blue-50 border border-blue-100 text-blue-700 p-4 rounded-xl text-sm font-medium mb-6">
                        <i class="fa-solid fa-circle-info mr-1"></i> Submitting this form will automatically create your MSMECCII digital profile.
                    </div>
                @else
                    <div class="bg-emerald-50 border border-emerald-100 text-emerald-700 p-4 rounded-xl text-sm font-bold mb-6 flex items-center gap-2">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=10b981&color=fff" class="w-8 h-8 rounded-full border border-emerald-200">
                        Logged in as {{ auth()->user()->name }}
                    </div>
                @endif
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" name="first_name" placeholder="e.g. Indrajit Ghosh" value="{{ old('first_name', auth()->check() ? auth()->user()->name : '') }}" required 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" name="email" placeholder="e.g. [EMAIL_ADDRESS]" value="{{ old('email', auth()->check() ? auth()->user()->email : '') }}" required 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">Phone Number <span class="text-red-500">*</span></label>
                        <input type="text" name="phone_number" placeholder="e.g. 9876543210" value="{{ old('phone_number', auth()->check() ? auth()->user()->phone_number : '') }}" required 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">Company Name <span class="text-red-500">*</span></label>
                        <input type="text" name="company_name" placeholder="e.g. ABC Pvt. Ltd." value="{{ old('company_name', auth()->check() ? auth()->user()->company_name : '') }}" required 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">Designation <span class="text-red-500">*</span></label>
                        <input type="text" name="designation" placeholder="e.g. CEO" value="{{ old('designation', auth()->check() ? auth()->user()->designation : '') }}" required 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">Website</label>
                        <input type="text" name="website" placeholder="e.g. www.example.com" value="{{ old('website', auth()->check() ? auth()->user()->website : '') }}" 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-xs font-bold text-slate-500 mb-2">Full Office/Company Address <span class="text-red-500">*</span></label>
                    <textarea name="address" rows="2" required 
                              class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">{{ old('address', auth()->check() ? auth()->user()->address : '') }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">City <span class="text-red-500">*</span></label>
                        <input type="text" name="city" placeholder="e.g. Kolkata" value="{{ old('city', auth()->check() ? auth()->user()->city : '') }}" required 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">Pin Code <span class="text-red-500">*</span></label>
                        <input type="text" name="pincode" placeholder="e.g. 700001" value="{{ old('pincode', auth()->check() ? auth()->user()->pincode : '') }}" required 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 mb-2">Country <span class="text-red-500">*</span></label>
                        <input type="text" name="country" placeholder="e.g. India" value="{{ old('country', auth()->check() ? auth()->user()->country : 'India') }}" required 
                               class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-xs font-bold text-slate-500 mb-2">GSTIN</label>
                    <input type="text" name="gstin" placeholder="e.g. 07AAAAA0000A1Z5" value="{{ old('gstin', auth()->check() ? auth()->user()->gstin : '') }}" 
                           class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold placeholder:text-slate-300 placeholder:font-medium">
                </div>
            </div>

            <!-- Dynamic Logic Block -->
            <div class="space-y-6">
                <template x-for="field in fields" :key="field.field_identifier">
                    
                    <div x-show="field.type !== 'hidden_price' && isFieldVisible(field)" x-transition.opacity duration.500ms>
                        <label class="block text-xs font-bold text-slate-500 mb-2">
                            <span x-text="field.label"></span>
                            <span x-show="field.is_required" class="text-red-500 ml-1">*</span>
                        </label>
                        
                        <!-- Text Input -->
                        <template x-if="field.type === 'text'">
                            <input type="text" :name="'dynamic_fields[' + field.field_identifier + ']'" x-model="formData[field.field_identifier]"
                                   @input="handleFieldChange(field.field_identifier)"
                                   :placeholder="field.placeholder" :required="field.is_required && isFieldVisible(field)"
                                   class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold transition-all shadow-sm focus:shadow-md placeholder:text-slate-300 placeholder:font-medium">
                        </template>

                        <!-- Textarea -->
                        <template x-if="field.type === 'textarea'">
                            <textarea :name="'dynamic_fields[' + field.field_identifier + ']'" x-model="formData[field.field_identifier]"
                                      @input="handleFieldChange(field.field_identifier)"
                                      :placeholder="field.placeholder" :required="field.is_required && isFieldVisible(field)" rows="4"
                                      class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-medium transition-all shadow-sm focus:shadow-md resize-none placeholder:text-slate-300 placeholder:font-medium"></textarea>
                        </template>

                        <!-- Dropdown -->
                        <template x-if="field.type === 'dropdown'">
                            <select :name="'dynamic_fields[' + field.field_identifier + ']'" x-model="formData[field.field_identifier]"
                                    @change="handleFieldChange(field.field_identifier)"
                                    :required="field.is_required && isFieldVisible(field)"
                                    class="w-full border border-slate-200 rounded-xl p-3 focus:border-brand-primary outline-none text-slate-900 font-bold bg-white transition-all shadow-sm focus:shadow-md cursor-pointer border-r-8 border-r-transparent">
                                <option value="" disabled selected>-- Select an option --</option>
                                <template x-for="option in getFieldOptions(field)" :key="option.label">
                                    <option :value="option.label" x-text="option.label"></option>
                                </template>
                            </select>
                        </template>

                        <!-- File Input -->
                        <template x-if="field.type === 'file'">
                            <input type="file" :name="'dynamic_fields[' + field.field_identifier + ']'" 
                                   :required="field.is_required && isFieldVisible(field)"
                                   class="w-full border border-slate-200 focus:border-brand-primary p-3 rounded-xl outline-none font-bold text-slate-900 transition-all text-sm file:mr-4 file:py-1.5 file:px-4 file:rounded file:border-0 file:text-xs file:font-bold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200 cursor-pointer shadow-sm">
                        </template>

                        <!-- Number Input (Converted to Range) -->
                        <template x-if="field.type === 'number'">
                            <div class="space-y-4 bg-slate-50/50 p-4 rounded-2xl border border-slate-100 shadow-sm">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Select Value</span>
                                    <div class="bg-brand-primary text-white px-3 py-1 rounded-full text-sm font-black shadow-lg shadow-brand-primary/20">
                                        <span x-text="formData[field.field_identifier] || field.options.min || 0"></span>
                                    </div>
                                </div>
                                <input type="range" :name="'dynamic_fields[' + field.field_identifier + ']'" x-model="formData[field.field_identifier]"
                                       @input="handleFieldChange(field.field_identifier)"
                                       :min="field.options ? field.options.min : 0"
                                       :max="field.options ? field.options.max : 100"
                                       class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-brand-primary transition-all hover:bg-slate-300">
                                <div class="flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-tighter">
                                    <span x-text="'Min: ' + (field.options ? field.options.min : 0)"></span>
                                    <span x-text="'Max: ' + (field.options ? field.options.max : 100)"></span>
                                </div>
                            </div>
                        </template>

                    </div>

                </template>
            </div>

            <!-- Pre-Checkout Injector (Monetization Engine) -->
            <div x-show="totalCalculated > 0" x-transition class="mt-10 bg-brand-primary rounded-2xl p-6 text-white relative overflow-hidden">
                <!-- BG Pattern -->
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
                
                <h4 class="text-xs font-black uppercase tracking-widest text-white/50 mb-4 relative z-10">Application Ledger</h4>
                
                <div class="space-y-3 relative z-10 border-b border-white/10 pb-4 mb-4">
                    <template x-for="item in priceBreakdown" :key="item.label">
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-white/70" x-text="item.label"></span>
                            <span class="font-bold">₹<span x-text="item.amount.toFixed(2)"></span></span>
                        </div>
                    </template>
                    
                    <div class="pt-2 mt-2 border-t border-white/5 flex justify-between items-center text-sm font-medium">
                        <span class="text-white/80">Total Subtotal</span>
                        <span>₹<span x-text="subtotal.toFixed(2)"></span></span>
                    </div>
                    <div class="flex justify-between items-center text-sm font-medium">
                        <span class="text-white/80">Taxes & Processing</span>
                        <span>₹<span x-text="totalTax.toFixed(2)"></span></span>
                    </div>
                </div>
                
                <div class="flex justify-between items-end relative z-10">
                    <span class="text-sm font-black text-white/50 uppercase tracking-widest">Amount Due</span>
                    <span class="text-3xl font-black">₹<span x-text="totalCalculated.toFixed(2)"></span></span>
                </div>
            </div>

            <!-- Bank Details for Manual Payment -->
            <div x-show="isManualPayment" x-transition class="mt-8 p-8 bg-slate-50 border-2 border-dashed border-slate-200 rounded-3xl">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-brand-primary/10 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-building-columns text-brand-primary"></i>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-slate-900 uppercase tracking-widest">Manual Bank Transfer</h4>
                        <p class="text-xs font-bold text-slate-400">Please complete the payment using details below</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <div class="space-y-1">
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest">Beneficiary / Account Name</p>
                        <p class="text-sm font-black text-slate-900">{{ $site['account_name'] ?? 'MSME Chamber of Commerce and Industry of India' }}</p>
                    </div>
                    <div class="space-y-1">
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest">Bank Name</p>
                        <p class="text-sm font-black text-slate-900">{{ $site['bank_name'] ?? 'Contact Administrator' }}</p>
                    </div>
                    <div class="space-y-1">
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest">Account Number</p>
                        <p class="text-sm font-black text-slate-900 font-mono tracking-tighter">{{ $site['account_number'] ?? 'Not Configured' }}</p>
                    </div>
                    <div class="space-y-1">
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest">IFSC Code (Domestic/India)</p>
                        <p class="text-sm font-black text-slate-900 font-mono tracking-tighter">{{ $site['ifsc_code'] ?? 'N/A' }}</p>
                    </div>
                    @if(isset($site['swift_code']) && $site['swift_code'])
                    <div class="space-y-1">
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest">SWIFT / BIC Code (International)</p>
                        <p class="text-sm font-black text-slate-900 font-mono tracking-tighter">{{ $site['swift_code'] }}</p>
                    </div>
                    @endif
                    @if(isset($site['bank_branch']) && $site['bank_branch'])
                    <div class="space-y-1 md:col-span-2">
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest">Bank Branch Address</p>
                        <p class="text-sm font-bold text-slate-700 leading-tight">{{ $site['bank_branch'] }}</p>
                    </div>
                    @endif
                </div>
                
                <div class="mt-6 p-4 bg-amber-50 rounded-xl border border-amber-100 flex gap-3">
                    <i class="fa-solid fa-circle-exclamation text-amber-500 mt-1"></i>
                    <p class="text-[10px] font-bold text-amber-800 leading-relaxed">
                        After submission, please share the transaction receipt with our team at {{ $site['email_1'] ?? 'support@msmeccii.com' }} or WhatsApp at +91 9810690843 for verification.
                    </p>
                </div>
            </div>

            <div class="mt-10 pt-8 border-t border-slate-100">
                <input type="hidden" name="payment_method" :value="isManualPayment ? 'manual' : 'gateway'">
                <button type="submit" :disabled="loading" class="w-full bg-brand-primary hover:bg-brand-primary-dark text-white font-black py-4 rounded-xl transition-all shadow-lg text-lg drop-shadow-sm flex justify-center items-center gap-3 disabled:opacity-50 disabled:cursor-wait">
                    <template x-if="loading">
                        <i class="fa-solid fa-circle-notch fa-spin"></i>
                    </template>
                    <span x-text="loading ? 'Processing...' : (isManualPayment ? 'Submit Application' : '{{ $form->submit_button_text }}')"></span>
                    <i x-show="!loading" class="fa-solid fa-arrow-right-long text-sm"></i>
                </button>
            </div>

        </form>

    </div>
</section>

<script>
    function formEngine() {
        const rawFields = @json($form->fields);
        
        return {
            fields: rawFields,
            formData: {},
            loading: false,
            gatewayLimit: {{ (float)($site['payment_gateway_limit'] ?? 500000) }},
            
            get isManualPayment() {
                return this.totalCalculated > this.gatewayLimit;
            },
            
            init() {
                // Initialize default form data paths to allow reactive tracking
                this.fields.forEach(f => {
                    this.formData[f.field_identifier] = f.type === 'number' && f.options && f.options.min ? f.options.min : '';
                });

                // Emergency Loader for Razorpay
                if (typeof Razorpay === 'undefined') {
                    console.warn('Razorpay undefined on init, attempting dynamic injection...');
                    let script = document.createElement('script');
                    script.src = 'https://checkout.razorpay.com/v1/checkout.js';
                    document.head.appendChild(script);
                }
            },

            handleFieldChange(fieldId) {
                // Find all fields that depend on this changed field
                this.fields.forEach(f => {
                    if (f.depends_on === fieldId) {
                        // Reset child value
                        this.formData[f.field_identifier] = '';
                        // Recursively reset grandchildren
                        this.handleFieldChange(f.field_identifier);
                    }
                });
            },

            // Dependency Logic 
            isFieldVisible(field) {
                if (!field.depends_on) {
                    return true;
                }
                
                const parentValue = this.formData[field.depends_on];
                if (parentValue === undefined || parentValue === null || parentValue === '') {
                    return false;
                }
                
                // Mapped Options Dependency Type (Child options change dynamically)
                if (field.depends_on_value === '__MAPPED__') {
                    if (typeof field.options === 'object' && field.options !== null) {
                        return (field.options[parentValue] && field.options[parentValue].length > 0);
                    }
                    return false;
                }

                if (field.depends_on_value && field.depends_on_value.trim() !== '') {
                    return parentValue.toString().trim() === field.depends_on_value.trim();
                }
                
                return true;
            },

            // Dynamic Options Resolver
            getFieldOptions(field) {
                if (field.depends_on_value === '__MAPPED__' && typeof field.options === 'object' && field.options !== null) {
                    const parentValue = this.formData[field.depends_on];
                    if (parentValue && field.options[parentValue]) {
                        return field.options[parentValue].map(o => typeof o === 'string' ? {label: o, price: 0, tax: 0} : o);
                    }
                    return [];
                }
                
                if (Array.isArray(field.options)) {
                    return field.options.map(o => typeof o === 'string' ? {label: o, price: 0, tax: 0} : o);
                }
                return [];
            },

            // Financial Engine
            get subtotal() {
                let total = 0;
                this.fields.forEach(f => {
                    if (this.isFieldVisible(f)) {
                        if (f.type === 'dropdown' && this.formData[f.field_identifier] !== '') {
                            const opts = this.getFieldOptions(f);
                            const selected = opts.find(o => o.label === this.formData[f.field_identifier]);
                            if (selected && selected.price) total += parseFloat(selected.price);
                        } else if (f.type === 'hidden_price' || this.formData[f.field_identifier] !== '') {
                            if (f.base_amount && parseFloat(f.base_amount) > 0) {
                                if (f.type === 'number') {
                                    total += parseFloat(this.formData[f.field_identifier] || 0) * parseFloat(f.base_amount);
                                } else {
                                    total += parseFloat(f.base_amount);
                                }
                            }
                        }
                    }
                });
                return total;
            },

            get totalTax() {
                let tax = 0;
                this.fields.forEach(f => {
                    if (this.isFieldVisible(f)) {
                        if (f.type === 'dropdown' && this.formData[f.field_identifier] !== '') {
                            const opts = this.getFieldOptions(f);
                            const selected = opts.find(o => o.label === this.formData[f.field_identifier]);
                            if (selected && selected.price && selected.tax) {
                                tax += parseFloat(selected.price) * (parseFloat(selected.tax) / 100);
                            }
                        } else if (f.type === 'hidden_price' || this.formData[f.field_identifier] !== '') {
                            if (f.base_amount && parseFloat(f.base_amount) > 0 && f.tax_percentage && parseFloat(f.tax_percentage) > 0) {
                                if (f.type === 'number') {
                                    tax += (parseFloat(this.formData[f.field_identifier] || 0) * parseFloat(f.base_amount)) * (parseFloat(f.tax_percentage) / 100);
                                } else {
                                    tax += parseFloat(f.base_amount) * (parseFloat(f.tax_percentage) / 100);
                                }
                            }
                        }
                    }
                });
                return tax;
            },

            get totalCalculated() {
                return this.subtotal + this.totalTax;
            },

            get priceBreakdown() {
                let breakdown = [];
                this.fields.forEach(f => {
                    if (this.isFieldVisible(f)) {
                        let amount = 0;
                        let label = f.label;
                        
                        if (f.type === 'dropdown' && this.formData[f.field_identifier] !== '') {
                            const opts = this.getFieldOptions(f);
                            const selected = opts.find(o => o.label === this.formData[f.field_identifier]);
                            if (selected && selected.price) {
                                amount = parseFloat(selected.price);
                                label = `${f.label}: ${selected.label}`;
                            }
                        } else if (f.type === 'hidden_price' || this.formData[f.field_identifier] !== '') {
                            if (f.base_amount && parseFloat(f.base_amount) > 0) {
                                if (f.type === 'number') {
                                    const qty = parseFloat(this.formData[f.field_identifier] || 0);
                                    amount = qty * parseFloat(f.base_amount);
                                    label = `${f.label} (${qty} units)`;
                                } else {
                                    amount = parseFloat(f.base_amount);
                                }
                            }
                        }
                        
                        if (amount > 0) {
                            breakdown.push({ label: label, amount: amount });
                        }
                    }
                });
                return breakdown;
            },

            async submitForm(e) {
                if (this.totalCalculated > 0 && typeof Razorpay === 'undefined') {
                    alert('Payment gateway script (Razorpay) failed to load. Please refresh the page.');
                    return;
                }
                this.loading = true;
                const formData = new FormData(e.target);
                
                try {
                    const response = await fetch(e.target.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    });

                    const result = await response.json();

                    if (!result.success) {
                        alert(result.message || 'Something went wrong.');
                        this.loading = false;
                        return;
                    }

                    if (result.is_test) {
                        // Environment is LOCAL and keys are missing - Simulate success
                        alert('✨ Local Test Mode: ' + result.message);
                        window.location.href = result.redirect;
                        return;
                    }

                    if (result.is_paid) {
                        this.payWithRazorpay(result);
                    } else {
                        window.location.href = result.redirect;
                    }

                } catch (error) {
                    console.error(error);
                    alert('Critical system error. Please try again.');
                    this.loading = false;
                }
            },

            payWithRazorpay(data) {
                const options = {
                    key: data.key,
                    amount: data.amount,
                    currency: "INR",
                    name: data.name,
                    description: data.description,
                    order_id: data.order_id,
                    handler: async function (response) {
                        // Dynamically build verification URL
                        const verifyUrl = "{{ route('payment.verify') }}";
                        const params = new URLSearchParams({
                            razorpay_order_id: response.razorpay_order_id,
                            razorpay_payment_id: response.razorpay_payment_id,
                            razorpay_signature: response.razorpay_signature
                        });
                        
                        window.location.href = `${verifyUrl}?${params.toString()}`;
                    },
                    prefill: {
                        name: data.user.name,
                        email: data.user.email,
                        contact: data.user.contact
                    },
                    theme: {
                        color: "#0f172a"
                    }
                };
                const rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function (response){
                    alert("Payment Failed: " + response.error.description);
                });
                rzp1.open();
                this.loading = false;
            }
        }
    }
</script>
@endsection
