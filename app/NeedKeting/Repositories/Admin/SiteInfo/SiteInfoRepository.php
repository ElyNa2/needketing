<?php

namespace App\NeedKeting\Repositories\Admin\SiteInfo;

use App\NeedKeting\Models\SiteInfo;

class SiteInfoRepository
{
    /**
     * @var SiteInfo
     */
    private $site_info;

    /**
     * SiteInfoRepository constructor.
     * @param SiteInfo $site_info
     */
    public function __construct(SiteInfo $site_info)
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
        return $this->site_info->findOrFail($id);
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
        return $info->fill($request);
    }
}