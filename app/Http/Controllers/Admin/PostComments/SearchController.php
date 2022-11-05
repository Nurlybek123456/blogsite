<?php

namespace App\Http\Controllers\Admin\PostComments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostComments\SearchRequest;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class SearchController extends BaseController
{
    public function __invoke(SearchRequest $request)
    {
        $data = $request->validated();

        $post_comments = $this->service->SearchPosts($data);

        return view('Admin.PostComments.index',compact('post_comments'));
    }
}
