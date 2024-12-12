<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::query()->orderBy('published_at', 'desc');

        // Filter by search keyword if provided
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', "%{$search}%");
        }

        $news = $query->paginate(3); 

        if ($request->ajax()) {
            $html = view('pages.frontend.news._news_items', compact('news'))->render();
            return response()->json(['html' => $html]);
        }

        return view('pages.frontend.news.index', compact('news'));
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('pages.frontend.news.show', compact('newsItem'));
    }
}
