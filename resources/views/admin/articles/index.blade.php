@extends('layouts.admin')

@section('content')
<div class="px-8 py-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-black text-slate-800 tracking-tight">Articles & News</h2>
            <p class="text-sm text-slate-500 font-medium">Manage your blog posts, insights, and media publications.</p>
        </div>
        <a href="{{ route('admin.articles.create') }}" class="px-5 py-2.5 bg-brand-primary text-white text-sm font-bold rounded-xl shadow-md hover:bg-brand-dark transition-all flex items-center gap-2">
            <i class="fa-solid fa-pen-nib"></i> Write Article
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl flex items-center gap-3">
            <i class="fa-solid fa-check-circle text-emerald-500"></i>
            <span class="text-sm font-bold">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                        <th class="p-4 pl-6 border-b border-slate-100">Article</th>
                        <th class="p-4 border-b border-slate-100">Category</th>
                        <th class="p-4 border-b border-slate-100">Status</th>
                        <th class="p-4 border-b border-slate-100">Date</th>
                        <th class="p-4 pr-6 border-b border-slate-100 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($articles as $article)
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 pl-6 flex items-center gap-4">
                                <div class="w-14 h-14 rounded-lg bg-slate-100 flex-shrink-0 overflow-hidden shadow-inner">
                                    <img src="{{ $article->thumbnail_url }}" alt="Thumb" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <div class="font-bold text-slate-800 text-sm mb-0.5 truncate max-w-xs">{{ $article->title }}</div>
                                    <div class="text-xs text-slate-500 font-medium truncate max-w-xs">{{ url('/blog/' . $article->slug) }}</div>
                                </div>
                            </td>
                            <td class="p-4">
                                <div class="flex flex-wrap gap-1">
                                    @if($article->category)
                                        @foreach(array_map('trim', explode(',', $article->category)) as $cat)
                                            <span class="bg-slate-100 text-slate-600 text-[11px] font-bold px-2 py-1 rounded-md uppercase tracking-wider">{{ $cat }}</span>
                                        @endforeach
                                    @else
                                        <span class="bg-slate-100 text-slate-400 text-[11px] font-bold px-2 py-1 rounded-md uppercase tracking-wider">Uncategorized</span>
                                    @endif
                                </div>
                            </td>
                            <td class="p-4">
                                @if($article->is_published)
                                    <span class="flex items-center gap-1.5 text-xs font-bold text-emerald-600">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.5)]"></span> Published
                                    </span>
                                @else
                                    <span class="flex items-center gap-1.5 text-xs font-bold text-amber-600">
                                        <span class="w-2 h-2 rounded-full bg-amber-500"></span> Draft
                                    </span>
                                @endif
                            </td>
                            <td class="p-4 text-xs font-bold text-slate-500">
                                {{ $article->published_at ? $article->published_at->format('M d, Y') : 'N/A' }}
                            </td>
                            <td class="p-4 pr-6 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('blog.show', $article->slug) }}" target="_blank" class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center hover:bg-blue-100 transition-colors" title="View Live">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', $article) }}" class="w-8 h-8 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-slate-200 transition-colors" title="Edit">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </a>
                                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center hover:bg-red-100 transition-colors" title="Delete">
                                            <i class="fa-solid fa-trash text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-12 text-center text-slate-500">
                                <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fa-solid fa-newspaper text-2xl text-slate-300"></i>
                                </div>
                                <h4 class="font-bold text-slate-700 text-sm mb-1">No articles found</h4>
                                <p class="text-xs">Start writing your first blog post to engage your audience.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
