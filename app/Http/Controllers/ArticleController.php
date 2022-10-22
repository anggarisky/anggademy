<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
        return view('admin.article.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $thumbnailName = str_replace(' ', '-', $request->file('thumbnail')->getClientOriginalName());

        $url = $request->file('thumbnail')->storeAs(
            'assets/thumbnail_tips',
            $thumbnailName,
            'public'
        );

        $data['thumbnail'] = $url;
        $data['slug'] = Str::slug($request->title);

        Article::create($data);

        return redirect()->route('admin.index.article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article, $id)
    {
        //
        $details = Article::where('id', $id)->firstOrFail();
        return view('admin.article.edit', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article, $id)
    {
        //

        $data = $request->all();

        if ($request->file('thumbnail')) {
            $thumbnailName = str_replace(' ', '-', $request->file('thumbnail')->getClientOriginalName());

            $url = $request->file('thumbnail')->storeAs(
                'assets/thumbnail_tips',
                $thumbnailName,
                'public'
            );

            $data['thumbnail'] = $url;
        }
        $data['slug'] = Str::slug($request->title);

        $details_art = Article::findOrFail($id);
        $details_art->update($data);

        return redirect()->route('admin.index.article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}