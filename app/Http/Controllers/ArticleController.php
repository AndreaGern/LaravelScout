<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $search = !empty($request->search) ? Article::search($request->search)->paginate(6) : Article::paginate(6);
        return view('articles.index', ['articles'=>$search]);
    }
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
