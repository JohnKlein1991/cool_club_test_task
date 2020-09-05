<?php


namespace App\Repository;


use App\Models\SentEmail;

/**
 * Class SentEmailsRepository
 * @package App\Repository
 */
class SentEmailsRepository
{
    public function create(string $content, ?string $ip = null)
    {
        $email = new SentEmail();
        $email->content = $content;
        $email->sender_ip = $ip;
        $email->saveOrFail();
    }
}
