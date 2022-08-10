<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('welcome',compact('articles'));
    }
    public function solution()
    {
        return view('solution');
    }
    public function candidate(){return view('candidate');}
    public function talent(){return view('talent');}
}
