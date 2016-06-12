<?php

namespace App\Http\Controllers\Admin\User;

use App\NeedKeting\Services\Auth\User\UsersService;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * @var UsersService
     */
    private $users;
    /**
     * @var Guard
     */
    private $auth;

    /**
     * UsersController constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth,UsersService $users)
    {
        $this->auth = $auth;
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return view('admin.login');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function postLogin(Request $request)
    {
       // $user = array('email' => $request['email'], 'password' => bcrypt($request['password']));
        if(Auth::attempt(['email'=> $request->email,'password'=> $request->password])){
            return redirect(route('admin.roles.index'));
        }
        return redirect()->back();

        //$this->auth->login($user);

    }

    public function getLogout()
    {
        Auth::logout();
        
        return redirect(route('admin.getLogin'));
    }

    /**
     * @return mixed
     */
    public function users()
    {
        $users = $this->users->allClientUser();
        return view('admin.admin.users',compact('users'));
    }
    

    /**
     * @param $id
     * @return mixed
     */
    public function confirm(Requests\Admin\Admin\DeleteAdminRequest $request, $id)
    {
        $user = $this->users->getFromId($id);

        return view('admin.admin.confirm',compact('user'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy(Requests\Admin\Admin\DeleteAdminRequest $request,$id)
    {
        $user = $this->users->getFromId($id);
        
        $user->delete();

        return redirect()->back()->with('status','User Deleted');
    }
    
}
