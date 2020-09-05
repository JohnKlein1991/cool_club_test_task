<?php


namespace App\Services;


use App\Repository\SentEmailsRepository;

/**
 * Сервис для сохранения данных об отправленных письмах
 *
 * Class LogSentEmails
 * @package App\Services
 */
class LogSentEmailsService
{
    /**
     * @var SentEmailsRepository
     */
    private SentEmailsRepository $repository;

    /**
     * LogSentEmails constructor.
     * @param SentEmailsRepository $repository
     */
    public function __construct(SentEmailsRepository $repository)
    {

        $this->repository = $repository;
    }

    /**
     * @param string $content
     * @param string|null $ip
     */
    public function log(string $content, ?string $ip)
    {
        try {
            $this->repository->create($content, $ip);
        } catch (\Throwable $e) {
            return false;
        }
        return true;
    }
}
