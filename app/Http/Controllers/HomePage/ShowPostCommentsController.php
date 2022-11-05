<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\PostComment;
use Illuminate\Http\Request;

class ShowPostCommentsController extends Controller
{
    public function __invoke($post_id)
    {
        $post_comments = PostComment::where('post_id',$post_id)->get();
        $post = Post::find($post_id);
        $user = auth()->user();

        return view('HomePage.post-comments',compact('post_comments','post','user'));
    }
}
