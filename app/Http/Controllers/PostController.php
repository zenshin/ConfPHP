<?php

namespace App\Http\Controllers;

use App\Post;
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
        $posts = Post::all();

        return view('post.index', compact('posts', 'title'));
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

        return view('post.create');
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

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');

            $ext = $file->getClientOriginalExtension();

            $fileName = str_random(12) .'.'. $ext;

            $file->move('./assets/images/confs', $fileName);

            $post->thumbnail_link = $fileName;
            $post->save();
        }

        return redirect()->to('post');
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

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        Post::find($id)->update($request->all());

        return redirect()->to('post')->with('message', 'success update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect()->to('post')->with('message', 'success');
    }
}
