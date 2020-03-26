<?php

namespace App\Http\Controllers;

use App\Ticket;
use Backpack\NewsCRUD\app\Models\Article;
use Cviebrock\EloquentSluggable\Tests\Models\Post;
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
        $articles = Article::with(['category', 'tags'])->orderBy('created_at', 'DESC')->simplePaginate(5);
        $populars = Article::orderBy('views', 'DESC')->limit(5)->get();
        return view('blog', compact('articles', 'populars'));
    }

    public function faq()
    {
        return view('faq');
    }

    public function ticket(Request $request)
    {
        if (!$request->email) {
            session()->flash('error-message', 'Поле email обязательно для заполнения!');
            return redirect()->back();
        }
//        dd($request->except('_token'));
        $ticket = Ticket::create($request->except('_token'));

        session()->flash('success-message', 'Заявка #'.$ticket->id.' успешно создана.');
        return redirect()->back();
    }

}
