<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class MainController extends Controller
{
    public function home()
    {
    	$news = News::all();
    	// $news = $news->load('translations');
    	return view('pages.home', compact('news'));
    }

    public function news_page($slug)
    {
    	$post = News::where('slug',$slug)->first();
    	if(!$post){
    		abort(404);
    	}
    	return view('pages.in_news', compact('post'));
    }

}
