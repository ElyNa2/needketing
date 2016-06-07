<?php

namespace App\NeedKeting\Services\Admin\Post;

use App\NeedKeting\Repositories\Admin\Post\ReportPostRepository;

class ReportPostService
{

    /**
     * @var ReportPostRepository
     */
    private $reportPost;

    /**
     * ReportPostService constructor.
     * @param ReportPostRepository $reportPost
     */
    public function __construct(ReportPostRepository $reportPost)
    {
        $this->reportPost = $reportPost;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->reportPost->all();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->reportPost->getFromId($id);
    }
}