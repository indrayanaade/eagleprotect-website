<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'no-reply@eagleprotect.id';
    public string $fromName   = 'no-reply@eagleprotect.id';
    public string $recipients = '';

    public string $userAgent = 'CodeIgniter';
    public string $protocol = 'smtp'; // <<< WAJIB 'smtp'

    public string $mailPath = '/usr/sbin/sendmail';

    public string $SMTPHost = 'smtp.gmail.com';
    public string $SMTPUser = 'indrayanam86@gmail.com';
    public string $SMTPPass = 'fwtq tykl drpd wnoz'; // APP PASSWORD Gmail
    public int $SMTPPort = 587;
    public int $SMTPTimeout = 10;
    public bool $SMTPKeepAlive = false;
    public string $SMTPCrypto = 'tls';

    public bool $wordWrap = true;
    public int $wrapChars = 76;
    public string $mailType = 'html';
    public string $charset = 'UTF-8';
    public bool $validate = false;
    public int $priority = 3;
    public string $CRLF = "\r\n";
    public string $newline = "\r\n";
    public bool $BCCBatchMode = false;
    public int $BCCBatchSize = 200;
    public bool $DSN = false;
}