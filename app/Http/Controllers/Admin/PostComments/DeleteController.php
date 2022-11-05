<?php

namespace App\Http\Controllers\Admin\PostComments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Posts\SearchRequest;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke($post_comment_id)
    {
        PostComment::find($post_comment_id)->delete();

        return redirect()->back();
    }
}
