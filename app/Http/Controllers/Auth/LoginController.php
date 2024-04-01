<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

     protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'user') {
            return redirect()->route('uHome');
        } elseif ($user->role === 'admin') {
            return redirect()->route('home');
        }

        return redirect($this->redirectTo);
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
