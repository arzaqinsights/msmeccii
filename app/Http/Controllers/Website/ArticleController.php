<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_published', true)->latest('published_at')->paginate(12);
        return view('website.articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $related = Article::where('is_published', true)
                            ->where('id', '!=', $article->id)
                            ->where(function ($q) use ($article) {
                                $cats = array_map('trim', explode(',', $article->category ?? ''));
                                foreach ($cats as $cat) {
                                    if ($cat) $q->orWhere('category', 'LIKE', '%' . $cat . '%');
                                }
                            })
                            ->latest()
                            ->take(3)
                            ->get();

        return view('website.articles.show', compact('article', 'related'));
    }
}
