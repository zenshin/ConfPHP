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

        return view('dashboard.index', compact ('title','posts'));
    }

    public function login()
    {
        $title = 'login';

        return view('dashboard.login', compact ('title'));
    }
}