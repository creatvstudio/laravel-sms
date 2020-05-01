<?php

namespace CreatvStudio\Sms;

use CreatvStudio\Itexmo\Itexmo;
use Illuminate\Support\Manager;
use CreatvStudio\Sms\LogSmsSender;
use CreatvStudio\Sms\ItexmoSmsSender;

class SmsManager extends Manager
{
    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->app['config']['sms.driver'];
    }

    /**
     * Create an instance of the itextmo driver.
     *
     * @return \App\Contracts\Sms
     */
    public function createItexmoDriver()
    {
        $itexmo = $this->app['itexmo'];
        return new ItexmoSmsSender($itexmo);
    }

    /**
     * Create an instance of the log driver.
     *
     * @return \App\Contracts\Sms
     */
    public function createLogDriver()
    {
        return new LogSmsSender($this->app['log']);
    }

    /**
     * Create an instance of the nexmo driver.
     *
     * @return \App\Contracts\Sms
     */
    public function createNexmoDriver()
    {
        //
    }
}
