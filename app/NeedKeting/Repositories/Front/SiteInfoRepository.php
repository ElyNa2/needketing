<?php

namespace App\NeedKeting\Repositories\Front;

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
     * Return all the Site Information
     * 
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->site_info->all();
    }
}