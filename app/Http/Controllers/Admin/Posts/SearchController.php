<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Posts\SearchRequest;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class SearchController extends BaseController
{
    public function __invoke(SearchRequest $request)
    {
        $data = $request->validated();

        $posts = $this->service->SearchPosts($data);

        return view('Admin.Posts.index',compact('posts'));
    }
}
