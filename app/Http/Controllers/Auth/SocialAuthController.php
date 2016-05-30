<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccount\SocialAccountService;
use Illuminate\Contracts\Auth\Guard;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * @var Guard
     */
    private $auth;


    /**
     * SocialAuthController constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param $provider
     * @return mixed
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param SocialAccountService $service
     * @param $provider
     * @return mixed
     */
    public function callback(SocialAccountService $service, $provider)
    {
        $user = $service->createOrGetUser(Socialite::driver($provider));

        $this->auth->login($user);

        return redirect()->to('/');
    }
}
