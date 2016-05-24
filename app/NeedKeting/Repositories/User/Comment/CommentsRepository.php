<?php

namespace App\NeedKeting\Repositories\User\Comment;

use App\NeedKeting\Models\Comment;

class CommentsRepository
{
    /**
     * @var
     */
    public $comments;

    /**
     * @param Comment $comments
     */
    public function __construct(Comment $comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->comments->all();
    }

    /**
     * @param $request
     * @return static
     */
    public function create($request)
    {
        return $this->comments->create($request);
    }
}