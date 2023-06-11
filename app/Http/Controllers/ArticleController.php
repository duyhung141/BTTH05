<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('article.create',compact('authors', 'categories'));
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function edit($ma_bviet)
    {
        $article=Article::where('ma_bviet',$ma_bviet)->first();
        $authors = Author::all();
        $categories = Category::all();
        return view('article.edit',compact('article','authors', 'categories'));
    }

    public function update()
    {

    }
}
