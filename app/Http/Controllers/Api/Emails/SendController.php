<?php

namespace App\Http\Controllers\Api\Emails;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Emails\SendRequest;
use App\Services\EmailService;
use App\Services\LogSentEmailsService;

class SendController extends Controller
{
    public function __invoke(SendRequest $request, EmailService $emailService, LogSentEmailsService $logEmailsService)
    {
        $message = $request->content;

        $emailService->send($message);
        $logEmailsService->log($message, $request->ip());

        return \response([
            'success' => true,
            'message' => __('email.form_email.success_message')
        ], 200);
    }
}
