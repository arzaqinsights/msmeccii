@extends('layouts.admin')

@section('title', $category . ' - Gallery')

@section('header', 'Album: ' . $category)

@section('content')
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.gallery.index') }}" class="text-indigo-600 hover:text-indigo-900 font-bold text-sm bg-white px-4 py-2 rounded-xl shadow-sm border border-slate-200">
            <i class="fa-solid fa-arrow-left mr-2"></i> Back to Albums
        </a>
        <div class="text-slate-500 text-sm font-semibold">
            <i class="fa-regular fa-image border border-slate-200 p-2 rounded-lg bg-white shadow-sm mr-1"></i> Total: {{ $images->count() }} Images
        </div>
    </div>

    @if($images->count() > 0)
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        @foreach($images as $image)
        <div class="relative group bg-white p-2 rounded-2xl shadow-sm border border-slate-200">
            <div class="aspect-square w-full overflow-hidden rounded-xl bg-slate-100">
                <img src="{{ asset($image->image_path) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform" alt="">
            </div>
            
            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity rounded-2xl flex items-center justify-center backdrop-blur-sm shadow-inner">
                <form action="{{ route('admin.gallery.destroy', $image->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white p-3 rounded-full shadow-lg transform hover:scale-110 transition-transform" title="Delete Image">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="bg-white rounded-2xl p-12 text-center border border-slate-200 border-dashed mt-8">
        <i class="fa-regular fa-image text-4xl text-slate-300 mb-3 block"></i>
        <p class="text-slate-500 font-medium">This album is empty. If all images are deleted, the category is automatically removed.</p>
    </div>
    @endif

</div>
@endsection
