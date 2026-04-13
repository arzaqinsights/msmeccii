@extends('layouts.admin')

@section('title', $form->exists ? 'Edit Custom Form' : 'Build Custom Form')

@section('content')

<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">{{ $form->exists ? 'Edit Application Form' : 'Build Application Form' }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Design the data-capture endpoints, prices, and branching logic.</p>
    </div>
    <a href="{{ route('admin.forms.index') }}" class="text-slate-500 hover:text-slate-800 font-bold text-sm bg-white border border-slate-200 px-4 py-2 rounded-xl">
        <i class="fa-solid fa-arrow-left-long mr-1"></i> Back to Forms
    </a>
</div>

<form action="{{ $form->exists ? route('admin.forms.update', $form) : route('admin.forms.store') }}" method="POST" enctype="multipart/form-data"
      x-data="formBuilder()" @submit="prepareSubmit">
    @csrf
    @if($form->exists) @method('PUT') @endif

    <!-- Hidden input to store JSON output string of fields -->
    <input type="hidden" name="fields_data" x-model="fieldsJson">

    <div class="flex flex-col xl:flex-row gap-6 items-start">
        
        <!-- Left Side: Core Form Details -->
        <div class="w-full xl:w-1/3 bg-white p-6 rounded-2xl shadow-sm border border-slate-200 sticky top-6">
            <h3 class="text-lg font-black text-slate-900 mb-4 border-b border-slate-100 pb-3">Form Intelligence</h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Form Name</label>
                    <input type="text" name="name" value="{{ old('name', $form->name) }}" required 
                           class="w-full bg-slate-50 border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 p-3 rounded-xl outline-none font-bold text-slate-900 transition-all text-sm">
                    @error('name')<p class="text-xs text-red-500 mt-1 font-bold">{{ $message }}</p>@enderror
                </div>
                
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">URL Extension (Slug)</label>
                    <div class="flex">
                        <span class="bg-slate-100 border border-slate-200 border-r-0 rounded-l-xl px-2 py-3 text-slate-400 font-bold text-xs flex items-center">/forms/</span>
                        <input type="text" name="slug" value="{{ old('slug', $form->slug) }}" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-r-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Description / Guidelines</label>
                    <textarea name="description" rows="3" 
                              class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-medium text-slate-900 resize-none text-sm">{{ old('description', $form->description) }}</textarea>
                </div>

                <div>
                    <div class="flex justify-between items-end mb-1">
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider">Top Banner Image</label>
                    </div>
                    @if($form->thumbnail)
                        <div class="mb-2 rounded-lg overflow-hidden border border-slate-200 shadow-sm relative group">
                            <img src="{{ asset($form->thumbnail) }}" alt="Preview" class="w-full h-24 object-cover">
                            <div class="absolute bottom-0 w-full bg-black/60 px-2 py-1 text-[10px] font-bold text-white uppercase flex justify-between">
                                Active <i class="fa-solid fa-circle-check text-green-400"></i>
                            </div>
                        </div>
                    @endif
                    <input type="file" name="thumbnail" accept="image/*"
                           class="w-full bg-slate-50 border border-slate-200 focus:border-emerald-500 p-2 rounded-xl outline-none font-bold text-slate-900 transition-all text-sm file:mr-4 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-[10px] file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                </div>
                
                <div class="pt-4 border-t border-slate-100">
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1 text-emerald-600">Submit Button Label</label>
                    <input type="text" name="submit_button_text" value="{{ old('submit_button_text', $form->submit_button_text ?? 'Submit Information') }}" placeholder="Pay Now, Submit, Register..."
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                </div>

                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1 text-purple-600">Success Redirect Message</label>
                    <input type="text" name="thank_you_message" value="{{ old('thank_you_message', $form->thank_you_message) }}" placeholder="Thank you for your submission."
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                </div>

                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Form Status</label>
                    <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 cursor-pointer text-sm">
                        <option value="published" {{ old('status', $form->status) === 'published' ? 'selected' : '' }}>Published Live</option>
                        <option value="draft" {{ old('status', $form->status) === 'draft' ? 'selected' : '' }}>Private Draft</option>
                    </select>
                </div>

                <div class="pt-4 border-t border-slate-100">
                    <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-black py-4 rounded-xl transition-all shadow-lg text-center drop-shadow-sm flex justify-center items-center gap-2">
                        <i class="fa-solid fa-microchip"></i> Save Advanced Form Concept
                    </button>
                    <p class="text-[10px] text-center text-slate-400 font-bold mt-2 uppercase tracking-widest">
                        <i class="fa-solid fa-bolt text-emerald-500 mr-1"></i> Data Sync Engine
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side: Dynamic Form Builder -->
        <div class="w-full xl:w-2/3 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col">
            <div class="bg-slate-900 p-4 border-b border-slate-800 flex justify-between items-center z-10 flex-wrap gap-4">
                <h3 class="text-xs font-black text-white uppercase tracking-widest flex items-center gap-2">
                    <i class="fa-solid fa-code-branch text-emerald-400"></i> Field Logic Builder
                </h3>
                <div class="flex gap-2 flex-wrap">
                    <button type="button" @click="addField('text')" class="text-[11px] bg-slate-800 hover:bg-slate-700 text-white font-bold py-1.5 px-3 rounded shadow-sm border border-slate-700">
                        + Text Input
                    </button>
                    <button type="button" @click="addField('textarea')" class="text-[11px] bg-slate-800 hover:bg-slate-700 text-white font-bold py-1.5 px-3 rounded shadow-sm border border-slate-700">
                        + Text Area
                    </button>
                    <button type="button" @click="addField('dropdown')" class="text-[11px] bg-slate-800 hover:bg-slate-700 text-white font-bold py-1.5 px-3 rounded shadow-sm border border-slate-700">
                        + Dropdown Options
                    </button>
                    <button type="button" @click="addField('file')" class="text-[11px] bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-1.5 px-3 rounded border border-emerald-500/50 shadow-sm">
                        + File Upload
                    </button>
                </div>
            </div>

            <!-- Builder Area -->
            <div class="p-6 bg-slate-50 min-h-[500px]">
                
                <template x-if="fields.length === 0">
                    <div class="border-2 border-dashed border-slate-300 rounded-2xl p-12 text-center text-slate-500 bg-white">
                        <i class="fa-solid fa-boxes-stacked text-3xl mb-3 text-slate-300"></i>
                        <p class="font-bold text-lg">Empty Configuration</p>
                        <p class="text-sm font-medium mt-1">Inject custom fields using the top buttons.</p>
                    </div>
                </template>

                <div class="space-y-6">
                    <template x-for="(field, index) in fields" :key="field.id">
                        <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden transition-all group">
                            
                            <!-- Field Header -->
                            <div class="bg-slate-800 px-4 py-2 flex justify-between items-center text-white"
                                 :class="{ 'bg-emerald-900 border-emerald-800': field.base_amount > 0 }">
                                <div class="flex items-center gap-3">
                                    <span class="bg-white/20 text-white font-black text-[10px] px-2 py-0.5 rounded cursor-move">
                                        #<span x-text="index + 1"></span>
                                    </span>
                                    <span class="text-[10px] font-black uppercase tracking-widest text-slate-200" x-text="field.type"></span>
                                    
                                    <!-- Badges -->
                                    <div class="flex gap-1 ml-2">
                                        <template x-if="field.base_amount > 0">
                                            <span class="bg-emerald-500 text-white font-bold text-[9px] px-1.5 rounded uppercase shadow-sm">
                                                <i class="fa-solid fa-sack-dollar text-[8px]"></i> Monetized
                                            </span>
                                        </template>
                                        <template x-if="field.depends_on && field.depends_on !== ''">
                                            <span class="bg-purple-500 text-white font-bold text-[9px] px-1.5 rounded uppercase shadow-sm">
                                                <i class="fa-solid fa-link text-[8px]"></i> Logical Link
                                            </span>
                                        </template>
                                    </div>
                                </div>
                                
                                <div class="flex gap-1">
                                    <button @click.prevent="moveUp(index)" x-show="index > 0" class="text-slate-300 hover:text-white transition-colors p-1">
                                        <i class="fa-solid fa-arrow-up text-[11px]"></i>
                                    </button>
                                    <button @click.prevent="moveDown(index)" x-show="index < fields.length - 1" class="text-slate-300 hover:text-white transition-colors p-1">
                                        <i class="fa-solid fa-arrow-down text-[11px]"></i>
                                    </button>
                                    <button @click.prevent="removeField(index)" class="text-red-400 hover:text-red-300 transition-colors p-1 ml-2">
                                        <i class="fa-regular fa-trash-can text-[11px]"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="p-4 bg-white grid gap-6 grid-cols-1 divide-y divide-slate-100">
                                
                                <!-- Core Settings -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="md:col-span-2">
                                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Field Identifier Label</label>
                                        <input type="text" x-model="field.label" placeholder="e.g., Target Class Subject" 
                                               class="w-full text-sm font-bold text-slate-900 border border-slate-200 rounded-lg p-2.5 focus:border-emerald-500 outline-none">
                                    </div>

                                    <template x-if="field.type !== 'file'">
                                        <div class="md:col-span-2">
                                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Placeholder Text</label>
                                            <input type="text" x-model="field.placeholder" placeholder="Type here..." 
                                                   class="w-full text-sm font-medium text-slate-600 border border-slate-200 rounded-lg p-2 focus:border-emerald-500 outline-none">
                                        </div>
                                    </template>
                                    
                                    <template x-if="field.type === 'dropdown' && (!field.depends_on || field.dependency_mode === 'visibility')">
                                        <div class="md:col-span-2">
                                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Dropdown Options (Comma Separated)</label>
                                            <input type="text" x-model="field.options" placeholder="Maths, Science, English" 
                                                   class="w-full text-sm font-medium text-slate-600 border border-slate-200 rounded-lg p-2 focus:border-emerald-500 outline-none">
                                        </div>
                                    </template>

                                    <div class="md:col-span-2 flex items-center mt-1">
                                        <input type="checkbox" x-model="field.is_required" class="w-4 h-4 text-emerald-500 bg-slate-100 border-slate-300 rounded focus:ring-emerald-500 cursor-pointer">
                                        <label class="ml-2 text-xs font-bold text-slate-600 cursor-pointer">Require User to fill this out mandatory</label>
                                    </div>
                                </div>

                                <!-- Conditional Logic Engine -->
                                <div class="pt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="md:col-span-2">
                                        <h4 class="text-[10px] font-black text-purple-600 mb-2 uppercase tracking-widest"><i class="fa-solid fa-code-branch"></i> Conditional Dependency Engine</h4>
                                        <p class="text-[10px] text-slate-400 mb-2 font-medium leading-relaxed">Establish parent-child relationships. E.g. If you select "Class X" in parent dropdown, then reveal this specific "Subjects" dropdown field.</p>
                                    </div>
                                    
                                    <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Depends On (Parent Field)</label>
                                            <select @change="field.depends_on = $event.target.value; if(!field.depends_on) { field.dependency_mode = 'visibility'; }" class="w-full text-xs font-bold text-slate-700 border border-slate-200 rounded-lg p-2 border-r-4 border-r-transparent outline-none focus:border-purple-500 cursor-pointer">
                                                <option value="" :selected="field.depends_on === '' || !field.depends_on">-- No Dependency (Always Visible) --</option>
                                                <template x-for="parent in getEligibleParents(index)" :key="parent.id">
                                                    <option :value="parent.id" :selected="parent.id === field.depends_on" x-text="parent.label ? parent.label + ' (' + parent.type + ')' : 'Untitled (' + parent.type + ')' "></option>
                                                </template>
                                            </select>
                                        </div>

                                        <template x-if="field.depends_on && field.depends_on !== ''">
                                            <div>
                                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Dependency Behavior</label>
                                                <select x-model="field.dependency_mode" class="w-full text-[11px] font-bold text-slate-700 border border-slate-200 rounded-lg p-2 outline-none focus:border-purple-500 cursor-pointer">
                                                    <option value="visibility">Hide/Show entirely based on strict match</option>
                                                    <option value="options">Dynamically Bind & Change Options mapping</option>
                                                </select>
                                            </div>
                                        </template>
                                    </div>

                                    <template x-if="field.depends_on && field.dependency_mode === 'visibility'">
                                        <div class="md:col-span-2">
                                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Trigger Value (Exact Match)</label>
                                            <input type="text" x-model="field.depends_on_value" placeholder="e.g. Science"
                                                   class="w-full text-xs font-bold text-slate-700 border border-slate-200 rounded-lg p-2 focus:border-purple-500 outline-none">
                                        </div>
                                    </template>

                                    <template x-if="field.depends_on && field.dependency_mode === 'options'">
                                        <div class="md:col-span-2 space-y-3 bg-purple-50 rounded-xl p-4 border border-purple-100">
                                            <h4 class="text-[10px] font-black text-purple-600 uppercase tracking-widest"><i class="fa-solid fa-list-ul"></i> Mapped Child Options</h4>
                                            
                                            <template x-for="parentOpt in getParentOptions(field.depends_on)" :key="parentOpt">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-1/3 text-xs font-bold text-purple-900 bg-purple-100/50 py-2 px-3 rounded-l-lg border border-purple-200 border-r-0 truncate" x-text="'If Parent is \'' + parentOpt + '\''"></div>
                                                    <input type="text" x-model="field.mapped_options[parentOpt]" placeholder="Comma separated options..." 
                                                           class="w-2/3 text-xs font-medium text-slate-700 border border-slate-200 rounded-r-lg p-2 focus:border-purple-500 outline-none shadow-sm">
                                                </div>
                                            </template>
                                            
                                            <template x-if="getParentOptions(field.depends_on).length === 0">
                                                <div class="text-[10px] text-red-500 font-bold"><i class="fa-solid fa-triangle-exclamation mr-1"></i> Parent field must be a standard dropdown with valid options populated to map against.</div>
                                            </template>
                                        </div>
                                    </template>
                                </div>

                                <!-- Monetization Engine -->
                                <div class="pt-4 grid grid-cols-1 md:grid-cols-2 gap-4 bg-emerald-50/30 rounded-xl p-4 -mx-4 -mb-4 mt-2 border-t border-emerald-50">
                                    <div class="md:col-span-2 flex items-center justify-between">
                                        <h4 class="text-[10px] font-black text-emerald-600 uppercase tracking-widest"><i class="fa-solid fa-sack-dollar"></i> Monetization Engine</h4>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Base Amount Trigger (₹)</label>
                                        <input type="number" step="0.01" x-model="field.base_amount" placeholder="0.00" 
                                               class="w-full text-xs font-bold text-slate-700 border border-slate-200 rounded-lg p-2 focus:border-emerald-500 outline-none">
                                        <p class="text-[9px] text-slate-400 mt-1">If this field is filled/selected, charge this base amount.</p>
                                    </div>

                                    <div>
                                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Tax Rules Config (%)</label>
                                        <input type="number" step="0.01" x-model="field.tax_percentage" placeholder="18.00" 
                                               class="w-full text-xs font-bold text-slate-700 border border-slate-200 rounded-lg p-2 focus:border-emerald-500 outline-none">
                                        <p class="text-[9px] text-slate-400 mt-1">Percentage markup automatically calculated at checkout.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

    </div>
