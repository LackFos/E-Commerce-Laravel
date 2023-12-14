<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function showRegisterForm()
    {
        return view('pages.register');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()
            ->withErrors([
                'email' => 'Email atau password salah.',
            ])
            ->onlyInput('email');
    }

    /**
     * Handle an register attempt.
     */
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'bail|required',
            'email' => 'bail|required|unique:users,email',
            'password' => 'bail|required|min:8',
            'confirm_password' => 'bail|required|same:password',
        ]);

        $user = new User();
        $user->username = $credentials['username'];
        $user->email = $credentials['email'];
        $user->password = $credentials['password'];
        $user->save();

        return redirect()->route('login.show');
    }
}
