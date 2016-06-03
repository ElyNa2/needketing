<?php

namespace App\NeedKeting\Repositories\Admin\Post;

use App\NeedKeting\Models\Post;

class PostsRepository{

    /**
     * @var Post
     */
    private $posts;

    /**
     * PostsRepository constructor.
     * @param Post $posts
     */
    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->posts->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        $post = $this->posts->findOrFail($id);
        
        return $post;
    }


}
