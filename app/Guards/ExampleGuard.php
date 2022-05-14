<?php

namespace App\Guards;

use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;

class ExampleGuard implements Guard
{
    use GuardHelpers;

    protected $inputKey = 'api_token';

    protected $storageKey = 'api_token';

    public function __construct(UserProvider $provider, protected Request $request)
    {
        $this->provider = $provider;
    }

    public function user()
    {
        if ($user = $this->user) {
            return $user;
        }

        $token = $this->request->bearerToken();

        if (!empty($token)) {
            $user = $this->provider->retrieveByCredentials([
                $this->storageKey => $token
            ]);
        }

        return $this->user = $user;
    }

    public function validate(Array $credentials = [])
    {
        if (empty($credentials[$this->inputKey])) {
            return false;
        }

        $credentials = [$this->storageKey => $credentials[$this->inputKey]];

        if ($this->provider->retrieveByCredentials($credentials)) {
            return true;
        }

        return false;
    }
}
