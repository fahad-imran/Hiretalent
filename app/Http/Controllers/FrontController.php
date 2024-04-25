<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Expertise;
use Illuminate\Http\Request;
use App\Models\RequestModels;
use App\Models\ExpertiseFeature;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{

    public function index()
    {
        if (Auth::user()) {
            if (Auth::user()->email_verified_at == null) {
                Auth::logout();
                return back()->with('fail', 'Please verify your email.');
            }
        }
        $skillsets = Job::inRandomOrder()->limit(6)->get();
        return view('front.index', compact('skillsets'));
    }

    public function services()
    {
        $skillsets = Job::with('expertise')->get();
        return view('front.services', compact('skillsets'));
    }

    public function requests()
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        $requests = RequestModels::where('user_id', Auth::user()->id)->get();
        return view('front.requests', compact('requests'));
    }

    public function serviceDetail(Request $request, $slug)
    {
        if ($slug == null) {
            return back();
        }
        $job = Job::where('slug', $slug)->first();
        if ($job == null) {
            return back();
        }
        $jobExpertise = $job->expertise;
        $job_id = $job->id;

        return view('front.pricing', compact('jobExpertise', 'job_id', 'job'));
    }

    public function expertiseFeatur(Request $request)
    {
        $feature = ExpertiseFeature::where('expertise_id', $request->id)->get();
        $expertise = Expertise::find($request->id);
        //sending expertise name which translated below in response
        $expertise_name = $expertise->name;
        $job = Job::where('id', $expertise->job_id)->get();
        //sending job name which translated below in response
        $job_title = $job[0]->title;
        $skillsets = array();
        $features = array();
        $i = 0;
        foreach ($expertise->expertise_skills as $expertise_skill) {
            $skillsets[$i]['skill'] = trans($expertise_skill->skills->name);
            $skillsets[$i]['level'] = trans($expertise_skill->levels->description);
            $i++;
        }
        $i = 0;
        foreach ($feature as $fea) {
            $features[$i]['feature'] = trans($fea->feature);
            $i++;
        }
        return response()->json([
            'features' => $features,
            'expertise' => $expertise,
            'job'     => $job,
            'skillsets'     => $skillsets,
            'title' => trans($job_title),
            'expertise_name' => trans($expertise_name)
        ]);
    }

    public function resoureBookingSuccess()
    {
        return view('front.resoure-booking-success');
    }

    public function blog()
    {
        return view('front.blogs.blog');
    }
    public function outitconsultingservices()
    {
        return view('front.our_it_consulting_services');
    }
}
