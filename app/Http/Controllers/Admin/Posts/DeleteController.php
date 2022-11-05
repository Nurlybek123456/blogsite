<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Posts\SearchRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke($post_id)
    {

        $this->service->DeletePostComments($post_id);

        Post::find($post_id)->delete();

        return redirect()->back();

    }
}
