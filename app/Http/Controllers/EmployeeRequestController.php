<?php

namespace App\Http\Controllers;

use App\Jobs\RequestMailJob;
use App\Models\Expertise;
use App\Models\Job;
use App\Models\RequestModels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeRequestController extends Controller
{
    public function employeeRequest(Request $request)
    {
        $employeeReq = new RequestModels();
        $employeeReq->user_id = $request->user_id;
        $employeeReq->expertise_id = $request->expertise_id;
        $employeeReq->job_id = $request->job_id;
        $employeeReq->to_date = $request->to_date;
        $employeeReq->from_date = $request->em_form_date;
        $employeeReq->rate_type = $request->rate_type;
        $employeeReq->hours = $request->hours;
        $employeeReq->description = $request->requestdescription;
        $employeeReq->consent = 1;
        $employeeReq->status = "Requested";
        $employeeReq->save();
        $employe_email = User::find($request->user_id);
        $email = $employe_email->email;
        //finding job title
        $job = Job::find($request->job_id);
        $resource = $job->title;
        //finding job expertise
        $expertise = Expertise::find($request->expertise_id);
        $expertise_name = $expertise->name;
        $details = [
            'email' => $email,
            'resource' => $resource,
            'expertise_name' => $expertise_name,
            'rate' => $request->rate_type,
            'hours' => $request->hours ?? null,
            'from_date' => $request->em_form_date,
            'to_date' => $request->to_date


        ];
       \Illuminate\Support\Facades\Mail::to($email)->send(new \App\Mail\RequestMail($details));
       //this for queue sdsdfdsf 
       // dispatch(new RequestMailJob($details));
        return response()->json([
            'status' => 200,
            'message' => "Thank you! Your Request has been submitted!",
        ]);
    }

    //function for edit employee request
    public function editEmployeeRequest(Request $request)
    {
        $edit = RequestModels::find($request->requestID);
        return response()->json([
            'edit' => $edit
        ]);
    }

    //function for update empolyee request
    public function UpdateemployeeRequest(Request $request)
    {
        $update = RequestModels::find($request->EditrequestID);
        $update->from_date = $request->em_form_date;
        $update->to_date = $request->to_date;
        $update->rate_type = $request->rate_type;
        $update->hours = $request->hours;
        $update->description = $request->requestdescription;
        $update->save();
        return response()->json([
            'update' => $update
        ]);
    }

    //function for request cancelled
    public function cancelled(Request $request)
    {
        RequestModels::where('id', $request->deleteCancelled)->update(['status' => 'Cancelled']);
        return response()->json([
            'status' => 200,
            'message' => 'updated successfully!'
        ]);
    }
}
