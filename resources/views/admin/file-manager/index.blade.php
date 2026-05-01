@extends('layouts.admin')

@section('title', 'Content Upload Manager')

@section('content')
<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Content Uploads</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Upload images, videos, and PDFs to get their direct links.</p>
    </div>
</div>

@if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 rounded-xl text-emerald-700 font-bold text-sm">
        <i class="fa-solid fa-check-circle mr-2"></i> {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mb-6 p-4 bg-red-50 border border-red-100 rounded-xl text-red-700 font-bold text-sm">
        <i class="fa-solid fa-triangle-exclamation mr-2"></i> {{ session('error') }}
    </div>
@endif

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-8" x-data="fileUploader()">
    <div class="p-8">
        <div class="border-2 border-dashed border-slate-300 rounded-2xl p-10 text-center hover:bg-slate-50 transition-colors relative"
             @dragover.prevent="$el.classList.add('bg-slate-100', 'border-purple-500')"
             @dragleave.prevent="$el.classList.remove('bg-slate-100', 'border-purple-500')"
             @drop.prevent="handleDrop($event, $el); $el.classList.remove('bg-slate-100', 'border-purple-500')">
            
            <i class="fa-solid fa-cloud-arrow-up text-5xl text-purple-400 mb-4"></i>
            <h3 class="text-lg font-black text-slate-900 mb-2">Drag & Drop Files Here</h3>
            <p class="text-xs font-bold text-slate-500 mb-6">Supports Images, PDFs, Videos (Max 50MB)</p>
            
            <label class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg font-black text-xs uppercase tracking-widest cursor-pointer shadow-lg shadow-purple-600/30 transition-all">
                Browse Files
                <input type="file" multiple class="hidden" @change="handleFileSelect($event)">
            </label>
        </div>

        <!-- Upload Progress -->
        <div x-show="uploading" class="mt-6 p-4 bg-slate-50 rounded-xl border border-slate-100" style="display: none;">
            <div class="flex justify-between text-xs font-bold text-slate-600 mb-2">
                <span>Uploading...</span>
                <span x-text="progress + '%'"></span>
            </div>
            <div class="w-full bg-slate-200 rounded-full h-2">
                <div class="bg-purple-600 h-2 rounded-full transition-all duration-300" :style="'width: ' + progress + '%'"></div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="p-6 border-b border-slate-100 bg-slate-50 flex justify-between items-center">
        <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest"><i class="fa-solid fa-folder-open text-purple-500 mr-2"></i> Uploaded Files</h3>
    </div>
    
    <div class="p-6">
        @if(count($fileData) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($fileData as $file)
                    <div class="bg-white border border-slate-200 rounded-xl overflow-hidden hover:shadow-lg transition-all group relative">
                        <!-- Preview -->
                        <div class="h-40 bg-slate-100 flex items-center justify-center relative overflow-hidden border-b border-slate-100">
                            @if(in_array($file['extension'], ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg']))
                                <img src="{{ $file['url'] }}" class="w-full h-full object-cover">
                            @elseif(in_array($file['extension'], ['mp4', 'webm']))
                                <div class="w-full h-full flex flex-col items-center justify-center text-slate-400 bg-slate-900">
                                    <i class="fa-solid fa-video text-3xl mb-2 text-purple-400"></i>
                                    <span class="text-[10px] font-black uppercase tracking-widest text-slate-500">{{ $file['extension'] }}</span>
                                </div>
                            @elseif($file['extension'] === 'pdf')
                                <div class="w-full h-full flex flex-col items-center justify-center text-slate-400 bg-red-50">
                                    <i class="fa-solid fa-file-pdf text-3xl mb-2 text-red-400"></i>
                                    <span class="text-[10px] font-black uppercase tracking-widest text-red-500">PDF Document</span>
                                </div>
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center text-slate-400">
                                    <i class="fa-solid fa-file text-3xl mb-2"></i>
                                    <span class="text-[10px] font-black uppercase tracking-widest">{{ $file['extension'] }}</span>
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2 backdrop-blur-sm">
                                <a href="{{ $file['url'] }}" target="_blank" class="w-8 h-8 rounded-full bg-white text-slate-900 flex items-center justify-center hover:bg-purple-600 hover:text-white transition-colors" title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <button type="button" onclick="copyToClipboard('{{ $file['url'] }}')" class="w-8 h-8 rounded-full bg-white text-slate-900 flex items-center justify-center hover:bg-emerald-500 hover:text-white transition-colors" title="Copy Link">
                                    <i class="fa-solid fa-link"></i>
                                </button>
                                <form action="{{ route('admin.file-manager.destroy') }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this file? Any content using this link will break.')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="filename" value="{{ $file['name'] }}">
                                    <button type="submit" class="w-8 h-8 rounded-full bg-white text-slate-900 flex items-center justify-center hover:bg-red-500 hover:text-white transition-colors" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Details -->
                        <div class="p-3">
                            <p class="text-[10px] font-black text-slate-900 truncate mb-1" title="{{ $file['name'] }}">{{ $file['name'] }}</p>
                            <div class="flex justify-between items-center text-[9px] font-bold text-slate-400 uppercase tracking-widest">
                                <span>{{ $file['size'] }}</span>
                                <span>{{ date('M d, Y', $file['time']) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <i class="fa-solid fa-folder-open text-4xl text-slate-200 mb-4 block"></i>
                <h4 class="text-sm font-black text-slate-500 uppercase tracking-widest">No files uploaded yet</h4>
            </div>
        @endif
    </div>
</div>

<script>
function fileUploader() {
    return {
        uploading: false,
        progress: 0,
        
        handleFileSelect(event) {
            const files = event.target.files;
            if (files.length > 0) {
                this.uploadFiles(files);
            }
        },
        
        handleDrop(event, element) {
            const files = event.dataTransfer.files;
            if (files.length > 0) {
                this.uploadFiles(files);
            }
        },
        
        async uploadFiles(files) {
            this.uploading = true;
            this.progress = 0;
            
            // For simplicity, we process one by one to show progress, or just all at once.
            // All at once is simpler but progress is for the whole batch.
            const formData = new FormData();
            for (let i = 0; i < files.length; i++) {
                // To keep it simple and handle large files, we'll loop and do individual fetch calls 
                // but we can also just reload after all are done.
            }
            
            let uploadedCount = 0;
            const totalFiles = files.length;
            
            for (let i = 0; i < totalFiles; i++) {
                const form = new FormData();
                form.append('file', files[i]);
                form.append('_token', '{{ csrf_token() }}');
                
                try {
                    await fetch('{{ route("admin.file-manager.store") }}', {
                        method: 'POST',
                        body: form
                    });
                    
                    uploadedCount++;
                    this.progress = Math.round((uploadedCount / totalFiles) * 100);
                } catch (error) {
                    console.error('Error uploading file:', error);
                }
            }
            
            setTimeout(() => {
                window.location.reload();
            }, 500);
        }
    }
}

function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        const toast = document.createElement('div');
        toast.className = 'fixed bottom-4 right-4 bg-slate-900 text-white px-6 py-3 rounded-lg font-black text-xs uppercase tracking-widest shadow-2xl z-50 animate-bounce';
        toast.innerHTML = '<i class="fa-solid fa-check text-emerald-400 mr-2"></i> Link Copied!';
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.remove();
        }, 3000);
    });
}
</script>
@endsection
