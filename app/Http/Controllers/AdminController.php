<?php

namespace App\Http\Controllers;

use App\Models\donation;
use App\Models\event;
use App\Models\gallery;
use App\Models\request as ModelsRequest;
use App\Models\User;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $r_count = ModelsRequest::count();
        $u_count = User::where('type', 0)->count();
        $b_count = 0;
        $c_count = 0;
        return view('admin.home', ['r_count' => $r_count, 'u_count' => $u_count, 'b_count' => $b_count, 'c_count' => $c_count]);
    }

    public function add_donation()
    {
        return view('admin.donation.create');
    }

    public function create_donation(Request $request)
    {

        if ($request->id) {

            $request->validate([
                'name' => 'required',
                'goal' => 'required'
            ]);

            $donation = donation::where('id', $request->id)->first();

            if ($request->file('file')) :
                if (isset($donation->file) && !empty($donation->file)) :
                    if (File::exists(public_path('uploads/donation') . '/' . $donation->file)) :
                        File::delete(public_path('uploads/donation') . '/' . $donation->file);
                    endif;
                endif;

                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);

                    $path = public_path('uploads/donation');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            else :
                $file_name = isset($donation->file) ? $donation->file : '';
            endif;

            donation::where('id', $request->id)->update([
                'name' => $request->name,
                'file' => $file_name,
                'name_mr' => $request->name_mr,
                'goal' => $request->goal,
            ]);

            return redirect()->route('admin.add_donation')->with('success', 'donation updated successfully');
        } else {
            $request->validate([
                'name' => 'required',
                'goal' => 'required',
                'file' => 'required'
            ]);

            if ($request->file('file')) :
                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);

                    $path = public_path('uploads/donation');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            endif;

            donation::create([
                'name' => $request->name,
                'file' => $file_name,
                'name_mr' => $request->name_mr,
                'goal' => $request->goal,
            ]);

            return redirect()->route('admin.add_donation')->with('success', 'donation created successfully');
        }
    }

    public function donation_list()
    {
        $data = donation::all();
        return view('admin.donation.list', ['data' => $data]);
    }

    public function update_donation(Request $request)
    {
        $data = donation::find($request->id);
        return view('admin.donation.create', ['data' => $data]);
    }

    public function donation_delete(Request $request)
    {
        donation::where('id', $request->id)->delete();
        return redirect()->route('admin.donation_list')->with('success', 'donation Deleted successfully');
    }


    public function add_event()
    {
        return view('admin.event.create');
    }

    public function create_event(Request $request)
    {

        if ($request->id) {
            $request->validate([
                'name' => 'required',
                'from' => 'required',
                'to' => 'required',
                'desc' => 'required',
                'date' => 'required',
                'location' => 'required',
                'link' => 'required',
            ]);

            $event = event::where('id', $request->id)->first();

            if ($request->file('file')) :
                if (isset($event->file) && !empty($event->file)) :
                    if (File::exists(public_path('uploads/event') . '/' . $event->file)) :
                        File::delete(public_path('uploads/event') . '/' . $event->file);
                    endif;
                endif;

                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);

                    $path = public_path('uploads/event');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            else :
                $file_name = isset($event->file) ? $event->file : '';
            endif;

            // $pdf='';
            // if ($request->file('pdf')) :
            //     $files=$request->file('pdf');
            //     foreach($files as $f){
            //         $cover = $f;
            //         if ($cover) :
            //             $pdf = time() . '-' . $cover->getClientOriginalName();
            //             $pdf = str_replace(' ', '_', $pdf);

            //             $path = public_path('uploads/pdf');
            //             $cover->move($path, $pdf);
            //             $pdf = $pdf;

            //             // pdfs::create([
            //             //     'event_id'=>$event->id,
            //             //     'name'=>$cover->getClientOriginalName(),
            //             //     'file'=>$pdf,
            //             // ]);
            //         endif;
            //     }
            // endif;

            event::where('id', $request->id)->update([
                'name' => $request->name,
                'file' => $file_name,
                'from' => $request->from,
                'to' => $request->to,
                'desc' => $request->desc,
                'date' => $request->date,
                'location' => $request->location,
                'link' => $request->link,
            ]);

            return redirect()->route('admin.add_event')->with('success', 'event updated successfully');
        } else {

            $request->validate([
                'name' => 'required',
                'from' => 'required',
                'file' => 'required',
                'to' => 'required',
                'desc' => 'required',
                'date' => 'required',
                'location' => 'required',
                'link' => 'required',
            ]);

            $file_name = '';
            if ($request->file('file')) :
                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);

                    $path = public_path('uploads/event');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            endif;


            $event = event::create([
                'name' => $request->name,
                'file' => $file_name,
                'from' => $request->from,
                'to' => $request->to,
                'desc' => $request->desc,
                'date' => $request->date,
                'location' => $request->location,
                'link' => $request->link,
            ]);

            return redirect()->route('admin.add_event')->with('success', 'event created successfully');
        }
    }

    public function event_list()
    {
        $data = event::all();
        return view('admin.event.list', ['data' => $data]);
    }

    public function update_event(Request $request)
    {
        $data = event::find($request->id);
        return view('admin.event.create', ['data' => $data]);
    }

    public function event_delete(Request $request)
    {
        event::where('id', $request->id)->delete();
        return redirect()->route('admin.event_list')->with('success', 'event Deleted successfully');
    }


    public function add_gallery()
    {
        return view('admin.gallery.create');
    }

    public function create_gallery(Request $request)
    {

        if ($request->id) {

            $gallery = gallery::where('id', $request->id)->first();

            if ($request->file('file')) :
                if (isset($gallery->file) && !empty($gallery->file)) :
                    if (File::exists(public_path('uploads/gallery') . '/' . $gallery->file)) :
                        File::delete(public_path('uploads/gallery') . '/' . $gallery->file);
                    endif;
                endif;

                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);

                    $path = public_path('uploads/gallery');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            else :
                $file_name = isset($gallery->file) ? $gallery->file : '';
            endif;

            gallery::where('id', $request->id)->update([
                'name' => $request->name,
                'file' => $file_name,
            ]);

            return redirect()->route('admin.add_gallery')->with('success', 'gallery updated successfully');
        } else {

            $request->validate([
                'file' => 'required',
            ]);

            if ($request->file('file')) :
                $cover = $request->file('file');

                if ($cover) :
                    foreach ($cover as $c) {
                        $fileName = time() . '-' . $c->getClientOriginalName();
                        $fileName = str_replace(' ', '_', $fileName);

                        $path = public_path('uploads/gallery');
                        $c->move($path, $fileName);
                        $file_name = $fileName;

                        gallery::create([
                            'file' => $file_name,
                        ]);
                    }
                endif;
            endif;

            return redirect()->route('admin.add_gallery')->with('success', 'gallery created successfully');
        }
    }

    public function gallery_list()
    {
        $data = gallery::all();
        return view('admin.gallery.list', ['data' => $data]);
    }

    public function update_gallery(Request $request)
    {
        $event = event::all();
        $data = gallery::find($request->id);
        return view('admin.gallery.create', ['data' => $data, 'event' => $event]);
    }

    public function gallery_delete(Request $request)
    {
        gallery::where('id', $request->id)->delete();
        return redirect()->route('admin.gallery_list')->with('success', 'gallery Deleted successfully');
    }

    public function add_work()
    {
        return view('admin.work.create');
    }

    public function create_work(Request $request)
    {

        if ($request->id) {
            $request->validate([
                'name' => 'required',
                'description' => 'required'
            ]);

            $gallery = work::where('id', $request->id)->first();

            if ($request->file('file')) :
                if (isset($gallery->file) && !empty($gallery->file)) :
                    if (File::exists(public_path('uploads/work') . '/' . $gallery->file)) :
                        File::delete(public_path('uploads/work') . '/' . $gallery->file);
                    endif;
                endif;

                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);

                    $path = public_path('uploads/work');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            else :
                $file_name = isset($gallery->file) ? $gallery->file : '';
            endif;

            work::where('id', $request->id)->update([
                'name' => $request->name,
                'file' => $file_name,
                'description' => $request->description,
            ]);

            return redirect()->route('admin.add_work')->with('success', 'work updated successfully');
        } else {

            $request->validate([
                'name' => 'required',
                'file' => 'required',
                'description' => 'required'
            ]);

            if ($request->file('file')) :
                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);

                    $path = public_path('uploads/work');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            endif;

            work::create([
                'name' => $request->name,
                'file' => $file_name,
                'description' => $request->description,
            ]);

            return redirect()->route('admin.add_work')->with('success', 'work created successfully');
        }
    }

    public function work_list()
    {
        $data = work::all();
        return view('admin.work.list', ['data' => $data]);
    }

    public function update_work(Request $request)
    {
        $event = event::all();
        $data = work::find($request->id);
        return view('admin.work.create', ['data' => $data, 'event' => $event]);
    }

    public function work_delete(Request $request)
    {
        work::where('id', $request->id)->delete();
        return redirect()->route('admin.work_list')->with('success', 'work Deleted successfully');
    }


    public function request_list()
    {
        $data = ModelsRequest::orderBy('created_at', 'desc')->get();
        return view('admin.request.list', ['data' => $data]);
    }

    public function request_gallery(Request $request)
    {
        $event = event::all();
        $data = ModelsRequest::find($request->id);
        return view('admin.request.create', ['data' => $data, 'event' => $event]);
    }

    public function request_delete(Request $request)
    {
        ModelsRequest::where('id', $request->id)->delete();
        return redirect()->route('admin.request_list')->with('success', 'gallery Deleted successfully');
    }
}
