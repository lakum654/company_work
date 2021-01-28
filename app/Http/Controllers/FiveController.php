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
        $post = Video::find(1);	
        $comment = new BothComment;
        $comment->comment = "Hi ItSolutionStuff.com";
        $post->bothComments()->save($comment);
    }
}
