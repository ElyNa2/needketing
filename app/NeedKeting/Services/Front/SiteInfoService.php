<?php

namespace App\NeedKeting\Services\Front;

use App\NeedKeting\Repositories\Front\SiteInfoRepository;

class SiteInfoService
{
    /**
     * @var SiteInfoService
     */
    private $site_info;

    /**
     * SiteInfoService constructor.
     * @param SiteInfoService $site_info
     */
    public function __construct(SiteInfoRepository $site_info)
    {
        $this->site_info = $site_info;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->site_info->all();
    }
}