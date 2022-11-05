<?php

namespace App\Http\Controllers\Admin\PostComments;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        $post_comments = PostComment::paginate(10);

        return view('Admin.PostComments.index',compact('post_comments'));
    }
}
