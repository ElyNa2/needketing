<?php

namespace App\SocialAccount;

use Laravel\Socialite\Contracts\Provider;
use App\NeedKeting\Models\SocialAccount;
use App\User;

class SocialAccountService
{

    /**
     * @param Provider $provider
     * @return static
     */
    public function createOrGetUser(Provider $provider)
    {

        $providerUser = $provider->user();
        $providerName = class_basename($provider);

        $account = SocialAccount::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName,
                'role_id' => 1,
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'image' => $providerUser->getAvatar(),
                    'role_id' => 1,
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }

    }
}