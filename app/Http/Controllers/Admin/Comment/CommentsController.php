<?php

namespace App\Http\Controllers\Admin\Comment;

use App\NeedKeting\Services\Admin\Comment\CommentsService;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Psr\Log\LoggerInterface;

class CommentsController extends Controller
{
    /**
     * @var CommentsService
     */
    private $comments;

    /**
     * @var LoggerInterface
     */
    private $logger;


    /**
     * CommentsController constructor.
     * @param CommentsService $comments
     * @param LoggerInterface $logger
     */
    public function __construct(CommentsService $comments, LoggerInterface $logger)
    {
        $this->comments = $comments;
        $this->logger = $logger;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $comments = $this->comments->all();
        
        return view('admin.comments.index',compact('comments'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function confirm($id)
    {
        $comment = $this->comments->getFromId($id);

        return view('admin.comments.confirm',compact('comment'));
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        $comment = $this->comments->getFromId($id);

        $comment->delete();

        $this->logger->warning('Comment Has been deleted : '.$comment);

        return redirect(route('admin.comments.index'))->with('status','comments has been deleted');
    }
}
