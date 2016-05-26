<?php

namespace App\Http\Controllers\Auth\User;

use App\NeedKeting\Services\Auth\User\UsersService;
use App\NeedKeting\Services\User\Tag\TagsService;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    /**
     * @var UsersService
     */
    private $auth;
    /**
     * @var
     */
    private $tags;

    /**
     * UsersController constructor.
     */
    public function __construct(TagsService $tags, UsersService $auth)
    {
        $this->tags = $tags;
        $this->auth = $auth;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = $this->tags->all();
        return view('users.users.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->auth->auth();
        return view('users.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->auth->update($request,$id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @return mixed
     */
    public function getAuth()
    {
        return $this->auth->auth();
    }

    /**
     * @return mixed
     */
    public function accountSetting()
    {
        $user = $this->auth->auth();
        return view('users.users.account_setting',compact('user'));
    }
    
}
