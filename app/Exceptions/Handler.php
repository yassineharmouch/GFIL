<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }


    public function handle($reques, $guard = null)
{
    if (Auth::guard($guard)->check()) {
        switch(\Illuminate\Support\Facades\Auth::user()->role_id){
            case 1:
                return redirect(route('admin.home'));
                break;
            case 3:
                return redirect(route('etudiant.home'));
                break;
            case 4:
                    return redirect(route('enseignant.home'));
                    break;
            case 5:
                return redirect(route('entreprise.home'));
                break;
            default:
                return '/login';
                break;
        }
    }

    return $next($request);
}
}
