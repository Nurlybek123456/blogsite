<?php

namespace App\Http\Controllers\Admin\PostComments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostComments\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        // error_message если user_id или post_id указанные юзером не верные тогда возвращает ошибку

        $error_message = $this->service->Store($data);

        if($error_message !== null) {
            return view('Admin.PostComments.create',compact('error_message'));
        }
        $post = Post::all();

        return back();
    }
}
