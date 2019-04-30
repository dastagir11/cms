<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;

class BlogController extends Controller
{
	protected $limit = 3;
	
    public function index()
    {

    	// \DB::enableQueryLog();
    	// lazy loader
    	// $posts = Post::all();
    	// $posts = Post::with('auther')->orderBy('created_at', 'desc')->get();
    	// latest mehod
    	$posts = Post::with('auther')->latest()->paginate($this->limit);
    	// scope with query
    	 // $posts = Post::with('auther')->latestFirst()->get();

    	return view('blog.index', compact('posts'));

    	// dd(\DB::getQueryLog());
    }
}
