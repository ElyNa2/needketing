<?php

namespace App\Http\Controllers\Admin\Post;

use App\NeedKeting\Services\Admin\Post\PostsService;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * @var PostsService
     */
    private $posts;

    /**
     * PostsController constructor.
     * @param PostsService $posts
     */
    public function __construct(PostsService $posts)
    {
        $this->posts = $posts;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $posts = $this->posts->all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function confirm($id)
    {
        $post = $this->posts->getFromId($id);

        return view('admin.posts.confirm',compact('post'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $post = $this->posts->getFromId($id);

        $post->delete();

        return redirect(route('admin.posts.index'))->with('status','Post Has been Deleted');
    }
}
