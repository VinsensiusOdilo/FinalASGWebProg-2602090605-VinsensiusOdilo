<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomepageController extends Controller
{
    //

    public function home(){

        $post = Post::with('user')->get();
        return view('pages.welcome', compact('post'));

    }
}
