<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    /**
     * Display the form for login.
     */
    public function showLoginForm()
    {
        return view('pages.login')
            ->with('hideHeader', true)
            ->with('hideFooter', true);
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
     * Display the form for register.
     */
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
     * Handle logout attempt.
     */
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
