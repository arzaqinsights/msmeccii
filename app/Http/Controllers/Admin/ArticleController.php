<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = $this->getAllCategories();
        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'nullable|max:255',
            'author' => 'nullable|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|max:5120',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->slug = Str::slug($request->title);
        $article->category = $request->category ? trim($request->category) : null;
        $article->author = $request->author;
        $article->content = $request->content; // JSON string from block builder
        $article->excerpt = $this->generateExcerpt($request->content);
        
        if ($request->hasFile('thumbnail')) {
            $article->thumbnail = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }
        
        $article->is_published = $request->has('is_published');
        if ($article->is_published) {
            $article->published_at = now();
        }

        $article->save();

        return redirect()->route('admin.articles.index')->with('success', 'Article published successfully!');
    }

    public function edit(Article $article)
    {
        $categories = $this->getAllCategories();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'nullable|max:255',
            'author' => 'nullable|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|max:5120',
        ]);

        $article->title = $request->title;
        $article->slug = Str::slug($request->title);
        $article->category = $request->category ? trim($request->category) : null;
        $article->author = $request->author;
        $article->content = $request->content;
        $article->excerpt = $this->generateExcerpt($request->content);
        
        if ($request->hasFile('thumbnail')) {
            if ($article->getOriginal('thumbnail')) {
                Storage::disk('public')->delete($article->getOriginal('thumbnail'));
            }
            $article->thumbnail = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }

        $article->is_published = $request->has('is_published');
        
        if ($article->is_published && !$article->published_at) {
            $article->published_at = now();
        } elseif (!$article->is_published) {
            $article->published_at = null;
        }

        $article->save();

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully!');
    }

    public function destroy(Article $article)
    {
        if ($article->thumbnail) {
            Storage::disk('public')->delete($article->thumbnail);
        }
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted!');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('articles/content', 'public');
            return response()->json(['location' => asset('storage/' . $path)]);
        }
        return response()->json(['error' => 'No file provided'], 400);
    }

    /**
     * Extract readable text from JSON blocks to generate an auto-excerpt.
     */
    private function generateExcerpt($jsonContent)
    {
        $blocks = json_decode($jsonContent, true);
        if (!is_array($blocks)) return Str::limit(strip_tags($jsonContent), 160);

        $text = '';
        foreach ($blocks as $block) {
            if (in_array($block['type'] ?? '', ['paragraph', 'heading', 'quote'])) {
                $text .= ($block['content'] ?? '') . ' ';
            }
            if (($block['type'] ?? '') === 'list' && isset($block['items'])) {
                $text .= implode(', ', $block['items']) . ' ';
            }
        }
        return Str::limit(strip_tags(trim($text)), 160);
    }

    /**
     * Get all unique categories across all articles (handles comma-separated values).
     */
    private function getAllCategories()
    {
        $raw = Article::whereNotNull('category')->where('category', '!=', '')->pluck('category');
        
        return $raw->flatMap(function ($cats) {
            return collect(explode(',', $cats))->map(fn($c) => trim($c))->filter();
        })->unique()->sort()->values();
    }
}
