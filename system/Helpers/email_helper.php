<?php

use Config\Email;

if (!function_exists('send_contact_email')) {
    function send_contact_email(array $data): bool|string
    {
        $email = \Config\Services::email();

        // Ambil dari config Email.php, bukan getenv()
        $config = new Email();

        $from      = $config->fromEmail;
        $fromName  = $config->fromName;
        $to        = $config->SMTPUser;

        $subject = 'New Contact Message from ' . esc($data['fullname']);

        $message = view('emails/contact', $data);
        if ($message === false) {
            return 'View emails/contact.php tidak ditemukan atau error saat rendering.';
        }

        $email->setTo($to);
        $email->setFrom($from, $fromName);
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->setMailType('html');

        if (!$email->send()) {
            return $email->printDebugger(['headers', 'subject', 'body']);
        }

        return true;
    }
}