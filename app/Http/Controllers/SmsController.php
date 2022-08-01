<?php

namespace App\Http\Controllers;

use App\Http\Requests\SmsRequest;

class SmsController extends Controller
{
    public function show(SmsRequest $request)
    {
        $data = $request->validated();
        $result = $service->solveSms($data);

        return $result;
    }
}
