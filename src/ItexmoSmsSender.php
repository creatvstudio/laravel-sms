<?php

namespace CreatvStudio\Sms;

use CreatvStudio\Sms\Contracts\Sms;

class ItexmoSmsSender implements Sms
{
    /**
     * The itexmo instance
     */
    protected $itexmo;

    /**
     * Create a new sender instance.
     */
    public function __construct($itexmo)
    {
        $this->itexmo = $itexmo;
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
        $this->setOptions($options);

        $this->itexmo->to($to)
            ->content($message)
            ->send();
    }

    public function setOptions($options)
    {
        foreach(['priority', 'server', 'sender'] as $option) {
            if (isset($options[$option])) {
                $this->itexmo->$option($options[$option]);
            }
        }
    }

    public function itexmo()
    {
        return $this->itexmo;
    }
}
