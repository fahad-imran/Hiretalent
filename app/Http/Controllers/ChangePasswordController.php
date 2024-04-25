<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view('change-password.change_password');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
            'new_password_confirmation' => 'required|min:8'
        ], [
            'required' => 'The :attribute field is required.',
            'min' => 'The :attribute must be at least :min characters.',
            'confirmed' => 'The :attribute confirmation does not match.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = Auth::user();
            $currentPassword = $request->input('current_password');
            $newPassword = $request->input('new_password');

            if (Hash::check($currentPassword, $user->password)) {
                $user->update(['password' => Hash::make($newPassword)]);
                return redirect()->back()->with('success', 'Password changed successfully!');
            } else {
                return back()->withErrors(['error_current_password' => 'The current password is incorrect.']);
            }
        }

        // $this->validate($request, [
        //     'current_password' => 'required|string',
        //     'new_password' => 'required|confirmed|min:8|string',
        //     'new_password_confirmation' => 'required|min:8'
        // ]);



    }
}
