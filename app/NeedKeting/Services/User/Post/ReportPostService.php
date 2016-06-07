<?php

namespace App\NeedKeting\Services\User\Post;


use App\NeedKeting\Repositories\User\Post\ReportPostRepository;

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
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        return $this->reportPost->create($request);
    }
}