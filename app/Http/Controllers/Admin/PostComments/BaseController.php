<?php

namespace App\Http\Controllers\Admin\PostComments;

use App\Services\Admin\PostComments\PostCommentsService;
use App\Services\Admin\Posts\PostsService;

class BaseController
{
    public $service;

    public function __construct(PostCommentsService $service)
    {
        $this->service = $service;
    }
}
