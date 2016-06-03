<?php

namespace App\NeedKeting\Repositories\Admin\Comment;

use App\NeedKeting\Models\Comment;

class CommentsRepository
{
    /**
     * @var Comment
     */
    private $comments;

    /**
     * CommentsRepository constructor.
     * @param Comment $comments
     */
    public function __construct(Comment $comments)
    {
        $this->comments =  $comments;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->comments->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->comments->findOrFail($id);
    }
}