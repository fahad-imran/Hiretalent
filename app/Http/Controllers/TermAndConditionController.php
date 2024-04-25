<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermAndConditionController extends Controller
{
    public function termAndCondition(){
        return view('term_condition');
    }
    public function privacyPolicy(){
        return view('privacy_policy');

    }
}
