<?php

namespace Gary\Live;

use Hanson\Foundation\Foundation;

/**
 * Class Live
 * @package Gary\Live
 */
class Live extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];

    public function getHost()
    {
        return $this->getConfig('host');
    }

    public function getEmail()
    {
        return $this->getConfig('email');
    }

    public function getPassword()
    {
        return $this->getConfig('password');
    }

}