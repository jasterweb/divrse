<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        
        $articles = Article::orderBy('published_at','desc')->paginate(3);
        return view('welcome',compact('articles'));
    }
    public function blog()
    {
        $articles = Article::orderBy('published_at','desc')->paginate(9);
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
    public function started(){return view('get-started');}
    public function contactus(){return view('contact');}
    public function terms(){return view('terms');}
    public function privacy(){return view('privacy');}
    public function compliance(){return view('compliance');}
}
