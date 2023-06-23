<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view()('blog')->with('article', $articles);
    }
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request){
        Article::create($this->validateArticle($request));
        return redirect(route('blog'));
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticle($request));

        return redirect()->route('blog.show', $article);
    }
    //

    public function destroy(Article $article) {
        $article->delete();

        return redirect()->route('blog');
    }

    private function validateArticle(Request $request)
    {
        return $request->validate([
            'name'=> 'required',
            'title'=> 'required',
            'description'=>'required'
        ]);
    }
}
