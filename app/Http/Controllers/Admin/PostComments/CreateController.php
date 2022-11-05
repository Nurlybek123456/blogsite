<?php

namespace App\Http\Controllers\Admin\PostComments;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {

        $user = Auth::user();
        $post = Post::all();
        return view('Admin.PostComments.create',compact('user','post'));
    }
}
