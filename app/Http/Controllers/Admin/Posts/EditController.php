<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke($post_id)
    {

        $post = Post::find($post_id);

        return view('Admin.Posts.edit',compact('post'));
    }
}
