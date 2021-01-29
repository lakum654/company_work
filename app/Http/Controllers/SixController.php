<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Video;
use App\Tag;
class SixController extends Controller
{
    public function index(){
     $postsText = Post::has('tags')->get();
     $postsVideo = Video::has('tags')->get();
     return view('six.index',compact('postsText','postsVideo'));
    }
    public function create(){
        $postsText = Post::get();
        $postsVideo = Video::get();
        return view('six.form',compact('postsText','postsVideo'));
    }
    public function store1(Request $request){
        $post = Post::find($request->id);

        $tag = new Tag();
        $tag->name = $request->tag;

        $post->tags()->save($tag);
        return redirect('six');
    }

    public function store2(Request $request){
        $video = Video::find($request->id);

        $tag = new Tag();
        $tag->name = $request->tag;

        $video->tags()->save($tag);
        return redirect('six');

    }
}
