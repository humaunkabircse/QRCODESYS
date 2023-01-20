<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function authenticated()
    {
        if (Auth::user()->is_admin == 1)// 1 is admin
        {
            return redirect('admin/dashboard')->with('message', 'Welcome to Admin Dashboard');
        }
        elseif(Auth::user()->is_admin == 0 ) // 0 is admin
        {
            return redirect('/')->with('message', 'Login Successfully');
        }
        else
        {
            return redirect('/')->with('message', 'Login Successfully');
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
