<?php

namespace App\Http\Controllers;

use Backpack\NewsCRUD\app\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($slug)
    {
        $article = Article::with(['category', 'tags'])->where('slug', $slug)->first();
        $article->views++;
        $article->save();
        $lasts = Article::with(['category', 'tags'])
            ->where('id', '!=', $article->id)
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();
        $populars = Article::with(['category', 'tags'])
            ->where('id', '!=', $article->id)
            ->orderBy('views', 'DESC')
            ->limit(5)
            ->get();


        return view('article', compact('article', 'lasts', 'populars'));
    }

    public function blog()
    {

    }
}
