<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmailVerificationOptController extends Controller
{
    public function verifyOpt($token)
    {
        // return $token;
        //$encode_token= base64_encode($token);
        //return $encode_token;

        $verifUser = User::where('otp', $token)->first();
        if ($verifUser) {
            $verifUser->email_verified_at = Carbon::now();
            $verifUser->otp = null;
            $verifUser->save();
            return redirect('/')->with('success', 'Your email is successfully verified');
        } else {
            return redirect('/')->with('fail', 'Your email is already verified or unknown email');
        }
    }
}
