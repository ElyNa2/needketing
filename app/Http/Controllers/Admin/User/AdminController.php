<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\Admin\UpdateAdminRequest;
use App\NeedKeting\Services\Admin\Admin\AdminService;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * @var AdminService
     */
    private $admin;

    /**
     * AdminController constructor.
     * @param AdminService $admin
     */
    public function __construct(AdminService $admin)
    {
        $this->admin = $admin;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->admin->allAdmin();
        
        return view('admin.admin.admin',compact('users'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('admin.admin.form',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $this->admin->create($request);

        return redirect('admin/admin')->with('status','New Admin Created');
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
        $user = $this->admin->getFromId($id);
        
        return view('admin.admin.form',compact('user'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(UpdateAdminRequest $request, $id)
    {
        $user = $this->admin->getFromId($id);

        $this->admin->update($request,$user);

        return redirect(route('admin.admin.index'))->with('Record Updated Successfully');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function confirm($id)
    {
        $admin = $this->admin->getFromId($id);

        return view('admin.admin.admin_confirm',compact('admin'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $admin = $this->admin->getFromId($id);

        $admin->delete();

        return redirect(route('admin.admin.index'))->with('status','User Deleted');
    }

}
