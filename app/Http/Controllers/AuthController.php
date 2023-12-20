<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Arr;
use App\Helpers\ImageUploadHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\AuthenticateUserRequest;
use App\Http\Requests\UpdateUserDetailRequest;

class AuthController extends Controller
{
    public function show()
    {
        return view('pages.profile');
    }

    public function update(UpdateUserDetailRequest $request)
    {
        $user = Auth::user();

        DB::beginTransaction();

        try {
            $userData = Arr::except($request->validated(), ['image']);
            $user->update($userData);

            if ($request->hasFile('image')) {
                $newImagePath = ImageUploadHelper::uploadProfileImage(
                    $request->file('image')
                );
                ImageUploadHelper::deleteOldProfile($user->image);

                $user->image = $newImagePath;
                $user->save();
            }

            DB::commit();
            return redirect()
                ->route('profile')
                ->with('success', 'Profile updated successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()
                ->route('profile')
                ->with('error', 'Failed to update profile');
        }
    }

    public function showLoginForm()
    {
        return view('pages.login')
            ->with('hideHeader', true)
            ->with('hideFooter', true);
    }

    public function authenticate(AuthenticateUserRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }

        return back()
            ->withErrors([
                'email' => 'Email atau Password Salah',
            ])
            ->withInput($request->only('email'));
    }

    public function showRegisterForm()
    {
        return view('pages.register')
            ->with('hideHeader', true)
            ->with('hideFooter', true);
    }

    public function register(RegisterUserRequest $request)
    {
        $credentials = $request->validated();

        $user = User::create([
            'username' => $credentials['username'],
            'email' => $credentials['email'],
            'phone_number' => $credentials['phone_number'],
            'password' => bcrypt($credentials['password']),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
