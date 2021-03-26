<?php

namespace Gary\Live;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Gary\Live\Kernel\AccessToken;
use Gary\Live\Kernel\Api;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['api'] = function (Live $Live) {
            return new Api($Live);
        };

        $pimple['heart'] = function (Live $Live) {
            return new Heart($Live);
        };

        $pimple['access_token'] = function (Live $Live) {
            return new AccessToken($Live);
        };
    }

}