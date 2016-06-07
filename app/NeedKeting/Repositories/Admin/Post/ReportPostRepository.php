<?php

namespace App\NeedKeting\Repositories\Admin\Post;


use App\NeedKeting\Models\ReportPost;

class ReportPostRepository
{
    /**
     * @var ReportPost
     */
    private $reportPost;

    /**
     * ReportPostService constructor.
     * @param ReportPost $reportPost
     */
    public function __construct(ReportPost $reportPost)
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
        return $this->reportPost->findOrFail($id);
    }
}