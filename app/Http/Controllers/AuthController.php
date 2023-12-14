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
     * Handle an register attempt.
     */
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'bail|required|string',
            'email' => 'bail|required|unique:users,email|email',
            'phone_number' => 'bail|required|unique:users,phone_number',
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
}
