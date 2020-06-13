<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        case 'admin':
            return redirect(route('admin.home'));
            break;
        case 'etudiant':
            return redirect(route('etudiant.home'));
            break;
        case 'enseignant':
                return redirect(route('enseignant.home'));
                break;
        case 'entreprise':
            return redirect(route('entreprise.home'));
            break;
        default:
            return '/home';
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
        $this->middleware('guest')->except('logout');
    }
}
