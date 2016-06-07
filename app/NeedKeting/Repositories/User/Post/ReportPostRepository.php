<?php

namespace App\NeedKeting\Repositories\User\Post;

use App\NeedKeting\Models\ReportPost;
use Illuminate\Contracts\Auth\Guard;

class ReportPostRepository
{
    /**
     * @var ReportPost
     */
    private $reportPost;

    /**
     * @var Guard
     */
    private $auth;

    /**
     * ReportPostRepository constructor.
     * @param ReportPost $report_post
     * @param Guard $auth
     */
    public function __construct(ReportPost $reportPost, Guard $auth)
    {
        $this->reportPost = $reportPost;
        $this->auth = $auth;
    }


    /**
     * @param $request
     * @return bool
     */
    public function create($request)
    {
        $input = $request->all();
        
        $input['user_id'] = $this->auth->id();
        
        return $this->reportPost->fill($input)->save();
    }
}