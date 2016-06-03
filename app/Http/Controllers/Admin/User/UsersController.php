<?php

namespace App\Http\Controllers\Admin\User;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    private $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $data = array('email' => $request['email'], 'password' => bcrypt($request['password']));

        $user = User::find(1);

        $this->auth->login($user);

        return redirect(route('admin.roles.index'));


    }
}
