<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /* protected $redirectTo = RouteServiceProvider::HOME; */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login', 302)->with('success', 'Logout feito com sucesso!');
    }

    protected function authenticated(Request $request, $user)
    {
        $role = Auth::user()->role;

        switch ($role) {
            case 'admin':
                return redirect()->intended('/admin')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!');;
            case 'editor':
                return redirect()->intended('/admin/news/news')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!');;
            case 'user':
                return redirect()->intended('/')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!');;
            /* case 'assinante':
                return redirect()->intended('/')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!');; */
            default:
                return 403; // fallback se algo estiver errado
        }
       /*  return redirect()->intended('/admin/dashboard')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!'); */
    }

}
