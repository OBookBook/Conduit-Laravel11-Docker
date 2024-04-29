<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function show($id): View
    {
        // $article = Article::find($id);
        return view('article');
        // return view('article', ['article' => $article]);
    }

    public function create(): View
    {
        return view('create_edit_article');
    }

    public function store(Request $request)
    {
        // $article = /** ... */
        // return redirect()->route('article.show', ['id' => $article->id]);
    }

    public function edit($id): View
    {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        // $article = /** ... */
        // return redirect()->route('article.show', ['id' => $article->id]);
    }

    public function delete($id)
    {
        Article::destroy($id);
        return redirect()->route('home');
    }
}
