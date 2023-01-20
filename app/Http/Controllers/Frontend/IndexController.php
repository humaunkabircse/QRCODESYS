<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\About;
use App\Models\Slider;
use App\Models\Gallery;
use Illuminate\Http\Request;

use App\Models\Studysubcategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{

//__Index Controller__//
    public function index()
    {

        return view('frontend.apply.index');

        // $slider = Slider::orderBy('id', 'desc')->first();

        // $sliders = DB::table('sliders')->where('menu_status', '0')->get();
        // $StudyAbroadView = Studysubcategory::all()->where('menu_status','1');
        // return view('frontend.index', compact('slider','sliders','StudyAbroadView'));

    }

//__ContactStore  Controller__//
    public function ContactStore(Request $request)
        {

            $validated = $request->validate([

                'phone' => 'required|unique:contactdetails|numeric|digits:11',
                'husbandphone' => 'required|unique:contactdetails|numeric|digits:11',
                ]);



            $data = array();
            // $data['serial'] = $request->serial;
            $data['name'] = $request->name;
            $data['phone'] = $request->phone;
            $data['husbandphone'] = $request->husbandphone;
            $data['occupation'] = $request->occupation;
            $data['husbandoccupation'] = $request->husbandoccupation;
            $data['email'] = $request->email;
            $data['fee'] = $request->fee;
            $data['details'] = $request->details;


            DB::table('contactdetails')->insert($data);

            $notification = array('message' => 'Inserted Successfully', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }





//__ Scan Data Store Controller__//
        public function scanner()
        {
           return view('frontend.apply.create');
        }




















}
