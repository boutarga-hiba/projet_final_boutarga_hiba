<?php

namespace App\Http\Controllers;

use App\Mail\Subscrib;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function index ()
    {
        $products = Product::all();
        $alea = Product::inRandomOrder()->take(3)->get();
        $last_four_products = Product::latest()->take(4)->get();

        return view("frontend.pages.home",compact("products","alea","last_four_products"));
    }

    public function envoiEmail(Request $request){
        $request->validate([
            "email" => "required",
        ]);

        $Subscribe=([
            "email"=>$request->email,
        ]);
        Mail::to($request->email)->send(new Subscrib($Subscribe));
        return redirect()->back()->with("success",'congratulations y are subscribed');
    }
}
