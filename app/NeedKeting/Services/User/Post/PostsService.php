<?php

namespace App\NeedKeting\Services\User\Post;

use App\Http\Requests\User\Post\StorePostRequest;
use App\NeedKeting\Repositories\User\Post\PostsRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\Exception;
use Psr\Log\LoggerInterface;


class PostsService
{
    /**
     * @var PostsRepository
     */
    public $posts;
    /**
     * @var LoggerInterface
     */
    protected $log;


    /**
     * RoleService constructor.
     * @param PostsRepository $posts
     * @param LoggerInterface $log
     * @internal param PostsRepository $role
     */
    public function __construct(PostsRepository $posts,LoggerInterface $log)
    {
        $this->posts = $posts;
        $this->log = $log;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->posts->all();
    }

    /**
     * Return all posts of the authenticated user
     *
     * @return mixed
     */
    public function allPostOfUser()
    {
        $user = Auth::id();
        return $this->posts->allPostOfUser($user);
    }

    /**
     * @param StorePostRequest $request
     * @return Collection|bool
     */
    public function create($request)
    {
        try{
            return $this->posts->create($request);
        }catch (Exception $e){
            $this->log->error((string) $e);
            return false;
        }
    }

}