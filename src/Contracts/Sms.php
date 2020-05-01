<?php

namespace CreatvStudio\Sms\Contracts;

interface Sms
{
    /**
     * Send the given message.
     *
     * @param  string $number
     * @param  string $message
     * @param  string $priority
     * @return boolean
     */
    public function send($to, $message, $options = []);
}
