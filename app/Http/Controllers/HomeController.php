<?php

namespace App\Http\Controllers;

use App\User;

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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts);
//        $user = auth()->user();
//        $posts = DB::table('posts')->where('user_id', '=', $user->id)->orderBy('id','desc')->paginate(5);
//        return view('home')->with('posts',$posts);
    }
}



