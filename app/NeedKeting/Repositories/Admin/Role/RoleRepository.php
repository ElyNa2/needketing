<?php

namespace App\NeedKeting\Repositories\Admin\Role;

use App\NeedKeting\Models\Role;

class RoleRepository
{
    /**
     * @var Role
     */
    private $role;

    /**
     * RoleRepository constructor.
     * @param Role $role
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    /**
     * Get all roles
     * 
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->role->all();
    }

    /**
     * Store new role into the storage
     * 
     * @param $role
     * @return static
     */
    public function create($role)
    {
        return $this->role->create($role->all());
    }


    /**
     * @param $request
     * @param $role
     * @return mixed
     */
    public function updateRole($request, $role)
    {
        return $role->fill($request->only('name'))->save();
    }
    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        $role = $this->role->findOrFail($id);

        return $role;
    }

}