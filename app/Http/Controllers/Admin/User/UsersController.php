<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
}
