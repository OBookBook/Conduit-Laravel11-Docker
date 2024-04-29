<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }
    
    public function create()
    {
        return view('create_edit_article');
    }

    public function store(StoreArticleRequest $request)
    {
        Article::create($request->validated());
        return redirect()->route('article.index')->with('success', '記事が正常に作成されました。');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('create_edit_article', compact('article'));
    }

    public function update(StoreArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->validated());
        return redirect()->route('article.index')->with('success', '記事が正常に更新されました。');
    }
}
