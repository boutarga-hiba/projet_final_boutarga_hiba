<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    //

    public function index(){
        $infos = Info::all();
        return view('backend.pages.info',compact("infos"));
    }

    public function update (Request $request , Info $info) {
        $request->validate([
            "ville" => "required",
            "adrs" => "required",
            "phone" => "required",
            "emploi" => "required",
            "email" => "required",
            "title" => "required"
        ]);

        $info->update([
            "ville" => $request->ville,
            "adrs" => $request->adrs,
            "phone" => $request->phone,
            "emploi" => $request->emploi,
            "email" => $request->email,
            "title" => $request->title
        ]);

        return back()->with("success" , "Info changed  successfully");
    }
}