</form>

<script>
    function formBuilder() {
        // Prepare pre-existing data
        let initialFields = @json($form->exists ? $form->fields : []);
        
        // Data format mapping because options is stored as array in DB but we want comma separated str for editing
        initialFields = initialFields.map(field => {
            field.id = field.field_identifier || field.id.toString(); 
            field.depends_on = field.depends_on || '';
            field.depends_on_value = field.depends_on_value || '';
            
            // Reconstruct Dependency Options visually
            if (field.depends_on_value === '__MAPPED__' && typeof field.options === 'object' && field.options !== null) {
                field.dependency_mode = 'options';
                field.mapped_options = {};
                for(let key in field.options) {
                    field.mapped_options[key] = field.options[key].join(', ');
                }
                field.options = ''; 
                field.depends_on_value = '';
            } else {
                field.dependency_mode = 'visibility';
                field.mapped_options = {};
                if (Array.isArray(field.options)) {
                    field.options = field.options.join(', ');
                }
            }
            return field;
        });

        return {
            fields: initialFields,
            fieldsJson: '',
            
            generateUUID() {
                return 'f_' + Date.now().toString(36) + Math.random().toString(36).substr(2);
            },

            addField(type) {
                this.fields.push({
                    id: this.generateUUID(),
                    type: type,
                    label: '',
                    placeholder: '',
                    options: '',
                    is_required: false,
                    depends_on: '',
                    depends_on_value: '',
                    base_amount: null,
                    tax_percentage: null
                });
            },
            removeField(index) {
                // If we remove a field, any field dependent on it should have their dependency cleared
                const removedId = this.fields[index].id;
                this.fields.forEach(f => {
                    if (f.depends_on === removedId) {
                        f.depends_on = '';
                        f.depends_on_value = '';
                    }
                });
                this.fields.splice(index, 1);
            },
            moveUp(index) {
                if (index > 0) {
                    const temp = this.fields[index];
                    this.fields[index] = this.fields[index - 1];
                    this.fields[index - 1] = temp;
                }
            },
            moveDown(index) {
                if (index < this.fields.length - 1) {
                    const temp = this.fields[index];
                    this.fields[index] = this.fields[index + 1];
                    this.fields[index + 1] = temp;
                }
            },
            
            // To prevent circular dependencies, a field can only depend on fields situated BEFORE it in the DOM order.
            getEligibleParents(currentIndex) {
                return this.fields.slice(0, currentIndex);
            },

            getParentOptions(parentId) {
                if(!parentId) return [];
                let parent = this.fields.find(f => f.id === parentId);
                if(parent && parent.type === 'dropdown') {
                    if(typeof parent.options === 'string' && parent.options.trim() !== '') {
                        return parent.options.split(',').map(s=>s.trim()).filter(s=>s!=='');
                    }
                }
                return [];
            },

            prepareSubmit() {
                this.fieldsJson = JSON.stringify(this.fields);
            }
        }
    }
</script>
@endsection
