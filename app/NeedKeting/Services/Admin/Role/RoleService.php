<?php

namespace App\NeedKeting\Services\Admin\Role;

use App\NeedKeting\Repositories\Admin\Role\RoleRepository;

class RoleService
{
    /**
     * @var RoleRepository
     */
    private $role;


    /**
     * RoleService constructor.
     * @param RoleRepository $role
     */
    public function __construct(RoleRepository $role)
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
     * Store newly created role into the storage
     * 
     * @param $input
     * @return static
     */
    public function create($request)
    {
        return $this->role->create($request);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function updateRole($request, $id)
    {
        return $this->role->updateRole($request, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->role->getFromId($id);
    }
}