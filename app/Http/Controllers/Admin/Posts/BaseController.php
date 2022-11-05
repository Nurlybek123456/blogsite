<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Services\Admin\Posts\PostsService;

class BaseController
{
    public $service;

    public function __construct(PostsService $service)
    {
        $this->service = $service;
    }
}
