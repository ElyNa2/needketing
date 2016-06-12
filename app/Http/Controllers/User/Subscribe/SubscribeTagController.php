<?php

namespace App\Http\Controllers\User\Subscribe;

use App\NeedKeting\Services\User\Tag\TagsService;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class SubscribeTagController extends Controller
{
    /**
     * @var TagsService
     */
    private $tags;

    /**
     * SubscribeTagController constructor.
     * @param TagsService $tags
     */
    public function __construct(TagsService $tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function index(Guard $user)
    {
        $tags = $this->tags->all();
        
        return view('users.subscribe.index',compact('tags','user'));
    }
    
}