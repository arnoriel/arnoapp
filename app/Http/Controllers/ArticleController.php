<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Creator;
use App\Models\Setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::all();
        return view('article.index', compact('article'));
    }

    public function articlehome()
    {
        $article = Article::all();
        return view('home', compact('article'));
    }

    public function articlemain()
    {
        $article = Article::all();
        return view('main.index', compact('article'));
    }

    public function menu()
    {
        $setting=Setting::all();
        $creator=Creator::all();
        $article = Article::all();
        return view('main.article', compact('setting', 'creator', 'article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $creator=Creator::all();
        $article = Article::all();
        return view('article.create', compact('creator','article'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'imgsrc' => 'required',
            'content' => 'required',
            'creator_id' => 'required',
            'date' => 'required',
         ]);

         $article = new Article;
         $article->title = $request->title;
         if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/article/', $name);
            $article->thumbnail = $name;
            } 
        $article->imgsrc = $request->imgsrc;
        $article->content = $request->content;
        $article->creator_id = $request->creator_id;
        $article->date = $request->date;
        $article->save();
        Alert::success('Successfully added Article data ', 'Data has been entered in the database');
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $creator=Creator::all();
        $article=Article::findOrFail($id);
        return view('article.show', compact('creator','article'));
    }

    public function baca($id)
    {   
        $setting=Setting::all();
        $creator=Creator::all();
        $article=Article::findOrFail($id);
        return view('main.show', compact('setting','creator','article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $creator=Creator::all();
        $article=Article::findOrFail($id);
        return view('article.edit', compact('creator','article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'imgsrc' => 'required',
            'content' => 'required',
            'creator_id' => 'required',
            'date' => 'required',
         ]);

         $article=Article::findOrFail($id);
         $article->title = $request->title;
         if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/article/', $name);
            $article->thumbnail = $name;
            }
        $article->imgsrc = $request->imgsrc;
        $article->content = $request->content;
        $article->creator_id = $request->creator_id;
        $article->date = $request->date;
        $article->save();
        Alert::success('Successfully edited Article data ', 'Data has been updated from the database');
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = article::findOrFail($id);
        $article->delete();
        Alert::success('Successfully deleted Article data ', 'Data has been dropped from the database');
        return redirect()->route('article.index');
    }
}
