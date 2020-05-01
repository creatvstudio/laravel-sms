<?php

namespace CreatvStudio\Sms\Tests;

use CreatvStudio\Sms\SmsManager;
use CreatvStudio\Sms\Facades\Sms;
use Orchestra\Testbench\TestCase;
use CreatvStudio\Sms\SmsServiceProvider;
use CreatvStudio\Itexmo\ItexmoServiceProvider;

class SmsTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [SmsServiceProvider::class, ItexmoServiceProvider::class];
    }

    /** @test */
    public function it_returns_driver_instance()
    {
        $log = Sms::driver('log');
        $itexmo = Sms::driver('itexmo');

        $this->assertInstanceOf(\CreatvStudio\Sms\LogSmsSender::class, $log);
        $this->assertInstanceOf(\CreatvStudio\Sms\Contracts\Sms::class, $log);
        $this->assertInstanceOf(\CreatvStudio\Sms\ItexmoSmsSender::class, $itexmo);
        $this->assertInstanceOf(\CreatvStudio\Sms\Contracts\Sms::class, $itexmo);
    }
}
