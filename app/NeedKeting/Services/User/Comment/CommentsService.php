<?php

namespace App\NeedKeting\Services\User\Comment;

use App\NeedKeting\Repositories\User\Comment\CommentsRepository;

class CommentsService
{
    /**
     * @var CommentsRepository
     */
    public $comments;

    /**
     * CommentsService constructor.
     * @param CommentsRepository $comments
     */
    public function __construct(CommentsRepository $comments)
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
     */
    public function create($request)
    {
        return $this->comments->create($request);
    }
}