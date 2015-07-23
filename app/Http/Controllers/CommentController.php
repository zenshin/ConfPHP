<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Post;
use Symfony\Component\HttpFoundation\Session\Session;

class CommentController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $comments = Comment::all();

        return view('comment.create', compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CommentRequest $request)
    {
        dd($request->all());
        $commentsList = $request->all();
        array_merge($commentsList,['post_id'=>'$post_id']);
        Comment::create($commentsList)->segment(2);
        $comment->posts()->attach($request->input('posts'));
        Session::flash('flash_message', 'Commentaire ajouté!');

        return redirect()-> to ('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('comment.show',compact('comment'));
    }

}
