<?php

//namespace App\NeedKeting\Repositories\Role;

//use App\NeedKeting\Models\Role;

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
        return $this->role->create($role);
    }
}