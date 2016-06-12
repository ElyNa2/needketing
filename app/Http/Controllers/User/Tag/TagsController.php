<?php

namespace App\Http\Controllers\User\Tag;

use App\NeedKeting\Models\Tag;
use App\NeedKeting\Services\User\Post\PostsService;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NeedKeting\Services\User\Tag\TagsService;

class TagsController extends Controller
{
    /**
     * @var TagsService
     */
    private $tags;

    /**
     * @var PostsService
     */
    private $posts;

    /**
     * TagsController constructor.
     * @param TagsService $tags
     */
    public function __construct(TagsService $tags, PostsService $posts)
    {
        $this->tags = $tags;
        $this->posts = $posts;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $tags = Tag::lists('tag_name','id');
        
        return view('users.tags.show',compact('tags'));
    }


    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->tags->all();
    }

}
