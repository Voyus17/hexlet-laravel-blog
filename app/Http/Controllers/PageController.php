<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{
    public function about()
    {
        $team = [
            ['name' => 'Hodor', 'position' => 'programmer'],
            ['name' => 'Joker', 'position' => 'CEO'],
            ['name' => 'Elvis', 'position' => 'CTO'],
        ];
        return view('about')->with('team', $team);
    }

    public function articles()
    {
        $articles = Article::paginate(3);
        $url = route('articles');
        return view('articles')->with(['articles'=>$articles, 'url'=>$url]);
    }

    public function show($id)
    {
        $article = Article::FindOrFail($id);
        return view('article', compact('article'));
    }

}


