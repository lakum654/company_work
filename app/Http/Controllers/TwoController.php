<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class TwoController extends Controller
{
    public function index(){
        $posts = Post::with('comments')->get();
        return view('Two.index',compact('posts'));
    }
    public function create(){
        $posts = Post::get();
       return view('Two.form',compact('posts'));
    }
    public function store(Request $request){
        $post = Post::find($request->id);
        $comment = new Comment();
        $comment->comment = $request->comment;
        $post->comments()->save($comment);
        return redirect('two');
    }
}
