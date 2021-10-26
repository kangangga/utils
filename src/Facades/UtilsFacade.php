<?php

namespace Kangangga\Utils;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kangangga\Utils\Skeleton\SkeletonClass
 */
class UtilsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'utils';
    }
}
