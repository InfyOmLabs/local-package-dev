<?php

namespace InfyOm\Mail;

use Illuminate\Support\Facades\Facade;

class InfyOmMail extends Facade
{
    /**
     * Get the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'infyom_mail';
    }
}