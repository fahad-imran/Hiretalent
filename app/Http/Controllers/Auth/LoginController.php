<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;




    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) &&  Auth::user()->role == "Employer") {
            // Redirect to Previous Page or URL after Login Laravel

            if (Auth::user()->email_verified_at == null) {
                $otp = Auth::user()->otp;
                $email = Auth::user()->email;
                $nameTo = Auth::user()->name;
                $mydata = array('token' => $otp);

                Mail::send('email.email_verification', $mydata, function ($message) use ($email, $nameTo) {
                    $message->to($email, $nameTo)->subject('Email Verification');
                    $message->from('noreply@hiretalent.cz', 'Hiretalent');
                });

//sdflsafjsafsjafsjfjksdfjljk


                Auth::logout();
                return back()->with('success', "Please verify your email.");
            }


            if (!session()->has('url.intended')) {
                session(['url.intended' => url()->previous()]);
            }
            return redirect()->intended(route('website'));
        } else {
            Auth::logout();
            return redirect()->back()->with('fail', 'These credentials do not match our records!');
        }


        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') && $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //code for after login same page
        $this->redirectTo = url()->previous();
        // Session::put('service', URL::previous());
    }
    public function redirectTo()
    {
        //same as above
        // return Session::get('service') ? Session::get('service') :   $this->redirectTo;
    }
}
