<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\ContactUs;
 use App\Slider;
 use App\Sitesettings;

class ContactUsController extends Controller
{

	
	public function home ()
    {
   $ContactUs =   ContactUs::all();

 $slider =   Slider::all();
     $flight =   Sitesettings::all();

     return view('ContactUs', [ 'getallnews' => $flight , 'slider' => $slider , 'ContactUs' => $ContactUs]);

  
 
    }
	
}
