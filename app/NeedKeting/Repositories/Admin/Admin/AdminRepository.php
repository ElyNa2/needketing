<?php

namespace App\NeedKeting\Repositories\Admin\Admin;

use App\User;

class AdminRepository{
    /**
     * @var User
     */
    private $admin;

    /**
     * AdminRepository constructor.
     * @param User $admin
     */
    public function __construct(User $admin)
    {
        $this->admin = $admin;
    }


    /**
     * @return mixed
     */
    public function allAdmin()
    {
        return $this->admin->where('role_id',2)->get();
    }


    /**
     * @param $request
     */
    public function create($request)
    {
        $input = $request->all();

        $input['password'] = bcrypt($request['password']);

        $input['role_id'] = 2;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');

            $name = time().$image->getClientOriginalName();

            $image->move(public_path() . '/assets/images/posts/', $name);

            $input['image'] = 'http://localhost:8000/assets/images/users/'.$name;

        }
        $this->admin->create($input);
    }

    /**
     * @param $request
     * @param $user
     */
    public function update($request, $user)
    {
        $input = $request->all();

        $input['password'] = bcrypt($request['password']);

        $input['role_id'] = 2;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');

            $name = time().$image->getClientOriginalName();

            $image->move(public_path() . '/assets/images/posts/', $name);

            $input['image'] = 'http://localhost:8000/assets/images/users/'.$name;

        }
        $user->fill($input)->save();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->admin->findOrFail($id);
    }

}

