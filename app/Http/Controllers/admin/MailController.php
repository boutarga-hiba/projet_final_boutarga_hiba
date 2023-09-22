<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\Email;
use App\Models\MailBoxe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function index()
    {
        $emails=MailBoxe::all();
        return view("backend.pages.mailBoxe",compact("emails"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "message" => "required",
            "name" => "required",
            'email' => "required",
            "subject" => "required"
        ]);

        MailBoxe::create([
            "message" => $request->message,
            "name" => $request->name,
            'email' => $request->email,
            "subject" => $request->subject
        ]);

        $DemoMail=([
            "message" => $request->message,
            "name" => $request->name,
            'email' => $request->email,
            "subject" => $request->subject
        ]);

        Mail::to("admin@gmail.com")->send(new Email($DemoMail));
        return redirect()->back()->with("succes",'you have send your message ');


    }
}
