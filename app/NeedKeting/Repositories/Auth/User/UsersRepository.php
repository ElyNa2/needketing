<?php

namespace App\NeedKeting\Repositories\Auth\User;

use App\NeedKeting\Models\Post;
use App\User;
use Illuminate\Contracts\Auth\Guard;

class UsersRepository
{
    /**
     * @var User
     */
    private $users;

    /**
     * @var Post
     */
    private $posts;

    /**
     * @var Guard
     */
    private $auth;

    /**
     * UsersRepository constructor.
     * @param \App\Needketing\Repositories\Auth\\User $users
     */
    public function __construct(User $users, Post $posts, Guard $auth)
    {
        $this->users = $users;
        $this->posts = $posts;
        $this->auth = $auth;
    }

    /**
     * @return mixed
     */
    public function allUser()
    {
        return $this->users->all();
    }

    /**
     * @return mixed
     */
    public function allClientUser()
    {
        return $this->users->where('role_id',1)->get();
    }

    /**
     * Return authenticated user
     *
     * @return Guard
     */
    public function auth()
    {
        return $this->auth->user();
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        $user = $this->users->findOrFail($id);

        $input = $request->all();

        if($request->hasFile('image'))
        {
            $image = $request->file('image');

            $name = time().$image->getClientOriginalName();

            $image->move(public_path() . '/assets/images/users/', $name);

            $input['image'] = 'http://localhost:8000/assets/images/users/'.$name;
        }
        $user->fill($input)->save();

        return redirect()->back()->with('status','User Records are Updated Successfully');
    }

    /**
     * @param $request
     * @param $id
     */
    public function updatePassword($request, $id)
    {
        $user = $this->users->findOrFail($id);

        $user->fill($request->only(bcrypt($request['password'])))->save();

        return redirect()->back()->with('status','Password Updated Successfully !');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->users->findOrFail($id);
    }
}