<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use App\Models\donation;
use App\Models\event;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\request as ModelsRequest;
use Illuminate\Support\Facades\Mail;

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
        $event = event::orderBy('created_at','desc')->paginate(10);
        return view('event',['event'=>$event]);
    }

    public function works(Request $request)
    {

        $works = donation::orderBy('created_at','desc')->paginate(10);
        return view('works',['works'=>$works]);
    }

    public function gallery(Request $request)
    {
        $gallery = gallery::orderBy('created_at','desc')->paginate(10);
        return view('gallery',['gallery'=>$gallery]);
    }

    public function contact(Request $request)
    {
        return view('contact');
    }

    public function mail(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'comment'=>$request->comment ?? '',
            'course'=>$request->course ?? '',
            'token'=>$request->token,
        ];

        ModelsRequest::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'message'=>$request->comment ?? '',
            'course'=>$request->course ?? '',
            'type'=>$request->token,
        ]);

        Mail::to('azadfoundation2022@gmail.com')->send(new NotifyMail($data));

        if (Mail::failures()) {
            return response()->json([
                'flag'=>'error',
                'msg'=>'Something went wrong please try again'
            ]);
        } else {
            $msg='';
            if ($request->token == 'message') {
                $msg='message send successfully';
            } elseif ($request->token == 'callback') {
                $msg='Callback requested successfully';
            }
            elseif ($request->token == 'visit') {
                $msg='Visit requested successfully';
            }
            return response()->json([
                'flag'=>'success',
                'msg'=>$msg
            ]);
        }
    }
}
