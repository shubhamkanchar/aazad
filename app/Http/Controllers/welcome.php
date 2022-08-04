<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class welcome extends Controller
{
    public function change_lang(Request $request)
    {
        App::setlocale($request->lang);
        session()->put('lang_code',$request->lang);
        return redirect()->back();
    } 

    public function welcome(Request $request)
    {
        return view('welcome');
    }

    public function about(Request $request)
    {
        return view('about');
    }

    public function event(Request $request)
    {
        return view('event');
    }

    public function works(Request $request)
    {
        return view('works');
    }

    public function gallery(Request $request)
    {
        return view('gallery');
    }

    public function contact(Request $request)
    {
        return view('contact');
    }
}
