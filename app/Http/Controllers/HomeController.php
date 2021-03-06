<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get(); // mengambil semua data berdasarkan tanggal yg dibuat
        
        return view('home.index', compact('posts'));
    }
    public function login()
    {
        return view('signin.login');
    }
    public function logup()
    {
        return view('signup.logup');
    }
    public function tentang()
    {
        return view('about.tentang');
    }
    public function kebijakanPrivasi()
    {
        return view('rule.terms_of_service');
    }
    public function view_create_article()
    {
        return view('timeline.create_article');
    }
}
