<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use App\Question;
use App\Teacher;
use App\Quote;
use App\Page;
use App\Book;
use App\News;

class MainController extends Controller
{
    public function home()
    {
    	$news = News::all();
        $quotes = Quote::all(); 
        $page = Page::where('slug','bosh-sahifa')->first();
        $about = Page::where('template','about')->first();
        // dd($about);
        $offer_about = $about->details()->where('id', 2)->first();

    	// $news = $news->load('translations');
    	return view('pages.home', compact('news','quotes','page','offer_about'));
    }

    public function news_page($slug)
    {
    	$post = News::where('slug',$slug)->first();
    	if(!$post){
    		abort(404);
    	}
    	return view('pages.in_news', compact('post'));
    }

    public function books()
    {
        $page  = Page::where('slug','books')->first();
        $books = Book::all();
        return view('pages.books', compact('books','page'));
    }

    public function page($slug)
    {
        $page = Page::where('slug',$slug)->first();
        if(!$page){
            abort(404);
        }
        if($page->template == 'about'){

            $teachers = Teacher::all();
            return view('pages.about', compact('page','teachers'));

        }elseif($page->template == 'books'){
            return redirect('/books');

        }elseif($page->template == 'questions'){
             return redirect('/questions');

        }elseif($page->template == 'home'){
            return redirect('/');

        }elseif($page->template == 'contacts'){
            return view('pages.contacts', compact('page'));


        }else{
            return view('pages.in_page', compact('page'));
        }
    }

    public function questions()
    {
        $questions = Question::all();
        $page = Page::where('slug','questions')->first();
        return view('pages.question',compact('questions','page'));
    }

    public function sendForm(Request $request)
    {   
        $details = $request->input();
        $send = \Mail::to('giyosiddinmirzaboyev@gmail.com')->send(new ContactMessage($details));
        dd($send);
    }
}
