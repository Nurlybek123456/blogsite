<?php

namespace App\Http\Controllers\Admin\PostComments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostComments\UpdateRequest;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,$post_comment_id)
    {
        $data = $request->validated();

        PostComment::find($post_comment_id)->update($data);

        return redirect()->back();
    }
}
