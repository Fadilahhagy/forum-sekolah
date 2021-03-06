<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
public function index()
{
    $posts = Post::orderBy('created_at', 'DESC')->get(); // mengambil semua data berdasarkan tanggal yg dibuat

    return view('timeline.wall', compact('posts'));
}
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create_post');
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'file' => 'required|image|mimes:jpg,png,jpeg'
//        ]);
//        
        $create = new Post();
        $create->title = $request['title'];
        $create->body = $request['body'];
        $create->user_id = Auth::user()->id;
        
        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        $request->file('image')->move("image/", $fileName);

        $create->image = $fileName;
        $create->save();
        return redirect()->back()->with(['success' => 'Artikel Anda telah di post!']);
    }
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show_post', compact('post'));
    }
    public function search(Request $request)
    {
        $query = $request->get('qword');
        $posts = Post::where('title', 'LIKE', '%' . $query . '%')->paginate(5);
        return view('search.search_view', compact('posts', 'query'));
    }
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('timeline.edit_post', ['posts' => $posts]);
    }
    
    public function update(Request $request, $id)
    {
        Post::find($id)->update($request->all());
        return redirect('profile');
    }
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('profile');
    }
}
