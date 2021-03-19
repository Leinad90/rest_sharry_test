<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public static function index()
    {
        return \App\Models\News::all();
    }
 
    public function show(int $id)
    {
        return News::find($id);
    }

    public function store(Request $request)
    {
        return News::create($request->all());
    }

    public function update(Request $request, int $id)
    {
        $article = News::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, int $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
}
