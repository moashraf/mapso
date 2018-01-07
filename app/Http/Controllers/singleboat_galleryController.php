<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Boats;
 use App\Slider;
 use App\Sitesettings;

class singleboat_gallery extends Controller
{

 
	
	
	public function home ()
    {
  
 $slider =   Slider::all();

  $Boats =   Boats::paginate(12);

    $flight =   Sitesettings::all();

     return view('boats', ['Boats' => $Boats ,'getallnews' => $flight , 'slider' => $slider]);

  
 
    }
	
}
