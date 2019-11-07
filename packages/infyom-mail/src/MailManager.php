<?php

namespace InfyOm\Mail;

use Illuminate\Support\Facades\Log;

class MailManager
{
    public function send($to, $body)
    {
        Log::info("Mail sent via ". config('infyom_mail.driver'));
    }
}