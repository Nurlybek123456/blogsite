<?php

namespace App\Services\Admin\Posts;

use App\Models\Post;
use App\Models\PostComment;

class PostsService
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

        $data['image'] = $data['image']->store('uploads','public');
        Post::create($data);
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

        $query = Post::query();

        $query->where('title','LIKE',"%{$data['search_value']}%");

        return $query->paginate(10);

    }

    /**
     *      Этот метод вызывается при удалении поста.
     *
     * @param $post_id
     * @return void
     */

   public function DeletePostComments($post_id)
   {
       foreach(PostComment::where('post_id',$post_id)->get() as $post_comment) {
           $post_comment->delete();
       }
   }

}
