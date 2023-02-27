<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return View('blog')->with('articles', $articles);
    }
    public function show()
    {
        $articles = Article::all();
        return View('blog')->with('articles', $articles);
    }

    public function create()
    {
        return View('create');
    }

    public function store(){
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $article = new Article();
        $article->title = request('title');
        $article->content = request('content');

        $article->save();
        return redirect('/blog');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('edit', ['blog' => $article]);
    }

    public function update($id)
    {
        $article = Article::find($id);
        $article->title = request('title');
        $article->content = request('content');
        $article->save();

        return redirect('/blog' . $article->id);
    }
    //
}
