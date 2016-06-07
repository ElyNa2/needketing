<?php

namespace App\Http\Controllers\Front;

use App\NeedKeting\Services\Front\SiteInfoService;
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
     * SiteInfoController constructor.
     * @param SiteInfoService $site_info
     */
    public function __construct(SiteInfoService $site_info)
    {
        $this->site_info = $site_info;
    }

    /**
     * @return mixed
     */
    public function about()
    {
        return view('front.about');
    }

    /**
     * @return mixed
     */
    public function terms()
    {
        return view('front.terms');
    }

    /**
     * @return mixed
     */
    public function privacy()
    {
        return view('front.privacy');
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->site_info->all();
    }

}
