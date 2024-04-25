<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;

class FacebookController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callbackFromFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            if ($user->getEmail() == null) {
                return redirect()->route('website')->with('fail', 'Email is Required !');
            }

            // Check Users Email If Already There
            $is_user = User::where('email', $user->getEmail())->first();
            if (!$is_user) {

                $saveUser = User::updateOrCreate([
                    'facebook_id' => $user->getId(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName() . '@' . $user->getId()),
                    'role' => "Employer",
					'email_verified_at'=>Carbon::now()
                ]);
            } else {
                $saveUser = User::where('email',  $user->getEmail())->update([
                    'facebook_id' => $user->getId(),
                    'name' => $user->getName(),
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }

            Auth::loginUsingId($saveUser->id);

            return redirect()->route('website');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
