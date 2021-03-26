<?php

namespace Gary\Live\Kernel;

use Hanson\Foundation\AbstractAPI;
use Gary\Live\Live;

class Api extends AbstractAPI
{
    protected $app;

    public function __construct(Live $Live)
    {
        $this->app = $Live;
    }

    /**
     * @param string $method
     * @param string $url
     * @param array  $options
     *
     * @return array
     */
    public function request(string $method, string $url, array $options = []): array
    {
        $options['headers'] = array_merge($options['headers'] ?? [], ['Authorization' => 'Bearer ' . $this->app->access_token->getToken(),]);

        return @json_decode($this->getHttp()->request($method, $this->app->getHost(), $options)->getBody()->__toString(), true);
    }
}