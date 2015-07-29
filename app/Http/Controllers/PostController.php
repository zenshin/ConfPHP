<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('date_start');

        return view('dashboard.index', compact('posts', 'title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.single', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $posts = Post::all();
        $tags = Tag::all();
        $title = 'Créer une conférence';
        return view('dashboard.post.create', compact('posts','tags','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
        $post->tags()->attach($request->input('tags'));

        if($request->hasFile('thumbnail_link'))
        {
            $file = $request->file('thumbnail_link');

            $ext = $file->getClientOriginalExtension();

            $fileName = $post->slug .'.'. $ext;

            $file->move('./assets/images/confs', $fileName);

            $post->thumbnail_link = $fileName;
            $post->save();
        }

        return redirect()->to('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $tags = Tag::all();
        $title = 'Editer une conférence';

        return view('dashboard.post.edit', compact('post','tags', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, PostRequest $request)
    {
        $post = Post::find($id)->update($request->all());
        $post->getTag()->attach($request->input('tags'));

        return redirect()->to('dashboard')->with('message', 'success update');
    }

    public function updateStatus($id)
    {
        $post = Post::find($id);

        if ($post->status == 'publish') $post->status = 'unpublish';
        else $post->status = 'publish';
        $post->update();

        return redirect()->to('dashboard')->with('message', 'success update');
    }

//    public function showComment($id)
//    {
//        $comments = Comment::all();
//        $post=Post::find($id);
//        return view('comment.show',compact('comments','post'));
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect()->to('dashboard')->with('message', 'success');
    }
}
