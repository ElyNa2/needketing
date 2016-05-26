<?php

namespace App\Needketing\Repositories\Auth\User;

use App\Needketing\Models\Post;
use App\User;
use Illuminate\Contracts\Auth\Guard;

class UsersRepository
{
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
     * Return authenticated user
     *
     * @return Guard
     */
    public function auth()
    {
        return $this->auth->user();
    }
    
    public function update($request,$id)
    {
        $user = $this->users->findOrFail($id);
        $input = $request->all();
        if($request->hasFile('image'))
        {
            $random = rand(100,99999);
            $imageName = 'nkt-user-image'.$random. '.' .
                $request->file('image')->getClientOriginalExtension();
            $fullPath = 'http://localhost:8000/assets/images/users/'.$imageName;
            $request->file('image')->move(
                public_path() . '/assets/images/users/', $imageName);
            $input['image'] = $fullPath;
        }
        $user->fill($input)->save();

        return redirect(route('user.profile.edit',$user->id))->with('status','User Records are Updated Successfully');
    }
}