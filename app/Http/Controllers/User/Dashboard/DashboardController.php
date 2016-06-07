<?php

namespace App\Http\Controllers\User\Dashboard;

use App\NeedKeting\Models\Tag;
use App\NeedKeting\Services\User\Post\PostsService;
use App\NeedKeting\Services\User\Tag\TagsService;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class DashboardController extends Controller
{
    /**
     * @var LoggerInterface
     */
    protected  $logger;
    /**
     * @var TagsService
     */
    public $tags;
    /**
     * @var PostsService
     */
    public $posts;

    /**
     * @var
     */
    protected $auth;

    /**
     * Securing the Controller
     * 
     * DashboardController constructor.
     */
    public function __construct(PostsService $posts,
                                TagsService $tags,
                                Guard $auth,
                                LoggerInterface $logger
    )
    {
        $this->middleware('auth',['except' => 'index']);
        $this->posts = $posts;
        $this->tags = $tags;
        $this->auth = $auth;
        $this->logger = $logger;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!$this->auth->check()){
            return view('auth.welcome');
        }
        else{
            $tags = Tag::lists('tag_name','id');
            $posts = $this->posts->all();
            return view('users.dashboard.index',compact('posts','tags'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
