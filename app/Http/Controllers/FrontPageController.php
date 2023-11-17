<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('Tourism_business/front_home');
    }

    public function about(){
        $data['title']="About Us";
        return view('Tourism_business/front_about',$data);
    }

    public function service(){
        $data['title']="Services";
        return view('Tourism_business/front_service',$data);
    }

    public function package(){
        $data['title']="Package";
        return view('Tourism_business/front_package',$data);
    }

    public function contact(){
        $data['title']="Contact US";
        return view('Tourism_business/front_contact',$data);
    }

    public function destination(){
        $data['title']="Destination";
        return view('Tourism_business/front_destination',$data);
    }

    public function booking(){
        $data['title']="Booking";
        return view('Tourism_business/front_booking',$data);
    }

    public function travel_guide(){
        $data['title']="Guides";
        return view('Tourism_business/front_travel_guide',$data);
    }

    public function testimonail(){
        $data['title']="Testimonail";
        return view('Tourism_business/front_testimonail',$data);
    }


}
