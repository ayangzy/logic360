<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * a generic method for all success
     * messages
     * @param $data
     * @param string $message
     * @param int $statusCode
     * @return Application|ResponseFactory|Response|object
     */
    protected function successResponse($msg = null)
    {

        return response([
            'msg' => $msg,
            'status' => true
        ]);
    }

    /**
     * a generic method for all error
     * messages
     * @param $message
     * @param int $statusCode
     * @return Application|ResponseFactory|Response|object
     */
    protected function errorResponse($msg)
    {
        return response([
            'msg' => $msg,
            'status' => false
        ]);
    }
}
