<?php

namespace CreatvStudio\Sms;

use CreatvStudio\Sms\Contracts\Sms;

class LogSmsSender implements Sms
{
    /**
     * The laravel logger instance
     */
    protected $log;

    /**
     * Create a new sender instance.
     */
    public function __construct($log)
    {
        $this->log = $log;
    }

    /**
     * Send the given message.
     *
     * @param  string $number
     * @param  string $message
     * @param  string $priority
     * @return boolean
     */
    public function send($to, $message, $options = [])
    {
        $this->log->info([
            'to' => $to,
            'message' => $message,
            'options' => $options,
        ]);
    }
}
