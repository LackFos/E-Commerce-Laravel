<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(Request $request)
    {
        return view('pages.login');
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

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'email' => 'required|email:unique',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        User::create([$credentials]);
    }
}
