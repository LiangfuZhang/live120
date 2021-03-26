<?php

namespace Gary\Live\Kernel;

use Hanson\Foundation\AbstractAccessToken;
use Gary\Live\Live;

class AccessToken extends AbstractAccessToken
{
    protected $app;

    public function __construct(Live $Live)
    {
        $this->app = $Live;
    }

    public function getTokenFromServer()
    {
        return @json_decode($this->getHttp()->json($this->app->getHost(), [
            'email'     => $this->app->getEmail(),
            'password' => $this->app->getPassword(),
        ])->getBody()->__toString(), true);
    }

    public function checkTokenResponse($result)
    {
    }
}