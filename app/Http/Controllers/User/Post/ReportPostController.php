<?php

namespace App\Http\Controllers\User\Post;

use App\NeedKeting\Services\User\Post\ReportPostService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportPostController extends Controller
{
    /**
     * @var ReportPostService
     */
    private $reportPost;

    /**
     * ReportPostController constructor.
     * @param ReportPostService $reportPost
     */
    public function __construct(ReportPostService $reportPost)
    {
        $this->reportPost = $reportPost;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $this->reportPost->create($request);

        return redirect(route('home'))->with('status','Your Report message Sent Successfully');
    }
}
