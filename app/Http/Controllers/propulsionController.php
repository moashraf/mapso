<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Propulsion;
 use App\Slider;
 use App\Sitesettings;

class propulsionController extends Controller
{

 

	
	public function home ()
    {
  
  
 $slider =   Slider::all();

  $Propulsion =   Propulsion::limit(20)->get();

    $flight =   Sitesettings::all();

     return view('Propulsion', ['Propulsion' => $Propulsion ,'getallnews' => $flight , 'slider' => $slider]);


  
 
    }
	
}
