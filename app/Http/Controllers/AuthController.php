<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login')
            ->with('hideHeader', true)
            ->with('hideFooter', true);
    }

    public function showRegisterForm()
    {
        return view('pages.register')
            ->with('hideHeader', true)
            ->with('hideFooter', true);
    }

    /**
     * Handle an register attempt.
     */
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'bail|required|string',
            'email' => 'bail|required|unique:users,email|email',
            'phone_number' =>
                'bail|required|unique:users,phone_number|max_digits:13',
            'password' => 'bail|required|min:8|string',
            'confirm_password' => 'bail|required|same:password|string',
        ]);

        $user = new User([
            'username' => $credentials['username'],
            'email' => $credentials['email'],
            'phone_number' => $credentials['phone_number'],
            'password' => $credentials['password'],
        ]);
        $user->save();

        return redirect()->route('login.show');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'bail|required|email',
            'password' => 'bail|required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }

        return back()
            ->withErrors([
                'email' => 'Email atau password salah.',
            ])
            ->onlyInput('email');
    }

    /**
     * Handle logout attempt.
     */
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
