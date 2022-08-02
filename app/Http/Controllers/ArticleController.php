<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.allpost',compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);


        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->desc = $request->desc;
        $article->user_id = auth()->user()->id;
        $article->published_at = now();
        $article->slug = \Str::slug($request->title);;
  
        foreach ($request->input('document', []) as $file) {
           $article->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document');
           $article->img = $file;
        }
        $article->save();

        return redirect()->route('article.create');
    }
}
