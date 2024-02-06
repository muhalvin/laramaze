<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $current_user = User::where('gauth', $user->id)->first();

            if ($current_user) {
                Auth::login($current_user);

                return redirect()->intended(RouteServiceProvider::HOME);
            } else {

                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name'      => $user->name,
                    'gauth'     => $user->id,
                    'password'  => Hash::make(Str::random(25, 'alpha-numeric'))
                ]);

                $newUser->where('email', $user->email)->update(['email_verified_at' => now()]);
                $newUser->assignRole('Guest');

                Auth::login($newUser);

                return redirect()->intended(RouteServiceProvider::HOME);
            }
        } catch (Exception $e) {
            Log::error('[Login]: ' . $e->getMessage());
            return redirect()->route('login');
        }
    }
}
