<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        $posts = Post::paginate(10);

        return view('Admin.Posts.index',compact('posts'));
    }
}
