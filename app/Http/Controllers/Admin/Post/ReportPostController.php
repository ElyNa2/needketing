<?php

namespace App\Http\Controllers\Admin\Post;

use App\NeedKeting\Services\Admin\Post\ReportPostService;
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
     * @return mixed
     */
    public function index()
    {
        $requestPost = $this->reportPost->all();
        
        return view('admin.report_post.index',compact('requestPost'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function confirm($id)
    {
        $report = $this->reportPost->getFromId($id);
        
        return view('admin.report_post.confirm',compact('report'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $report = $this->reportPost->getFromId($id);
        
        $report->delete();
        
        return redirect(route('admin.report_post.index'))->with('status','report Deleted');
    }
}
