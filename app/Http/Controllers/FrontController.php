<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CommentRequest;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::Published()->sortByDesc('date_start');
        $title = 'conférences';

        return view('front.index', compact('posts', 'title'));
    }

    public function showPost($id)
    {
        if (!$post = Post::where('slug', $id)->first())
            $post = Post::find((int)$id);
        $title = $post->title;

        return view('front.conference',compact('post','title'));
    }

    public function showPostByTag($name){

        $tag = Tag::where('name',$name)->first();
        $posts = $tag->post;
        $title = $tag->name;

        return view('front.tag', compact('tag','posts','title'));
    }

    public function contact()
    {
        $title = 'contact';

        return view ('front.contact', compact('title'));
    }

    public function about()
    {
        $title = 'à propos';

        return view ('front.about', compact('title'));
    }

//    public function storeComment(CommentRequest $request)
//    {
//        Comment::create($request->all());
//
//        return back();
//    }

}
