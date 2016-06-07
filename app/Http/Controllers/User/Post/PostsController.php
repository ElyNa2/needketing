<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Requests\User\Post\StorePostRequest;
use App\NeedKeting\Services\User\Post\PostsService;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PragmaRX\Tracker\Tracker;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function store(StorePostRequest $request)
    {

        $this->posts->create($request);

        return redirect(route('home'))->with('status','Post has been created');
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


    /**
     * Returning all data
     *
     * @return mixed
     */
    public function getAll()
    {
        return $this->posts->all();
    }

    /**
     * Get all the tags related to one posts
     *
     * @return mixed
     */
    public function getAllTags()
    {
        return $this->posts->allTags();
    }

    /**
     * return all posts of the authenticate user
     * 
     * @return mixed
     */
    public function getAllPostOfUser()
    {
        return $this->posts->allPostOfUser();
    }
}
