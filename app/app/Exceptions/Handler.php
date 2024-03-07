<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Str;
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

    public function render($request, $exception)
    {
        if ($exception instanceof \Illuminate\Session\TokenMismatchException) {
            $routeName = $request->route()->getName();
            if (Str::startsWith($routeName, 'mid-career')) {
                return redirect()->route('mid-career.index')->withInput()->withErrors('error_message', 'セッションが切れました。もう一度お試しください。');
            }

            if (Str::startsWith($routeName, 'new-graduate')) {
                return redirect()->route('new-graduate.index')->withInput()->withErrors('error_message', 'セッションが切れました。もう一度お試しください。');
            }

            return redirect('/')->withInput()->withErrors('error_message', 'セッションが切れました。もう一度お試しください。');
        }

        return parent::render($request, $exception);
    }
}
