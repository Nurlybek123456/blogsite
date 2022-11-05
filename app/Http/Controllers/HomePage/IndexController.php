<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {

        $posts = Post::paginate(3);
        $users = User::all();
        $user = auth()->user();


        return view('HomePage.index',compact('posts','user'));
    }
}
