<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Requests\User\Post\StorePostRequest;
use App\Http\Utilities\Location;
use App\NeedKeting\Models\Tag;
use App\NeedKeting\Services\User\Post\PostsService;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class PostsController
 * @package App\Http\Controllers\User\Post
 */
class PostsController extends Controller
{
    /**
     * @var PostsService
     */
    private $posts;

    private $locations;
    

    /**
     * PostsController constructor.
     * @param PostsService $posts
     */
    public function __construct(PostsService $posts)
    {
        $this->posts = $posts;
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
        $tags = Tag::lists('tag_name','id');

        $locations = config('data.location');

        $post = $this->posts->getPostFromId($id);

        return view('users.posts.edit',compact('post','tags','locations'));
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
        $post = $this->posts->getPostFromId($id);
        
        $this->posts->update($request, $post);
        
        return redirect(route('home'))->with('status','Post Updated Successfully');
    }

    public function confirm($id)
    {
        $post = $this->posts->getPostFromId($id);

        return view('users.posts.confirm',compact('post'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = $this->posts->getPostFromId($id);

        $post->tags()->detach();

        $post->delete();

        return redirect(route('home'))->with('status','Post Deleted successfully');
        
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

    /**
     * @return mixed
     */
    public function getAllPostOfTag($id)
    {
        return $this->posts->allPostOfTag($id);
    }
}
