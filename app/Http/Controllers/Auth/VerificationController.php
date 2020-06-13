<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    public function redirectTo()
    {/*
        if (Auth::user()->role == 'admin') {
            //return "/admin";
           return route('admin.home');
        }
    
        //return "/account";
        // or return route('routename');*/
        
        switch(\Illuminate\Support\Facades\Auth::user()->role_id){
            case 1:
                return redirect(route('admin.home'));
                break;
            case '3':
                return redirect(route('etudiant.home'));
                break;
            case '4':
                    return redirect(route('enseignant.home'));
                    break;
            case '5':
                return redirect(route('entreprise.home'));
                break;
            default:
                return '/login';
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
