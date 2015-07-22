<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::where('status', '=', 'publish')->get();
        $title = 'conférences 2014';
        $comments = Comment::all();

        return view('blog.index', compact('posts', 'title','comments'));
    }

    public function showPost($id, $slug='')
    {
        $post = Post::WhereRaw('status=? AND id=? AND slug=?', ['publish', (int) $id, (string) $slug])->first();
        $title = $post->title;
        $comments = Comment::whereRaw('status=? AND post_id=?', ['publish', (int) $id])->get();

        return view('blog.single',compact('post','title','comments'));
    }
    public function showPostByTag($id)
    {

        $tag = Tag::find($id);
        $posts = $tag->post;

        return view('blog.tag', compact ('posts', 'tag'));

    }

    public function contact()
    {
        $title = 'contact';

        return view ('blog.contact', compact('title'));
    }

    public function about()
    {
        $title = 'à propos';

        return view ('blog.about', compact('title'));
    }

}
