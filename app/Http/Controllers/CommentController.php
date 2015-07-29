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
        $this->middleware('auth', ['except' => ['show','create','store'] ]);
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return back()->with('message', 'Commentaire ajouté!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CommentRequest $request)
    {
        Comment::create($request->all());

        $request->session()->flash('message','commentaire envoyé avec succès!');

        return back();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        $title = 'editer le commentaire';

        return view('dashboard.comment.edit', compact('comment','title'));
    }

    public function update($id, CommentRequest $request)
    {
        Comment::find($id)->update($request->all());

        return redirect()->to('dashboard.comment.index')->with('message', 'success update');
    }

    public function updateStatus($id)
    {
        $comment = Comment::find($id);

        if ($comment->status == 'publish') $comment->status = 'unpublish';
        else $comment->status = 'publish';
        $comment->update();

        return back()->with('message', 'success update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
        return back()->with ('message', 'success');
    }
}
