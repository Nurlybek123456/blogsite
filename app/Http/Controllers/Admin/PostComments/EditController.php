<?php

namespace App\Http\Controllers\Admin\PostComments;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke($post_comment_id)
    {
        $post_comment = PostComment::find($post_comment_id);

        return view('Admin.PostComments.edit',compact('post_comment'));
    }
}
