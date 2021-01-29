<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BothComment;
use App\Post;
use App\Video;
use App\Comment;
class FiveController extends Controller
{
    public function index(){
      $postsText = Post::has('bothComments')->get();
      $postsVideo = Video::has('bothComments')->get();
      return view('five.index',compact('postsText','postsVideo'));

    }
    public function create(){
        $postsText = Post::with('bothComments')->get();
        $postsVideo = Video::with('bothComments')->get();
        return view('five.form',compact('postsText','postsVideo'));
    }

    public function store1(Request $request){
        $post = Post::find($request->id);	
        $comment = new BothComment;
        $comment->comment = $request->comment;
        $post->bothComments()->save($comment);
        return redirect('five');
    }

    public function store2(Request $request){
        $post = Video::find($request->id);	
        $comment = new BothComment;
        $comment->comment = $request->comment;
        $post->bothComments()->save($comment);
        return redirect('five');
    }
}
