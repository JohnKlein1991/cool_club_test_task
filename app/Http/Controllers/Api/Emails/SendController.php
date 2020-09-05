<?php

namespace App\Http\Controllers\Api\Emails;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Emails\SendRequest;
use App\Services\EmailService;

class SendController extends Controller
{
    public function __invoke(SendRequest $request, EmailService $emailService)
    {
        $message = $request->content;

        $emailService->send($message);

        return \response([
            'success' => true
        ], 200);
    }
}
