<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use \Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use App\Facades\MyAlert;

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
        $title = 'dashboard';

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

        if(Input::file())
        {
            $image = Input::file('thumbnail_link');

            $ext = $image->getClientOriginalExtension();

            $fileName = $post->slug . '.' . $ext;

            $path = public_path('./assets/images/confs/' . $fileName);

            Image::make($image
                ->getRealPath())
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path);
            $post->thumbnail_link = $fileName;
            $post->save();
        }

        return redirect()->to('dashboard')->with('message', MyAlert::message('conférence "' .$post->title. '" créée avec succès','success'));
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
        $post = Post::find($id);
        $post->tags()->detach();
        $post->update($request->all());
        $post->tags()->attach($request->input('tags'));

        if(Input::file())
        {
            $image = Input::file('thumbnail_link');

            $ext = $image->getClientOriginalExtension();

            $fileName = $post->slug . '.' . $ext;

            $path = public_path('./assets/images/confs/' . $fileName);

            Image::make($image
                ->getRealPath())
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path);
            $post->thumbnail_link = $fileName;
            $post->save();
        }


        return redirect()->to('dashboard')->with('message', MyAlert::message('conférence "' . $post->title . '" modifiée avec succès', 'info'));
    }

    public function updateStatus($id)
    {
        $post = Post::find($id);

        if ($post->status == 'publié') $post->status = 'dépublié';
        else $post->status = 'publié';
        $post->update();

        return redirect()->to('dashboard')->with('message', MyAlert::message('Conférence ' .$post->status. 'e avec succès', 'info'));
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

        return redirect()->to('dashboard')->with('message', MyAlert::message('conférence supprimée avec succès', 'danger'));
    }
}
