<?php

namespace App\Needketing\Repositories\Auth\User;

use App\Needketing\Models\Post;
use App\User;

class UsersRepository
{
    /**
     * @var \App\Needketing\Repositories\Auth\User
     */
    public $users;

    public $posts;

    /**
     * UsersRepository constructor.
     * @param \App\Needketing\Repositories\Auth\\User $users
     */
    public function __construct(User $users, Post $posts)
    {
        $this->users = $users;
        $this->posts = $posts;
    }

    /**
     * @return mixed
     */
    public function allUser()
    {
        return $this->users->all();
    }
}