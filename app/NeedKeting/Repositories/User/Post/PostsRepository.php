<?php

namespace App\NeedKeting\Repositories\User\Post;

use App\NeedKeting\Models\Post;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class PostsRepository
{
    /**
     * @var Post
     */
    public $posts;

    public $auth;

    /**
     * PostRepository constructor.
     * @param Post $posts
     */
    public function __construct(Post $posts, Guard $auth)
    {
        $this->posts = $posts;
        $this->auth = $auth;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        $posts = $this->posts->orderBy('published_at', 'desc')->get();
        foreach($posts as $post)
        {
            $post->userName = $post->user;
            $post->userImage = $post->user_image;

            foreach ($post->tags as $tag) {
                $posts->tags = $tag;
            }

            foreach($post->comments as $comment)
            {
                $comment->userName = $comment->user;
                $comment->userImage = $comment->user_image;
                $posts->comments = $comment;
            }
        }
        return $posts;
    }

    /**
     * @return mixed
     */
    public function allPostOfUser($user)
    {
        $posts = $this->posts->where('user_id',$user)->orderBy('published_at', 'desc')->get();
        foreach($posts as $post)
        {
            $post->userName = $post->user;
            $post->userImage = $post->user_image;

            foreach ($post->tags as $tag) {
                $posts->tags = $tag;
            }

            foreach($post->comments as $comment)
            {
                $comment->userName = $comment->user;
                $comment->userImage = $comment->user_image;
                $posts->comments = $comment;
            }
        }
        return $posts;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $input = $request->all();
        $input['published_at'] = Carbon::now();
        if($request->hasFile('image'))
        {
            $random = rand(100,99999);
            $imageName = 'nkt-post-image'.$random. '.' .
                $request->file('image')->getClientOriginalExtension();
            $fullPath = 'http://localhost:8000/assets/images/posts/'.$imageName;
            $request->file('image')->move(
                public_path() . '/assets/images/posts/', $imageName);
            $input['image'] = $fullPath;
         }
        $post = Auth::user()->posts()->create($input);
        $post->tags()->attach($request->input('tags'));


        return redirect(route('home'))->with('status','Post has been created');
    }
    
}