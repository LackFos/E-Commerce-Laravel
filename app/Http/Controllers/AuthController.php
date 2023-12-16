<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Helpers\ImageUploadHelper;
use App\Http\Requests\UpdateUserDetailRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show()
    {
        return view('pages.profile');
    }

    public function update(UpdateUserDetailRequest $request)
    {
        $user = Auth::user();

        try {
            $newImagePath = null;
            if ($request->hasFile('image')) {
                $newImagePath = ImageUploadHelper::uploadProfileImage(
                    $request->file('image')
                );
                if (!$newImagePath) {
                    throw new Exception('Failed to upload new profile image.');
                }
            }

            DB::transaction(function () use ($user, $request, $newImagePath) {
                $userData = Arr::except($request->validated(), ['image']);
                $user->update($userData);

                if ($newImagePath) {
                    ImageUploadHelper::deleteOldProfile($user->image);
                    $user->image = $newImagePath;
                    $user->save();
                }
            });

            return redirect()
                ->route('profile')
                ->with('success', 'Profile updated successfully');
        } catch (Exception $e) {
            Log::error(
                "Profile update failed for user {$user->id}: " .
                    $e->getMessage()
            );
            return redirect()
                ->route('profile')
                ->with('error', 'Failed to update profile');
        }
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
            'username' => 'bail|required|string|max:30',
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
