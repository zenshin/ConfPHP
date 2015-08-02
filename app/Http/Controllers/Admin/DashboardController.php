<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;

class DashboardController extends Controller
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
        $title = 'dashboard';
        $posts = Post::all();
        $comments = Comment::where('status', '=', 'dépublié')->get();

        return view('dashboard.index', compact ('title','comments','posts'));
    }

    public function login()
    {
        $title = 'login';

        return view('dashboard.login', compact ('title'));
    }
    public function indexComments()
    {
        $comments = Comment::paginate(5);
        $title = 'Gérer les commentaires';
        $posts = Post::all();

        return view('dashboard.comment.index', compact('comments','posts','title'));
    }

    public function showUnpublishedComments()
    {
        $comments = Comment::where('status','=','dépublié')->paginate(1);
        $title = 'Commentaires en attente';
        return view('dashboard.comment.unpublished',compact('comments','title'));
    }

}