<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   use App\AboutUs;
 use App\Sitesettings;

class AboutUsController extends Controller
{

 public function  AboutUs ()
    {
  
 $AboutUs =   AboutUs::all();

     $flight =   Sitesettings::all();

     return view('AboutUs', [ 'getallnews' => $flight , 'AboutUs' => $AboutUs]);

  
 
    }
	
	
 
	
}
