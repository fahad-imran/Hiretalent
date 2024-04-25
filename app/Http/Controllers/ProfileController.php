<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();
        // return $user;
        return view('profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'dob' => 'required',
            'gender' => 'required',
           // 'description' => 'required',
            'address_line_1' => 'required',
            'company_name'=>'required',
            'company_size'=>'required',
            'city' => 'required',
            'country' => 'required'
        ]);
        $update = User::find(Auth::user()->id);
        $update->name = $request->name;
        $update->contact = $request->contact;
        $update->dob = $request->dob;
        $update->gender = $request->gender;
        $update->address_line_1 = $request->address_line_1;
        $update->company_name = $request->company_name;
        $update->company_size = $request->company_size;
        $update->city = $request->city;
        $update->country = $request->country;
        $update->description = $request->description;
        $update->save();
        return redirect()->back()->with('success', 'Your Information has been updated!');
    }
}
