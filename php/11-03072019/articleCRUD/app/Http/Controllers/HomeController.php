<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $articles =  Article::paginate(10);
        $firstArticle = $articles[0];
        $categories = Category::all();
        // dd($firstArticle);
        return view('users.home',['articles' => $articles, 'firstArticle' => $firstArticle, 'categories' => $categories]);
    }

    public function show($slug)
    {
        $categories = Category::all();
        $article = Article::where('slug', $slug)->get();
        return view('users.article', ['article' => $article[0], 'categories' => $categories]);
    }

    public function showCategory($name)
    {
        $categories = Category::all();
        // dd($name);
        $articles = Category::where('name', $name)->first()->articles()->get();
        // dd($articles);
        return view('users.category', ['articles' => $articles, 'categories' => $categories]);
    }
}
