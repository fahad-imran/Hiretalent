<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\EmailVerification;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('verified')->only('create');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */


    protected function register(Request $request)
    {   
        $request->validate([
            'name' => 'required|string|max:255',
          //  'email' => 'required|email|unique:users,email',
          'email' => 
          'required',
          'string',
          'email',
          'max:255',
          Rule::unique('users')->where(function ($query) {
              return $query->where('role', '<>', 'Candidate');
          }),
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
            //'agree' => 'required'
        ]);
        $rand = rand(1200000000000000, 999999999999999999);
        $nameTo = $request->name;
        $email = $request->email;
        $mydata = array('token' => $rand);



        Mail::send('email.email_verification', $mydata, function ($message) use ($email, $nameTo) {
            $message->to($email, $nameTo)->subject('Email Verification');
            $message->from('noreply@hiretalent.cz', 'Hiretalent');
        });
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact' => $request->phone,
            'role' => "Employer",
            'consent' => 1,
            'otp' => $rand
        ]);
        return redirect(app()->getLocale().'/register-ok')->with('success', 'Please Verify your email.');
    }
}
