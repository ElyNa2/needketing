<?php

namespace App\NeedKeting\Services\Admin\Post;

use App\NeedKeting\Repositories\Admin\Post\PostsRepository;

class PostsService{

    /**
     * @var PostsRepository
     */
    private $posts;

    /**
     * PostsService constructor.
     * @param PostsRepository $posts
     */
    public function __construct(PostsRepository $posts)
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
        return $this->posts->getFromId($id);
    }
}
