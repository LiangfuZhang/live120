<?php

namespace Gary\Live\Kernel;

use Gary\Live\Live;

abstract class Module
{
    protected $app;

    public function __construct(Live $Live)
    {
        $this->app = $Live;
    }

}