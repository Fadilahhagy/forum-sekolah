<?php

namespace App\Http\Controllers;

use Auth;
use Socialite;
use Validator;
use App\User;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthController extends Controller
{
    public function wall()
    {
        $articles = Article::orderBy('created_at', 'DESC')->get(); // mengambil semua data
        return view('timeline.wall', ['articles' => $articles]);
    }
    public function account($id)
    {
        $users = User::find($id); // mengambil data id
        return view('profile.account', ['users' => $users]);
    }
    public function profile()
    {
        $users = Auth::user();
        return view('profile.account', ['users' => $users]);
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|exists:users'
        ]);
        
        if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password ])){
            return redirect()->back();
        }
        return redirect('timeline');
        
         // dd(\Auth::attempt(['email' => $request->email, 'password' => $request->password ])); <Hanya untuk mengecek user yg sudah ada di DB
    }
    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'name' => 'required|min:5',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        
        User::create([
           'email' =>$request->email,
           'name' =>$request->name,
           'password' =>bcrypt($request->password)
        ]);
        
        return redirect('signin');
    }
    
    public function logout()
    {
        auth()->logout();
        
        return redirect()->route('signin'); //harus manggil route yg bermethod GET bukan POST!
    }
}