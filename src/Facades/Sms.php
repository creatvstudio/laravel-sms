<?php

namespace CreatvStudio\Sms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CreatvStudio\Sms\Skeleton\SkeletonClass
 */
class Sms extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sms';
    }
}
