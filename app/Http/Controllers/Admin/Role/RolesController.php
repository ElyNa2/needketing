<?php

namespace App\Http\Controllers\Admin\Role;

use Illuminate\Http\Request;

use App\NeedKeting\Models\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NeedKeting\Services\Admin\Role\RoleService;

class RolesController extends Controller
{
    /**
     * @var Role
     */
    protected $roles;

    /**
     * RolesController constructor.
     * @param Role $roles
     */
    public function __construct(RoleService $roles)
    {
        $this->roles = $roles;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->roles->all();
        return view('admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Role $role)
    {
        return view('admin.role.form',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\Admin\Role\StoreRoleRequest $request)
    {
        $this->roles->create($request);

        return redirect (route('admin.roles.index'))->with('status','Role has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = $this->roles->getFromId($id);

        return view('admin.role.form',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\Admin\Role\UpdateRoleRequest $request,  $id)
    {
        $role = $this->roles->getFromId($id);

        $this->roles->updateRole($request,$role);

        return redirect(route('admin.roles.index'))->with('status','Role has beed Updated');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function confirm($id)
    {
        $role = $this->roles->getFromId($id);

        return view('admin.role.confirm',compact('role'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = $this->roles->getFromId($id);

        $page->delete();

        return redirect(route('admin.roles.index'))->with('status','Role has been deleted');
    }
}
