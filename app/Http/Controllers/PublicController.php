<?php

namespace App\Http\Controllers;

use Backpack\NewsCRUD\app\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function index()
    {
        $articles = Article::with(['category', 'tags'])->orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('articles'));
    }

    public function blog()
    {
        $articles = Article::with(['category', 'tags'])->orderBy('created_at', 'DESC')->get();
        return view('blog', compact('articles'));
    }

    public function faq()
    {
        return view('faq');
    }

}
