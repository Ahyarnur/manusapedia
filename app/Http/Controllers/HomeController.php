<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah=Post::count();
        return view('home',compact('jumlah'));
    }

    public function create()
    {
        return view('create');
    }

    public function tampil()
    {
    
        $posts=Post::latest()->get();
        return view('tampil',compact('posts'));
    }

    public function sunting(){
        return view('sunting');
    }
}
