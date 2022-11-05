<?php

namespace App\Services\Admin\PostComments;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;

class PostCommentsService
{
    /**
     *  Store method
     *
     *      Добавялем новый пост в базу данных
     *
     * @param $data
     * @return void
     */

    public function Store($data)
    {
        if(Post::where('id',$data['post_id'])->first() == null || User::where('id',$data['user_id'])->first() == null) {
            return "user_id or post_id is wrong.";
        }

        PostComment::create($data);
    }

    /**
     *      Search Post method
     *
     *      Ищем посты которые похожи на имя которое указал пользователь
     *
     * @param $data
     * @return mixed
     */

    public function SearchPosts($data)
    {

        $query = PostComment::query();

        $query->where('comment','LIKE',"%{$data['search_value']}%");

        return $query->paginate(10);

    }

    /**
     *      Update Post method
     *
     *      Обновление поста в базе данных
     *
     *
     * @param $data
     * @param $post_id
     * @return void
     */

    public function UpdatePost($data,$post_id)
    {

    }

}
