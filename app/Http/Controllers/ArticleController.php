<?php

namespace App\Http\Controllers;

use Backpack\NewsCRUD\app\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($slug)
    {
        $article = Article::with(['category', 'tags'])->where('slug', $slug)->first();
        return view('article', compact('article'));
    }
}
