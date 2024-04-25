<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class CheckEmailController extends Controller
{
    public function checkEmail(Request $request)
    {
        $isExists = User::where('role','Employer')->where('email', $request->email)->first();

        if ($isExists) {
            return response()->json([
                'success' => false,
                'message' => "This email is already taken.",
            ]);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'The email is available'
            ]);
        }
    }
}
