<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\Response;


trait APIResponse
{
    protected function successResponse($data, $code): \Illuminate\Http\JsonResponse
    {
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code): \Illuminate\Http\JsonResponse
    {
        return response()->json($message, $code);
    }

    protected function showAll(Collection $collection, $code = 200): \Illuminate\Http\JsonResponse
    {
        return $this->successResponse([
            'errorCode' => 'SUCCESS',
            'results'   => count($collection),
            'data'      => $collection
        ], $code);
    }

    protected function showOne($model, $code = 200): \Illuminate\Http\JsonResponse
    {
        return $this->successResponse([
            'errorCode' => 'SUCCESS',
            'data' => $model
        ], $code);
    }

    protected function showMessage($message, $code = 200): \Illuminate\Http\JsonResponse
    {
        return $this->successResponse([
            'errorCode' => 'SUCCESS',
            'data' => $message
        ], $code);
    }

    protected function successResponseWithCookie($data, $cookie, $time, $code): \Illuminate\Http\JsonResponse
    {
        return response()->json($data, $code)->withCookie($cookie['name'], $cookie['value'], time() + $time );
    }
}
