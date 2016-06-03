<?php

namespace App\NeedKeting\Services\Admin\Comment;

use App\NeedKeting\Repositories\Admin\Comment\CommentsRepository;

class CommentsService
{
    /**
     * @var CommentsRepository
     */
    private $comments;

    /**
     * CommentsRepository constructor.
     * @param CommentsRepository $comments
     */
    public function __construct(CommentsRepository $comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->comments->all();
    }
    
    public function getFromId($id)
    {
        return $this->comments->getFromId($id);
    }
}