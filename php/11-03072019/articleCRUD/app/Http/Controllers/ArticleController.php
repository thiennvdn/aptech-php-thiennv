<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\ArticleCategory;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $article = New Article;
        $title = $request->title;
        $article->title = $title;
        $article->slug = $request->slug;
        $article->description = $request->description;
        $article->content = $request->content;

        // $strSlug = $title;
        // $slug = Str::slug($strSlug, '-');
        // $article->slug = $slug;

        $article->save();

        // $a = New ArticleCategory;
        // $a->category_id = $request->category;
        // $a->article_id = $article->id;
        // $a->save();

        $article->categories()->sync($request->categories, false);

        return view('articles.show', ['article' => $article]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }
        return view('articles.edit', ['article' => $article, 'categories' => $cats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->slug = $request->slug;
        $article->description = $request->description;
        $article->content = $request->content;

        // $strSlug = $request->slug;
        // $slug = Str::slug($strSlug, '-');
        // $article->slug = $slug;

        $article->save();

        // if (isset($request->categories)) {
        //     $article->categories()->sync($request->categories);
        // } else {
        //     $article->categories()->sync(array());
        // }


        return view('articles.show', ['article' => $article]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();
        $article->delete();
        return redirect()->route('articles.index');
    }
}
