<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Testimonial;
  use App\Slider;
 use App\Sitesettings;

class TESTIMONIALSController extends Controller
{

 public function home ()
    {
  
 $slider =   Slider::all();

  $Testimonial =   Testimonial::limit(10)->get();

    $flight =   Sitesettings::all();

     return view('TESTIMONIALS', ['Testimonial' => $Testimonial ,'getallnews' => $flight , 'slider' => $slider]);

  
 
    }
	
	
 
	
}
