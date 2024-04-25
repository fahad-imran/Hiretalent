<?php

namespace App\Http\Controllers;

use App\Models\SubmitSuggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmitOwnSkillSetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function SubmitOwnSkillset(Request $request)
    {
       
        $submitSuggetion = new SubmitSuggestion;
        $submitSuggetion->user_id = Auth::user()->id;
        $submitSuggetion->title = $request->title;
        $submitSuggetion->years_of_exp=$request->year_of_experince;
        $submitSuggetion->from_date = $request->from_date;
        $submitSuggetion->to_date = $request->to_date;
        $submitSuggetion->description = $request->description;
        $submitSuggetion->save();
        
        $details = [
            'title' => $request->title,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'description' => $request->to_date,
            'year_of_experince'=>$request->year_of_experince
        ];
        //\Illuminate\Support\Facades\Mail::to('fahadimran020@gmail.com')->send(new \App\Mail\SubmitOwnSkillset($details));
        return redirect()->back()->with('message', 'Thank you for Contacting us, we will come back to you soon');
    }
}
