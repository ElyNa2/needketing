<?php

namespace App\NeedKeting\Services\Admin\SiteInfo;

use App\NeedKeting\Repositories\Admin\SiteInfo\SiteInfoRepository;

class SiteInfoService
{
    /**
     * @var SiteInfoRepository
     */
    private $site_info;

    /**
     * SiteInfoService constructor.
     * @param SiteInfoRepository $site_info
     */
    public function __construct(SiteInfoRepository $site_info)
    {
        $this->site_info = $site_info;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->site_info->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->site_info->getFromId($id);
    }

    /**
     * @param $request
     * @return static
     */
    public function create($request)
    {
        return $this->site_info->create($request);
    }

    /**
     * @param $request
     * @param $info
     * @return mixed
     */
    public function update($request, $info)
    {
        return $this->site_info->update($request,$info);
    }
}