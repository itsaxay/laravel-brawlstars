<?php

namespace AxayGadekar\Brawlstars\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Brawlstars
 * @package AxayGadekar\Brawlstars\Facades
 */
class Brawlstars extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'brawlstars';
    }

}
