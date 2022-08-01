<?php

namespace App\Http\Controllers;

use App\Http\Requests\SmsRequest;
use App\Services\SmsService;

class SmsController extends Controller
{
    public function show(SmsRequest $request, SmsService $service)
    {
        $data = $request->validated();

        return $service->solveSms($data['sms']);
    }
}
