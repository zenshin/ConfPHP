<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;

class UserController extends Controller
{
    public function  index()
    {
        $users = User::all();
        $title = 'List website admin';

        return view('user.index',compact('users','title'));

    }
    public function show($id)
    {
        $title = 'one User';
        $user = User::find($id);

        return view('user.single',compact('user','title'));
    }
}