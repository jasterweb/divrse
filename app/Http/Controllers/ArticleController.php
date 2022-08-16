<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

        Alert::success('Success', 'Berhasil Tambah Data');
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $replaced = preg_replace('~<p[^>]*>~', '', $request->desc);
        $article->desc = $replaced;
        $article->user_id = auth()->user()->id;
        $article->published_at = now();
        $article->slug = \Str::slug($request->title);
        
        foreach ($request->input('document', []) as $file) {
               $article->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document');
               $article->img = $file;
            }

        Alert::success('Success', 'Berhasil Tambah Data');
        $article->save();
        return redirect()->route('article.allpost');
    }

    public function edit(Article $article) 
    {
        // dd($item);
        return view('article.edit',compact('article'));
    }

    public function update(Request $request, Article $article)
    {

       
        if (count(array($article->img)) > 0) {
         
            foreach (array($article->img) as $media) {
                    if (!in_array($article->media->pluck('file_name')->toArray(), $request->input('document', []))) {
                        if($article->img && $request->input('document', []) != []){
                            $article->media()->delete();
                        }
                    }
            }
        }
        $media = $article->media->pluck('file_name')->toArray();
       
        foreach ($request->input('document', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $article->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document');
                $article->img = $file;
            }
            
        }
        
        $article->update($request->all());

        return redirect()->route('article.allpost');
    }

    
    public function show(Article $article)
    {
        $article->with('user')->first();
        return view('article.single',compact('article'));
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.allpost');
    }
}
