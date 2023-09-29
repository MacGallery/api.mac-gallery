<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function success($data, $message)
    {
        $response = [
            'status' => [
                'status' => 200,
                'message' => $message
            ],
            'data' => $data
        ];
        return response()->json($response);
    }

    public function error($code, $status, $message, $errors = [])
    {
        $response = [
            'status' => [
                'code' => $code,
                'status' => $status,
                'message' => $message
            ],
            'errors' => $errors
        ];
        return response()->json($response);
    }
}