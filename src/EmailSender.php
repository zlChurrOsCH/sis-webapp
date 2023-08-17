<?php

namespace Projeto\Unit;
use Projeto\Unit\EmailService;

class EmailSender {
    private $emailService;

    public function __construct(EmailService $emailService) {
        $this->emailService = $emailService;
    }

    public function sendEmail($to, $subject, $message) {
        $this->emailService->send($to, $subject, $message);
    }
}

?>