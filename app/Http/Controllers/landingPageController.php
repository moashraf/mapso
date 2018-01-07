<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\LandingPage;
  use App\Sitesettings;
 use App\Slider;
class landingPageController extends Controller
{

 

	
	public function home ()
    {
  
   $slider =   Slider::all();
   $LandingPage =   LandingPage::all();

 
    $flight =   Sitesettings::all();

     return view('Page', ['LandingPage' => $LandingPage ,'getallnews' => $flight , 'slider' => $slider] );

  
  
 
    }
	
}
