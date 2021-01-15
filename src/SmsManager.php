<?php

namespace CreatvStudio\Sms;

use CreatvStudio\Itexmo\Itexmo;
use CreatvStudio\Sms\ItexmoSmsSender;
use CreatvStudio\Sms\LogSmsSender;
use Illuminate\Support\Manager;

class SmsManager extends Manager
{
    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->container['config']['sms.driver'];
    }

    /**
     * Create an instance of the itextmo driver.
     *
     * @return \App\Contracts\Sms
     */
    public function createItexmoDriver()
    {
        $itexmo = $this->container['itexmo'];

        return new ItexmoSmsSender($itexmo);
    }

    /**
     * Create an instance of the log driver.
     *
     * @return \App\Contracts\Sms
     */
    public function createLogDriver()
    {
        return new LogSmsSender($this->container['log']);
    }

    /**
     * Create an instance of the nexmo driver.
     *
     * @return \App\Contracts\Sms
     */
    public function createNexmoDriver()
    {
    }
}
