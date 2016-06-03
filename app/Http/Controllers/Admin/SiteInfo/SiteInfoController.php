<?php

namespace App\Http\Controllers\Admin\SiteInfo;

use App\Http\Requests\Admin\SiteInfo\SiteInfoRequest;
use App\NeedKeting\Models\SiteInfo;
use App\NeedKeting\Services\Admin\SiteInfo\SiteInfoService;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteInfoController extends Controller
{
    /**
     * @var SiteInfoService
     */
    private $site_info;

    /**
     * @var Guard
     */
    private $auth;

    /**
     * SiteInfoController constructor.
     * @param SiteInfoService $site_info
     * @param Guard $auth
     */
    public function __construct(SiteInfoService $site_info, Guard $auth)
    {
        $this->site_info = $site_info;
        $this->auth = $auth;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_info = $this->site_info->all();

        return view('admin.site_infos.index',compact('site_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SiteInfo $info)
    {
        return view('admin.site_infos.form',compact('info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteInfoRequest $request)
    {
        $input = $request->all();

        $input['user_id'] = $this->auth->id();

        $this->site_info->create($input);

        return redirect(route('admin.site_info.index'))->with('status','Info Added Successfully');
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
        $info = $this->site_info->getFromId($id);

        return view('admin.site_infos.form',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiteInfoRequest $request, $id)
    {
        $info = $this->site_info->getFromId($id);

        $this->site_info->update($request->all(), $info);

        return redirect(route('admin.site_info.index'))->with('status','Info Updated');
    }

    /**
     *
     */
    public function confirm()
    {
        
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
}
