<?php

namespace App\Http\Controllers;
use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostsController extends Controller
{

  public  function index()
  {
    $post = Post::all();
    return view('posts.index', compact('posts'));
  }

    public function create() {


        return view('posts.create');

    }

    public function store(Request $request)
    {

      return redirect('blog');

    }


}
