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
     * @return mixed
     */
    public function allClientUser()
    {
        return $this->users->allClientUser();
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

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        return $this->users->update($request,$id);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function updatePassword($request, $id)
    {
        return $this->users->updatePassword($request, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->users->getFromId($id);
    }
    
}