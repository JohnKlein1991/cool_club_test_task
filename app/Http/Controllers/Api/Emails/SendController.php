<?php

namespace App\Http\Controllers\Api\Emails;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Emails\SendRequest;

class SendController extends Controller
{
    public function __invoke(SendRequest $request)
    {
        return \response([
            'success' => true
        ], 200);
    }
}
