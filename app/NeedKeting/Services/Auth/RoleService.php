<?php

//namespace App\NeedKeting\Auth;

//use App\NeedKeting\Repositories\Role\RoleRepository;

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
    public function create($input)
    {
        $role['name']        = $input['role'];
        $role['description'] = $input['description'];
        return $this->role->create($role);
    }
}