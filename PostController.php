<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $reviews = new Post();
        return view('posts.index',['posts'=>$reviews->all()]);
    }

    public function post($id)
    {
        $reviews = new Post();
        $post = $reviews->find($id);
        $views = $post->count_views + 1;
        $reviews->update_count_views($id,$views);
        return view('posts.post',compact('post'));
    }

    public function search(Request $request)
    {
        $reviews = new Post();
        $value=$request->input('search');
        return view( 'posts.index',['posts'=>$reviews->where('title','LIKE',"%$value%")->get()]);
    }

    public function section($section)
    {
        $reviews = new Post();
        $posts = $reviews->section_post($section);
        return view('posts.index',compact('posts'));
    }
}
