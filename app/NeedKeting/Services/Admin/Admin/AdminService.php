<?php

namespace App\NeedKeting\Services\Admin\Admin;


use App\NeedKeting\Repositories\Admin\Admin\AdminRepository;
use Mockery\CountValidator\Exception;

class AdminService
{
    /**
     * @var AdminRepository
     */
    private $admin;

    /**
     * AdminService constructor.
     * @param AdminRepository $admin
     */
    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return mixed
     */
    public function allAdmin()
    {
        return $this->admin->allAdmin();
    }

    /**
     * @param $request
     */
    public function create($request)
    {

        try{
            
            return $this->admin->create($request);

        }catch (Exception $e){
            print_r($e);
        }
    }

    /**
     * @param $request
     * @param $user
     */
    public function update($request, $user)
    {

        try{

            return $this->admin->update($request,$user);

        }catch (Exception $e){
            print_r($e);
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->admin->getFromId($id);
    }
}