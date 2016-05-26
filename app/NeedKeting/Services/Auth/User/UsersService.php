<?php

namespace App\NeedKeting\Services\Auth\User;

use App\NeedKeting\Repositories\User\Post\PostsRepository;
use App\NeedKeting\Repositories\Auth\User\UsersRepository;

class UsersService
{
    /**
     * @var PostsRepository
     */
    private $posts;
    /**
     * @var UsersRepository
     */
    private $users;

    /**
     * @var
     */
    private $auth;

    /**
     * UsersService constructor.
     * @param UsersRepository $users
     * @param PostsRepository $posts
     */
    public function __construct(UsersRepository $users, PostsRepository $posts)
    {
        $this->users = $users;
        $this->posts = $posts;
    }

    /**
     * All the data related to authenticated user
     *
     * @return mixed
     */
    public function allUser()
    {
        return $this->users->allUser();
    }

    /**
     * All the posts of Authenticated User
     *
     * @return mixed
     */
    public function allPostOfUser()
    {
        return $this->posts->allPostOfUser();
    }

    /**
     * @return mixed
     */
    public function auth()
    {
        return $this->users->auth();
    }
    
    public function update($request,$id)
    {
        return $this->users->update($request,$id);
    }
    
}