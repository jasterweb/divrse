<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(3);
        return view('welcome',compact('articles'));
    }
    public function blog()
    {
        $articles = Article::paginate(9);
        return view('blog',compact('articles'));
    }
    public function solution()
    {
        return view('solution');
    }
    public function candidate(){return view('candidate');}
    public function talent(){return view('talent');}
    public function employer(){return view('employer');}
    public function analytic(){return view('analytic');}
    public function about(){return view('about');}
}
