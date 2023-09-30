<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    // public function render($request, Throwable $e)
    // {
    //     if ($e instanceof ModelNotFoundException && $request->getContentTypeFormat() == 'json') {
    //         return response()->json([
    //             'status' => [
    //                 'code' => '404',
    //                 'message' => 'The data you are looking for was not found'
    //             ]
    //         ]);
    //     }
    //     return parent::render($request, $e);
    // }
}