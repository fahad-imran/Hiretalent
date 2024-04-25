<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ContactUsController extends Controller
{
   public function  contact_us()
   {
      return view('contactus');
   }

   public function contactUsStore(Request $request)
   {
      $contact_us = new Contact;
      $contact_us->name = $request->name;
      $contact_us->email = $request->email;
      $contact_us->subject = $request->subject;
      $contact_us->message = $request->message;
      $contact_us->save();

      $details = [
         'name' => $request->name,
         'email' => $request->email,
         'subject' => $request->subject,
         'message' => $request->message
      ];
      $hiretalent = "Info@hiretalent.cz";
      \Illuminate\Support\Facades\Mail::to($hiretalent)->send(new \App\Mail\ContactMail($details));
      return redirect(app()->getLocale() . '/contact/thank-you')->with('message', 'Thank you for Contacting us, we will come back to you soon');
   }
}
