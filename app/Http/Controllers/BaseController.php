<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        $home = Page::all();
        ///$home = Page::where('page_title','home')->get();

        $post = Post::where('page_title', 'home')->get();
        return view('frontend.home', ['home' => $home, 'post' => $post]);
    }
    public function about()
    {
        $about = Page::where('page_title', 'about')->get();
        $post = Post::where('page_title', 'about')->get();
        return view('frontend.about', ['about' => $about, 'post' => $post]);
    }
    public function courses()
    {
        $courses = Page::where('page_title', 'courses')->get();
        $post = Post::where('page_title', 'courses')->get();
        return view('frontend.courses', ['courses' => $courses, 'post' => $post]);
    }
    public function trainers()
    {
        $trainers = Page::where('page_title', 'trainers')->get();
        $post = Post::where('page_title', 'trainers')->get();
        return view('frontend.trainers', ['trainers' => $trainers, 'post' => $post]);
    }
    public function events()
    {
        $events = Page::where('page_title', 'events')->get();
        $post = Post::where('page_title', 'events')->get();
        return view('frontend.events', ['events' => $events, 'post' => $post]);
    }
    public function pricing()
    {
        $pricing = Page::where('page_title', 'pricing')->get();
        $post = Post::where('page_title', 'pricing')->get();
        return view('frontend.pricing', ['pricing' => $pricing, 'post' => $post]);
    }
    public function contact()
    {
        $contact = Page::where('page_title', 'contact')->get();
        $post = Post::where('page_title', 'contact')->get();
        return view('frontend.contact', ['contact' => $contact, 'post' => $post]);
    }
}
