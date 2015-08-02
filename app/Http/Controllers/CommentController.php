<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Post;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Facades\Alert;


class CommentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth', ['only' => ['edit','update'] ]);
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CommentRequest $request)
    {
        Comment::create($request->all());

        return back()->with('message', Alert::message('commentaire envoyé avec succès! Il sera publié après vérification de l\'équipe','success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

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

        return redirect()->to('dashboard/comment/index')->with('message', Alert::message('commentaire modifié avec succès!','success'));
    }

    public function updateStatus($id)
    {
        $comment = Comment::find($id);

        if ($comment->status == 'publié') $comment->status = 'dépublié';
        else $comment->status = 'publié';
        $comment->update();

        return back()->with('message', Alert::message('commentaire '.$comment->status. ' avec succès!' ,'success'));
    }

    public function updateSpamStatus($id)
    {
        $comment = Comment::find($id);

        if ($comment->status == 'publié'|'dépublié') $comment->status = 'spam';
        else $comment->status = 'spam';
        $comment->update();

        return back()->with('message', Alert::message('statut du commentaire modifié en :'.$comment->status. ' avec succès!' ,'success'));
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
        return back()->with ('message', Alert::message('commentaire supprimé avec succès!','danger'));
    }
}
